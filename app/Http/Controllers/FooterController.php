<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\FooterMail;
use Illuminate\Support\Facades\Mail;


class footerController extends Controller
{
    public function sendMessage(){
    	$data= request()->validate([
'fullname'=>'required','email'=>'required','phone'=>'required','message'=>'required'
    	]);
    	Mail::to("admin.loreto@email.com")->send(new FooterMail($data));
    	return back();	
    }
}
