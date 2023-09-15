<?php

use App\Http\Controllers\GenreStoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/', function () {
    return view('layout');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

// ROUTE: Genre Stories
Route::get('/genres/create', [GenreStoryController::class, 'createGenreStory'])->name('create-genre');
Route::get('/genres/list', [GenreStoryController::class, 'getListGenreStories'])->name('list-genre');
Route::post('/genres/store', [GenreStoryController::class, 'storeGenreStory'])->name('store-genre');

// ROUTE: Stories
Route::get('/stories/create', [StoryController::class, 'createStory'])->name('create-story');
Route::get('/stories/list', [StoryController::class, 'getListStories'])->name('list-story');
