<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ContentController;

Route::get('/',[ContentController::class,'index'])->name('index#content');


Route::group(['prefix'=>'member'],function(){
Route::get('index',[MemberController::class,'index'])->name('index#member');
Route::get('list/{id}',[MemberController::class,'list'])->name('list#member');
});

Route::group(['prefix'=>'post'],function(){
    Route::get('index',[PostController::class,'index'])->name('post#index');
});
