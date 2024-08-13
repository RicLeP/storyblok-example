<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use Riclep\Storyblok\Http\Controllers\StoryblokController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/{slug?}', [StoryblokController::class, 'show'])
    ->where('slug', '^(?!img).*$');

Route::post('/submit-form', FormController::class)->name('submit-form');
