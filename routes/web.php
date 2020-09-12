<?php

use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();
Auth::routes(['register'=>false]);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/subject','SubjectController@insertView')->name('subjectInsert');
Route::post('/subject','SubjectController@insert')->name('newSubject');
Route::get('/{id}/subject','SubjectController@subjectView')->name('subjectView');

//homeworks routes
Route::get('/homework','HomeworkController@registerView')->name('homeworkRegisterView');