<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!

MVC = Model View Controller

Controller = Handle requests

Model = Handle data logic and interactions with Database

View = What should be shown to the user (HTML and CSS code / Blade files)


to create a Controller : php artisan make:controller controllerName

|
*/

Route::get('/', [DashboardController::class, "index"])->name('dashboard');

Route::get('/ideas/{idea}', [IdeaController::class, "show"])->name('ideas.show');


Route::get('/ideas/{idea}/edit', [IdeaController::class, "edit"])->name('ideas.edit');


Route::put('/ideas/{idea}', [IdeaController::class, "update"])->name('ideas.update');


Route::post('/ideas', [IdeaController::class, "store"])->name('ideas.store');


Route::delete('/ideas/{id}', [IdeaController::class, 'destroy'])->name('ideas.destroy');


Route::post('ideas/{idea}/comments', [CommentController::class, 'store'])->name('ideas.comments.store');


Route::get('/terms', function(){
    return view("terms");
});
