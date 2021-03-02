<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function  index(){

       return view ('Frontend.home');
    }    
   
    public function  aboutus(){

       return view ('Frontend.aboutus');
    }    
}  
