<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\site1controller;
use App\Http\Controllers\taskscontroller;
use App\Http\Controllers\site01controller;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('about',function(){
    // return view('about');
    // بثلاث طرق لارسال البيانات الى صفحة
    // (view)
    // 1. with 2.compact 3. array

    $name = 'ali';
    $text = 'new text';

    return view('about')->with('name',$name) ->with('text',$text);
     //  (laravel)الطريقة الاولى من (with)
    return view('about', compact('name','text')); // (php) الطريقة الاكثر استخداما وهي من
    // فقط اعطيها اسم المتغير compact
    return view('about',[ //    كتابة بشكل صريحarray 3طريقة
        'name'=> $name,
        'text'=> $text
    ]);
    // ---------------------------------------------------------
});
Route::post('store',function(){
        $name= request('name');
        $text= request('text');
    return view('about', compact('name','text')); // (php) الطريقة الاكثر استخداما وهي من

});

Route::get('tasks',function(){
        $tasks=[
            'first-task'=>'task1',
            'second-task'=> 'task2',
            'thire-task'=>'task3'

        ];
        return view('tasks',compact('tasks'));
});

Route::get('show/{id}',function($id){
    $tasks=[
        'first-task'=>'task1',
        'second-task'=> 'task2',
        'thire-task'=>'task3'

    ];
        $task = $tasks[$id];
        return view('show',compact('task'));
});




// Route::get('/url',function(){ return 'ali mohammed tabash ';});

Route::get('send',function(){
    $name= $_GET['name'];
    return view('about', compact('name'));
});


Route::prefix('site01')->name('site01.')->group(function(){
Route::get('/',[site01controller::class,('index')])->name('index');
Route::get('about',[site01controller::class,('about')])->name('about');
Route::get('contact',[site01controller::class,('contact')])->name('contact');
Route::get('project',[site01controller::class,('project')])->name('project');
});

Route::get('contact',[taskscontroller::class,('index')])->name('contact.index');
Route::get('contact/{id}',[taskscontroller::class,('show')])->name('contact.show');

