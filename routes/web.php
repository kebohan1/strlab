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

    Route::get('/equipment', 'EquipmentController@index')->name('index.equipment');

    Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
        Route::get('/', 'Admin\AdminDashboardController@index')->name('admin.dashboard');
        
        Route::group(['prefix' => 'teacher'], function () {
            Route::get('/', 'Admin\TeacherController@index')->name('admin.teacher');
            Route::post('/updatephone', 'Admin\TeacherController@updatePhone')->name('admin.teacher.updatephone');
            Route::post('/updateoffice', 'Admin\TeacherController@updateOffice')->name('admin.teacher.updatephone');
            Route::post('/updateemail', 'Admin\TeacherController@updateEmail')->name('admin.teacher.updatephone');

            Route::post('/updateskills', 'Admin\TeacherController@updateSkill')->name('admin.teacher.updateskills');
            Route::post('/updateeducations', 'Admin\TeacherController@updateEducation')->name('admin.teacher.updateeducations');
            Route::post('/createexperience','Admin\TeacherController@createExperience');
            Route::post('/createcounter','Admin\TeacherController@createCounter');
            Route::post('/createarticle','Admin\TeacherController@createArticle');
            Route::post('/createspeeding','Admin\TeacherController@createSpeeding');
            Route::post('/createmost','Admin\TeacherController@createMost');
            Route::post('/creatpatent','Admin\TeacherController@createPatent');
        });
    });
    Route::get('/logout', 'Auth\LoginController@logout');
});
