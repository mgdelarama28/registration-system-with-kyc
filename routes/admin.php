<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Auth::routes();

Route::namespace('Admin')->name('admin.')->prefix('admin')->group(function() {
	Route::namespace('Auth')->middleware('guest:admin')->group(function() {
		Route::get('login', 'LoginController@showLoginForm')->name('login');
		Route::post('login', 'LoginController@login')->name('login');
	});

	Route::middleware('auth:admin')->group(function() {
		Route::namespace('Auth')->group(function() {
			Route::post('logout', 'LoginController@logout')->name('logout');
		});

		Route::get('/', 'DashboardController@index')->name('dashboard');
		// Route::get('/activity_logs', function() {
		// 	return view('admin.pages.activity_logs');
		// })->name('activity_logs');
		Route::get('/activity_logs', 'ActivityLogController@index')->name('activity_logs');
	});
});
