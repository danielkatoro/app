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

Route::get('/', function () {
    $nom="daniel";
    $lastname="katoro";
    return view('welcome')->with(['nom'=> $nom,
    'lastname' => $lastname]);
});

Route::get('/about', function(){

    $name= 'daniel';
    return view('pages.about')->with('name',$name);
});

Route::get('/help', function(){
    return view('pages.help');
});

Route::get('/event', function (){
    return view('pages.event');
});
