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

    public function  help(){

      return view ('Frontend.help');
   }
   
    public function  contactus(){

      return view ('Frontend.contactus');
   }    

   public function  login(){

      return view ('Frontend.login');
   }    

   public function  signup(){

      return view ('Frontend.signup');
   }    
   
   public function  policy(){

      return view ('Frontend.policy');
   }    

   public function  terms(){

      return view ('Frontend.terms');
   }    

   public function  fees(){

      return view ('Frontend.fees');
   }    

}  
