<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\ComettieController;
use App\Http\Controllers\RegisterController;

Route::get('/',[ContentController::class,'index'])->name('index#content');


Route::group(['prefix'=>'member'],function(){
Route::get('index',[MemberController::class,'index'])->name('index#member');
Route::get('list/{id}',[MemberController::class,'list'])->name('list#member');
Route::get('council',[MemberController::class,'council'])->name('council#member');
});

Route::group(['prefix'=>'post'],function(){
    Route::get('index',[PostController::class,'index'])->name('post#index');
    Route::get('detail/{id}',[PostController::class,'detail'])->name('post#detail');
    Route::get('loan',[PostController::class,'loan'])->name('post#loan');
    Route::get('Loandetail/{id}',[PostController::class,'Loandetail'])->name('post#detail_loan');
});

Route::get('shops',[ShopController::class,'shop'])->name('shop#index');
Route::get('shop_detail/{id}',[ShopController::class,'detail'])->name('shop#detail');
Route::get('comettie',[ComettieController::class,'cmt'])->name('comettie#index');
Route::get('aboutUs',[ComettieController::class,'about'])->name('about#us');


Route::group(['prefix'=>'contact'],function(){
Route::get('contactUs',[ContactController::class,'create'])->name('contact#create');
Route::post('contactUs',[ContactController::class,'store'])->name('contact#store');
});

Route::group(['prefix'=>'register'],function(){
Route::get('form',[RegisterController::class,'index'])->name('register#index');
Route::post('form/create',[RegisterController::class,'create'])->name('register#create');
Route::get('login',[LoginController::class,'login'])->name('register#login');
});
