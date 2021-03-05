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
    $name='daniel';
    $isweekend= date('N') >=6;
    $title='super titre';
    $contenu='super conenu';
    dump(DB::select('SELECT * FROM post LIMIT 3'));

    DB::table('post')->whereId(4)
                    ->update([
                        'title'=>'Magnifiaue titre 1',
                        'body'=>'Magnifique contenu1'
                    ]);

    // $post=(DB::table('post')->get('body'));

    // DB::table('post')->insert([
    //     'title'=> 'Magnifique titre',
    //     'body'=> 'Magnifique body'
    // ]);
    // dd($post->title);
    // DB::insert('INSERT INTO post (title,body) VALUES (:title, :contenu)',[
    //     'title'=> $title,
    //     'contenu'=>$contenu
    // ]);

    return view('welcome',compact('name','isweekend'));
});

Route::get('/about', function(){

    $name= 'daniel';
    return view('pages.about')->with('name',$name);
});

Route::get('/help', function(){
    return view('pages.help');
});

Route::get('/event', function (){
    $events=[
        'Make php great again',
        'PHP conference',
        'Meet up tdn',
        'Laravel conference'
    ];

    return view('pages.events.index',compact('events'));
});
