<?php

namespace App\Http\Controllers;

use App\Mail\sendmail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class contactcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::all();
        return view("contact", compact("contact"));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
            if ($request->isMethod('post')) {
            $request->validate([
                'fullname' => 'required',
                'email' => 'required|email|max:50',
                'message' => 'required',
            ], [
                'fullname.required' => 'Proporciona nombre completo.',
                'email.max' => 'Email con máximo 50 caracteres.',
                'message.required' => 'Favor de escribir el mensaje.',
            ]);
            $contact = new Contact();
            $contact->fullname = $request->input('fullname');
            $contact->email = $request->input('email');
            $contact->message = $request->input('message');
            $contact->save();
            $data = array(
                'fullname'=>  $request->input('fullname'),
                'message'=>   $request->input('message')
            );
            $email = $request->input('email');
            Mail::to('jahirbear@gmail.com')->send(new sendmail($data));
            return redirect()->route('contact.index')->with('success', 'You message has been sent.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
