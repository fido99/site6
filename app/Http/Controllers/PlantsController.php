<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plants;

class PlantsController extends Controller
{
 
    public function delete(Request $request) 
    {
       $dleteData = Plants::where("id", "=", $request->id);
       $dleteData->delete();
       return redirect(route("admin"));
    }
}
