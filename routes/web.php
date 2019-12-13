<?php

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
    // return view('index.welcome');
    return view('index.welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/themes', 'ThemeController@index');
Route::put('themes/{id}', 'ThemeController@update');

// Route::resource('themes', 'ThemeController');

//  ADMIN PANEL ROUTES
Route::group([
    'prefix' => 'admin',
    'middleware' => 'admin' 
], function () {
    Route::get('/', 'Admin\AdminController@index');
    Route::resource('/roles', 'Admin\RolesController');
    Route::resource('/permissions', 'Admin\PermissionsController');
    Route::resource('/users', 'Admin\UsersController');
    Route::resource('/pages', 'Admin\PagesController');
    Route::resource('/activitylogs', 'Admin\ActivityLogsController')->only([
        'index', 'show', 'destroy'
    ]);
    Route::resource('/settings', 'Admin\SettingsController');
    Route::get('/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@getGenerator']);
    Route::post('/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@postGenerator']);
});