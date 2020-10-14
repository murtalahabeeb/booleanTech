<?php

use Illuminate\Support\Facades\Route;
use App\Mail\ContactMessage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

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


Route::get('/', function () {

    return view('index');
});


Route::get('/about-us', function () {
    return view('aboutus');
});



Route::get('/teams', function () {
    return view('teams');
});

Route::get('/services', function () {
    return view('all-services');
});


Route::get('/web-dev', function () {
    return view('web-dev');
});


Route::get('/ios-dev', function () {
    return view('ios-dev');
});

Route::get('/android-dev', function () {
    return view('android-dev');
});

Route::get('/ui-ux', function () {
    return view('ui-ux');
});


Route::get('/seo-digital-marketing', function () {
    return view('seo');
});

Route::get('/contact-us', function () {
    return view('contact');
});

Route::post('/contact-us', function(Request $request) {
    $request->validate([
        'name'=>'required',
        'phone' =>'required|min:11|max:11',
        'email'=>'required|email',
        'message'=>'required'

    ]);
    $data=['name'=>$request->input("name"),'phone'=>$request->input("phone"),'email'=>$request->input("email"),'message'=>$request->input("message"),'subject'=>$request->input("subject")];
    Mail::to("thebooleantech@gmail.com")->send(new ContactMessage($data));
    return redirect("/contact-us");
});
