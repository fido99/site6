<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TemplateController extends Controller
{
    public function setTitle(Request $request) {
    	$title = $request->input('title');
    	$email = $request->input('email');
    	$footer_text = $request->input('footer_text');
    	$logo;
    	$upload_folder = 'public/folder';

        if ($request->file("logo_url")) {
             $logo = $request->file("logo_url");
             $file_name = $request->file('logo_url')->getClientOriginalName();
             Storage::putFileAs($upload_folder, $logo, $file_name); 
        } else {
             $file_name = DB::table('page')->select('logo_url')->first()->logo_url;
        }
     
    	 


      
        DB::table('page')->truncate();
    	DB::table('page')->insert(['title' => $title,
    		                        'logo_url' => $file_name,
    		                        'email' => $email,
    		                        'footer_text' => $footer_text,
                                   ]);

   
        return redirect(route("home"));
    }
}
