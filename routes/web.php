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

use App\Http\Controllers\TeamsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VacanciesController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', UsersController::class);
Route::resource('teams', TeamsController::class);
Route::resource('vacancies', VacanciesController::class);
Route::post('vacancies/assign/{vacancy}', ['as' => 'vacancies.assign', 'uses' => VacanciesController::class . '@assign']);
Route::get('vacancies/detach/{vacancy}/{user}', ['as' => 'vacancies.detach', 'uses' => VacanciesController::class . '@detach']);