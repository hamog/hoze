<?php

use App\Http\Controllers\Admin\AnnouncementController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\LinkController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\NewsContoller;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::name('admin.')->prefix('/admin')->group(function() {

	Route::middleware('guest')->controller(AuthController::class)->group(function() {
		Route::get('/login', 'showLoginForm')->name('login.form');
		Route::post('/login', 'login')->name('login');
	});

	Route::middleware('auth')->group(function() {
		// Dashboard
		Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
		// Logout
		Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
		// Category
		Route::apiResource('/category', CategoryController::class)->except('show');
		// News
		Route::resource('/news', NewsContoller::class);
		// Tags
		Route::apiResource('/tag', TagController::class)->except('show');
		// Links
		Route::resource('/link', LinkController::class);
		// Announcements
		Route::resource('/announcement', AnnouncementController::class);
		// Articles
		Route::resource('/article', ArticleController::class);
		// Sliders
		Route::resource('/slider', SliderController::class);
		// Menus
		Route::name('menus.')->prefix('/menus')->controller(MenuController::class)->group(function() {
			Route::get('/', 'groups')->name('groups');
			Route::patch('/sort', 'sortMenus')->name('sort');
			Route::get('/{menuGroupId}', 'index')->name('index');
			Route::post('/', 'store')->name('store');
			Route::patch('/{menuItem}', 'update')->name('update');
			Route::delete('/{menuItem}', 'destroy')->name('destroy');
		});
		// Profile
		Route::name('profile.')->controller(ProfileController::class)->group(function() {
			Route::get('/{userId}', 'edit')->name('edit');
			Route::patch('/{userId}', 'update')->name('update');
			Route::put('/{userId}/change-password', 'changePassword')->name('changePassword');
		});
		// Setting
		Route::name('setting.')->prefix('setting')->controller(SettingController::class)->group(function() {
			Route::get('/', 'index')->name('index');
			Route::get('/{group}', 'edit')->name('edit');
			Route::patch('/', 'update')->name('update');
			Route::delete('/{setting}/file', 'destroyFile')->name('destroy.file');
		});
	});
});

