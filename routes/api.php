<?php

use App\Http\Controllers\Api\AnnouncementController;
use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\LinkController;
use App\Http\Controllers\Api\MenuController;
use App\Http\Controllers\Api\NewsController;
use App\Http\Controllers\Api\SettingController;
use App\Http\Controllers\Api\SliderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::name('api')->group(function() {
	// Menu
	Route::get('/menus', [MenuController::class, 'menuGroups'])->name('menus.index');
	Route::get('/menus/{group}', [MenuController::class, 'menuItems'])->name('menu-items.index');

	// News
	Route::get('/news', [NewsController::class, 'index'])->name('news.index');
	Route::get('/news/most-visited', [NewsController::class, 'getMostVisited'])
    ->name('news.getMostVisited');
  Route::get('/news/featured', [NewsController::class, 'getFeatured'])
    ->name('news.featured');
  Route::get('/news/recent', [NewsController::class, 'getRecent'])
    ->name('news.recent');
  Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');

	// Announcement
	Route::get('/announcements', [AnnouncementController::class, 'index'])->name('announcements.index');
	Route::get('/announcements/recent', [AnnouncementController::class, 'getRecent'])->name('announcement.recent');
  Route::get('/announcements/{id}', [AnnouncementController::class, 'show'])->name('announcement.show');

	// Article
	Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
	Route::get('/articles/recent', [ArticleController::class, 'getRecent'])->name('articles.recent');
	Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('article.show');

	// Slider
	Route::get('/sliders', [SliderController::class, 'index'])->name('sliders.index');
	Route::get('/sliders/banners', [SliderController::class, 'getBanners'])->name('sliders.banners');

	// Link
	Route::get('/links', [LinkController::class, 'index'])->name('links.index');
	Route::get('/links/recent', [LinkController::class, 'getRecent'])->name('links.recent');

	// Setting
	Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');

	// Category
	Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

});
