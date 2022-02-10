<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/categories', 'CategoryController@index')->name('categories');

Route::get('/AddCategories', 'CategoryController@create')->name('AddCategories');
Route::post('/storeCategories', 'CategoryController@store')->name('storeCategories');
Route::get('/editCategories/{id}', 'CategoryController@edit')->name('editCategories');
Route::post('/updateCategories/{id}', 'CategoryController@update')->name('updateCategories');
Route::delete('/destroyCategories/{id}', 'CategoryController@destroy')->name('editCategories');


Route::get('/courses', 'CourseController@index')->name('courses');
Route::get('/AddCourses', 'CourseController@create')->name('AddCourses');
Route::post('/storeCourses', 'CourseController@store')->name('storeCourses');
Route::get('/editCourses/{id}', 'CourseController@edit')->name('editCourses');
Route::post('/updateCourses/{id}', 'CourseController@update')->name('updateCourses');
Route::delete('/destroyCourses/{id}', 'CourseController@destroy')->name('editCourses');