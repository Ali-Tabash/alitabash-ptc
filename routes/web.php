<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('about',function(){
    // return view('about');
    // بثلاث طرق لارسال البيانات الى صفحة
    // (view)
    // 1. with 2.compact 3. array

    $name = 'ali';
    $text = 'new text';

    // return view('about')->with('name',$name) ->with('text',$text);
     //  (laravel)الطريقة الاولى من (with)
    return view('about', compact('name','text')); // (php) الطريقة الاكثر استخداما وهي من
    // فقط اعطيها اسم المتغير compact
    return view('about',[ //    كتابة بشكل صريحarray 3طريقة
        'name'=> $name,
        'text'=> $text
    ]);
});
