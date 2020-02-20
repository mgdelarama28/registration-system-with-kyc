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
		Route::get('/roles', 'RoleController@index')->name('roles.index');
		Route::get('/roles/create', 'RoleController@create')->name('roles.create');
		Route::get('/admins', 'AdminController@index')->name('admins.index');
		Route::get('/permissions', 'PermissionController@index')->name('permissions.index');
		Route::get('/activity_logs', 'ActivityLogController@index')->name('activity_logs');

		/** Sample */
		Route::get('/samples', 'SampleController@index')->name('samples.index');
		Route::get('/samples/create', 'SampleController@create')->name('samples.create');
		Route::get('/samples/{id}', 'SampleController@show')->name('samples.show');
		Route::get('/samples/{id}/edit', 'SampleController@edit')->name('samples.edit');
		Route::get('/samples/{id}/destroy', 'SampleController@destroy')->name('samples.destroy');

		Route::post('/samples', 'SampleController@store')->name('samples.store');
		Route::post('/samples/{id}', 'SampleController@update')->name('samples.update');
	});
});
