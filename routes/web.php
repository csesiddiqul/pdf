<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/mypdf',[PDFController::class,'mypdf']);
