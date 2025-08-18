<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ContentController;

Route::get('/',[ContentController::class,'index'])->name('index#content');

Route::get('member',[MemberController::class,'index'])->name('index#member');
