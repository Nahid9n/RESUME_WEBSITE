<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/',[SiteController::class,'ShowHome']);
Route::get('/about',[SiteController::class,'ShowAbout']);
Route::get('/skill',[SiteController::class,'ShowSkill']);
Route::get('/project',[SiteController::class,'ShowProject']);
Route::get('/qualification',[SiteController::class,'ShowQualification']);
