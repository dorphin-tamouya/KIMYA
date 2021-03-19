<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests\SendRequest;

class PaymentController extends Controller
{

    public function send(Request $request)
    {
        $data = $request->input();

//        dd($data);
        $fees = $this->fees();
        $totals = $this->totals();
        return view('money.send', compact('data', 'fees', 'totals'));
    }

    public function checkSend(SendRequest $request)
    {
        return view('money.confirm');
    }


    public function fees()
    {
        return request('recipientGets') * 0.05;
    }

    public function totals()
    {
        return request('recipientGets') + $this->fees();
    }
}

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

   public function  sendconfirm(){

      return view ('Frontend.sendconfirm');
   }    

   public function  sendsuccess(){

      return view ('Frontend.sendsuccess');
   }    

   public function  dashboard(){

      return view ('Frontend.dashboard');
   }    

   public function  profile(){

      return view ('Frontend.profile');
   }    

   public function  security(){

      return view ('Frontend.security');
   }    

   public function  paymentmethods(){

      return view ('Frontend.paymentmethods');
   }    
}  
