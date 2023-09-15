<?php

use App\Http\Controllers\GenreStoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layout');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// ROUTE: Genre Stories
Route::get('/genres/create', [GenreStoryController::class, 'createGenreStory'])->name('create-genre');
Route::get('/genres/list', [GenreStoryController::class, 'getListGenreStories'])->name('list-genre');
Route::post('/genres/store', [GenreStoryController::class, 'storeGenreStory'])->name('store-genre');
Route::delete('/genres/delete/{id}', [GenreStoryController::class, 'deleteGenreStory'])->name('delete-genre');
Route::get('/genres/edit/{id}', [GenreStoryController::class, 'editGenreStory'])->name('edit-genre');
Route::post('/genres/update/{id}', [GenreStoryController::class, 'updateGenreStory'])->name('update-genre');

// ROUTE: Stories
Route::get('/stories/create', [StoryController::class, 'createStory'])->name('create-story');
Route::get('/stories/list', [StoryController::class, 'getListStories'])->name('list-story');
