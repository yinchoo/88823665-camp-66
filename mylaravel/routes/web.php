<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\CheckLogin;



Route::get('/home',
    [HomeController::class, 'home']);

Route::get('/login',
    [LoginController::class, 'index']);

Route::get('register' ,
    [RegisterController::class, 'index']); 

Route::get('/hello', function () {
    return "<h1>Hello World!</h1>";
});

Route::post('/register',  [RegisterController::class, 'create']);

Route::get("/mycontroller/{id?}", 
    [MyController::class, 'myfunction']);

Route::get('/logout', function(){
    session() -> forget('user');
    session() -> flush();
    return redirect('/login');
});



Route::get('/',
    [HomeController::class,'index'])->middleware([CheckLogin::class]);
Route::get('/login',
    [loginController::class,'index']);
Route::post('/login',
    [loginController::class,'login']);


Route::middleware([CheckLogin::class])-> group (function () {
Route::get('/users', 
    [UserController::class, 'index']);
Route::get('/user/{id}', 
    [UserController::class, 'edit']);
Route::put('/user', 
    [UserController::class, 'edit_action']);
Route::delete('/user', 
    [UserController::class, 'delete']);
Route::get('/product',
    [ProductController::class,'index']);
Route::post('/product',
    [ProductController::class,'add_product']);
});


Route::get('/500', function () {
        abort(500); // บังคับให้ Laravel แสดงหน้า 500 Error
    });


Route::post("/mycontroller/{id?}", 
    [MyController::class, 'myfunction']);

Route::get('/', function() {
    return view('home');
});