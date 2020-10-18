<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /*
    public function __construct()
    {
        $this->middleware('auth');
    }
    */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $slider = DB::table('slider')->get();
        $title = DB::table('page')->select('title')->first()->title;
        $footer_text = DB::table('page')->select('footer_text')->first()->footer_text;
        $logo_url = DB::table('page')->select('logo_url')->first()->logo_url;
        $email = DB::table('page')->select('email')->first()->email;

        return view('home', ['logo' => $logo_url, 
                             'title' => $title, 
                             'footer_text' => $footer_text, 
                             'slider' => $slider, 
                             'email' => $email
                             ]);
    }
}
