<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;


class productcontroller extends Controller
{
    public function shoppage(){
        $products=Product::all();
        $categories=Category::all();

        return view("shop",compact('categories','products'));
    }

    public function detailproductspage($id){
        $products=Product::find($id);
        $categories=Category::all();
        $comments=Comments::all();

        return view("detailproducts",compact('categories','products','comments'));
    }

    public function commentsbd(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'fullname' => 'required',
                'email' => 'required|email|max:50',
                'message' => 'required',
                'product_id'=>'required',
            ], [
                'fullname.required' => 'Proporciona nombre completo.',
                'email.max' => 'Email con máximo 50 caracteres.',
                'message.required' => 'Favor de escribir el mensaje.',
                'product_id.required'=>'Seleccione el producto',
            ]);
            $comments = new Comments();
            $comments->fullname = $request->input('fullname');
            $comments->email = $request->input('email');
            $comments->message = $request->input('message');
            $comments->product_id= $request->input('product_id');
            $comments->save();
            return redirect()->route('detailproducts',$comments->product_id)->with('success', 'You message has been sent.');
        }
    }

}