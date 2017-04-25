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

Route::get('/', function () { return view('welcome'); });
Route::get('home', 'HomeController@index');

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('introduction', function () { return view('pages.introduction'); });
    Route::get('home-page-and-user-interface', function () { return view('pages.home-page-and-user-interface'); });
    Route::get('schedule-maintenance', function () { return view('pages.schedule-maintenance'); });
    Route::get('course-maintenance', function () { return view('pages.course-maintenance'); });
    Route::get('instructor-data-management', function () { return view('pages.instructor-data-management'); });
    Route::get('client-company-maintenance', function () { return view('pages.client-company-maintenance'); });
    Route::get('training-fee-maintenance', function () { return view('pages.training-fee-maintenance'); });
    Route::get('discounts', function () { return view('pages.discounts'); });
    Route::get('promos', function () { return view('pages.promos'); });
    Route::get('trainee-data-management', function () { return view('pages.trainee-data-management'); });
    Route::get('enrollment', function () { return view('pages.enrollment'); });
    Route::get('printing-of-certificates', function () { return view('pages.printing-of-certificates'); });
});

Auth::routes();
