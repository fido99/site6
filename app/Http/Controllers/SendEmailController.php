<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Mail;

class SendEmailController extends Controller
{
    public function send(Request $request) 
    {
    	$phone = $request->input('phone');
    	 
    	Mail::send(['text' => 'email'], ['phone' => $phone], function($message) {
    	  $from  =  DB::table('page')->select('email')->first()->email;
    	  $message->to($from, 'To web')->subject('Test email');
    	  $message->from($from, 'web');
    	});

    	return response()->json(['1' => 'yes']);
      

    
    }
}
