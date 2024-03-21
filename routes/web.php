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
// Route::get('/post/firstpost', function () {
//     return view('firstpost');
// });

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

// Route::get('/post/{id?}/comment/{commentid?}', function (string $id=null,string $cid=null ) {
//     // return "<h1>post id :" .$id."</h1>";
//     return view('post')->with(['userid'=>$id,'cid'=>$cid]);
// });

// strict parameter 

// Route::get('/post/{id?}', function (string $id=null ) {
//     // return "<h1>post id :" .$id."</h1>";
//     return view('post')->with('userid', $id);
// })->whereNumber('id');

// whereNumber()
// whereAlpha()
// whereAlphaNumeric()
// whereIn('category',['movie','song']) //sirf movie or song in parameter ki value ho sakhti hai 
// where('id','[@0-9]+') regular expression 


// nameed route

// Route::get('/post/about', function () {
//     // return "<h1>post id :" .$id."</h1>";
//     return view('post');
// })->name('about');


// transfer route 

// i want get user write test roy=ute in url but it will redirect on post page


// Route::get('/post', function () {
//     return view('post');
// });

// Route::redirect('/test','/post',301);

// // code for http status 
// // mostlty use 301 code 
// // 301 permanet page  transfer but may change
// // 302 temporary may change 
// // 307 temporary not change 
// // 308 permanet not change 


// group routes 
// Route::prefix('page')->group(function(){

//     Route::get('/post', function () {
//      return view('post');
// });

// Route::get('/first', function () {
//     return view('firstpost');
// });

// });

// url bany gi  page/post  and page/first 


// 404 page

Route::fallback(function(){
    return "<h1>not found</h1>";
});