<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/post', function () {
//      return view('post');
// });


// Route::get('/post', function () {
// html me send kr sakhty hen

//     return "<h1>post page</h1>";
// });


// Route::view('/post','post');

// Route::get('/post', function () {
//     return view('post');
// });
Route::get('/post/firstpost', function () {
    return view('firstpost');
});

// routes with parameter 

// Route::get('/post/{id}', function (string $id) {
//     // return "<h1>post id :" .$id."</h1>";
//     return view('post')->with('userid', $id);
// });

// opional parameter 
// Route::get('/post/{id?}', function (string $id=null ) {
//     // return "<h1>post id :" .$id."</h1>";
//     return view('post')->with('userid', $id);
// });

// multiple parameter 

Route::get('/post/{id?}/comment/{commentid?}', function (string $id=null,string $cid=null ) {
    // return "<h1>post id :" .$id."</h1>";
    return view('post')->with(['userid'=>$id,'cid'=>$cid]);
});

// strict parameter 

Route::get('/post/{id?}', function (string $id=null ) {
    // return "<h1>post id :" .$id."</h1>";
    return view('post')->with('userid', $id);
})->whereNumber('id');

// whereNumber()
// whereAlpha()
// whereAlphaNumeric()
// whereIn('category',['movie','song'])
// where('id','[@0-9]+') regular expression 


