<?php

use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;



Route::get('/', [TemplateController:: class, 'index']);
    return view('welcome');