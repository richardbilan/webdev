<?php

use App\Http\Controllers\TemplateController;
use App\Http\Controllers\ContentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TemplateController::class, 'index']);

Route::get('/content', [ContentController::class, 'index'])->name('content');

