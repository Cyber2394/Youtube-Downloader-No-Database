<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YoutubeController;

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

Route::post('/search-videos', [YoutubeController::class, 'searchVideos'])->name('search-videos');
Route::get('/download-youtube', [YoutubeController::class, 'DownloadYoutube']);
Route::get('/download-youtube-all', [YoutubeController::class, 'DownloadYoutubeAll']);
Route::get('/', [YoutubeController::class, 'showSearchForm']);
