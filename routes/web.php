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
    return view('welcome');
});

Route::get('/portfolio', 'FrontendController@index')->name('index');

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/admin/portfolio', 'Admin\ProjectsController@index')->name('admin.portfolio.index');
Route::post('/admin/portfolio/store', 'Admin\ProjectsController@store')->name('admin.portfolio.store');

Route::get('/admin/portfolio/{projectId}/edit', 'Admin\ProjectsController@edit')->name('admin.portfolio.edit');
Route::post('/admin/portfolio/{projectId}/update', 'Admin\ProjectsController@update')->name('admin.portfolio.update');
Route::delete('/admin/portfolio/{projectId}/delete', 'Admin\ProjectsController@delete')->name('admin.portfolio.delete');
// Route::get('/', 'Admin\AdminController@index')->name('admin.index');


/*
- title
- featured
- description
*/