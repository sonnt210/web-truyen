<?php

use App\Http\Controllers\GenreStoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\IndexController;
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

Route::get('/', [IndexController::class, 'home']);
Route::get('/story-detail/{id}', [IndexController::class, 'storyDetail'])->name('story-detail');
Route::get('/genre/{slug}', [IndexController::class, 'listStoriesOfGenre'])->name('genre'); // danh sách truyện thuộc danh mục truyện

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
Route::post('/stories/store', [StoryController::class, 'storeStory'])->name('store-story');
Route::get('/stories/edit/{id}', [StoryController::class, 'editStory'])->name('edit-story');
Route::post('/stories/update/{id}', [StoryController::class, 'updateStory'])->name('update-story');
Route::delete('/stories/delete/{id}', [StoryController::class, 'deleteStory'])->name('delete-story');
