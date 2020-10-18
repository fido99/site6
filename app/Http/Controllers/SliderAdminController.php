<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SliderAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {

        $this->middleware("auth"); 

    }


    public function index()
    {
        $slidrItems = DB::table("slider")->get();
        return view("sliderAdmin", ["items" => $slidrItems]);         
    }

    public function createSlide() {
        return view("createSlide");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $zag = $request->input("zag");
        $title = $request->input("title");
        $link = $request->input("link");
        $upload_folder = "public/folder";
        $id = DB::table("slider")->where("id", "=", $request->input("id"))->first();
        $file_name;
        
        
        if ($request->file("image")) {
             $file = $request->file("image");
             $file_name = $request->file('image')->getClientOriginalName();
             // Storage::putFileAs($upload_folder, $file, $file_name);
             $file->move('images/slider', $file_name);
        } else {
             $file_name = "-";
        }
    

        DB::table("slider")->insert([
                                    "zag" => $zag, 
                                    "title" => $title, 
                                    "link" => $link, 
                                    "image" => $file_name
                                    ]);


        return redirect(route("editSlider"));         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $zag = $request->input("zag");
        $title = $request->input("title");
        $link = $request->input("link");
        $upload_folder = "public/folder";
        $id = DB::table("slider")->where("id", "=", $request->input("id"))->first();
        $file_name;
        
        
        if ($request->file("image")) {
             $file = $request->file("image");
             $file_name = $request->file('image')->getClientOriginalName();
             // Storage::putFileAs($upload_folder, $file, $file_name);
             $file->move('images/slider', $file_name);
        } else {
            $id = $request->input("id");
            $file_name = DB::table("slider")->where("id", "=", $id)->first()->image;
        }
    

        DB::table("slider")->where("id", "=", $request->input("id"))->update([
                                                                             "zag" => $zag, 
                                                                             "title" => $title, 
                                                                             "link" => $link, 
                                                                             "image" => $file_name
                                                                             ]);
        return redirect(route("editSlider"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("slider")->where("id", "=", $id)->delete();
        return redirect(route("editSlider"));
    }
}
