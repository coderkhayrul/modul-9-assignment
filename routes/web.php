<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [WebsiteController::class, 'home'])->name('website.home');
Route::get('/about-me', [WebsiteController::class, 'aboutMe'])->name('website.about-me');
Route::get('/project', [WebsiteController::class, 'project'])->name('website.project');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('website.contact');
Route::post('/contact', [WebsiteController::class, 'contactStore'])->name('website.contact.store');
