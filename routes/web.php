<?php

use App\Http\Controllers\postController;
use Illuminate\Support\Facades\Route;

// Route::get('/test', function () {
//     return view('test');
// });

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/test1', function () {
//     return "<h1>welcome Nanthu</h1>";
// });

// // Route::get('/post',[postController::class,'post']);

// Route::get('/greetings', [postController::class, 'greetings']);


// Dynamic Route Parameter

// Route::get('/post/{id}',[postController::class,'postId']);


// Route::get('/postId/{id}',[postController::class,'postId'])->where(' id','[0-9]+'); actully intha parameter la number mattum accept pannanum na ithu Route function oda another method ah use p anni pannalam


// ReDirectes
// Route::get('/oldurl', [postController::class, 'oldUrl']);

// Route::get('/newurl', [postController::class, 'newUrl']);



// Named Routes
// Route::get('/oldurl', [postController::class, 'oldUrl']);
// Route::get('/newsomthingurl', [postController::class, 'newUrl'])->name('newPage');


Route::get('/', [postController::class, 'index']);

Route::get('/post/{id}', [postController::class, 'detail'])->where('id','[0-9]+')->name('posts.detail');
