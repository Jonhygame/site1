<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class sitecontroller extends Controller
{
    public function landingpage(){
        return view("index");
    }

    public function faqpage(){
        return view("faq");
    }

}
