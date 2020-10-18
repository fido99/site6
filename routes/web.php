<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes(["register" => true, "forgot" => false, "reset" => false, "logout" => false]);


Route::get("/", [App\Http\Controllers\HomeController::class, "index"])->name('home');
Route::get("/admin", [App\Http\Controllers\AdminController::class, "index"])->name('admin');
Route::get("/admin/slider", [App\Http\Controllers\SliderAdminController::class, "index"])->name("editSlider");
Route::get("/admin/send", [App\Http\Controllers\SendEmailController::class, "send"])->name("send");


Route::post("/admin", [App\Http\Controllers\TemplateController::class, "setTitle"])->name("edit");
Route::post("/admin/slider", [App\Http\Controllers\SliderAdminController::class, "update"])->name("updateSlider");
Route::post("/admin/slider/createSlide", [App\Http\Controllers\SliderAdminController::class, "create"])->name("create");


 
Route::get("/admin/slider/createSlide", [App\Http\Controllers\SliderAdminController::class, "createSlide"])->name("createSlide");
Route::get("/admin/slider/delete/{id}", [App\Http\Controllers\SliderAdminController::class, "destroy"])->name("delete");
Route::get("/admin/plants/delete", [App\Http\Controllers\PlantsController::class, "delete"])->name("plantsDelete");



 