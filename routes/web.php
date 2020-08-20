<?php

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

Route::middleware('throttle:30,1')->group(function () {
    Route::get('/', 'IndexController@index')->name('index');
    Route::get('/teacher', 'TeacherController@index')->name('index.teacher');
    Auth::routes(['register' => 'false']);

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/equipment', 'EquipmentController@index')->name('index.equipment');

    Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
        Route::get('/', 'Admin\AdminDashBoardController@index')->name('admin.dashboard');
        Route::get('/teacher', 'Admin\TeacherController@index')->name('admin.teacher');
        Route::post('/teacher/updatephone', 'Admin\TeacherController@updatePhone')->name('admin.teacher.updatephone');
        Route::post('/teacher/updateskills','Admin\TeacherController@updateSkill')->name('admin.teacher.updateskills');
        Route::post('/teacher/updateeducations','Admin\TeacherController@updateEducation')->name('admin.teacher.updateeducations');
    });
    Route::get('/logout', 'Auth\LoginController@logout');
});
