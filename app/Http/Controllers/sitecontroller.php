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

    public function aboutpage(){
        return view("about");
    }

    public function categories(){
        return view("categories");
    }
    
    public function login(){
		return view("login");	
	}
}
