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

Route::get('/', 'WelcomeController@index');

Auth::routes();
//check if exists user in db redirect
$user = \App\Models\User::get();
foreach ($user as $users)
if(!empty($users->fullName)){
    Route::match(['get', 'post'], 'register', function(){
        return redirect('/');
    });
}

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('users', 'UserController');
    Route::resource('counters', 'CounterController');
    Route::resource('experiences', 'ExperienceController');
    Route::resource('education', 'EducationController');
    Route::resource('skills', 'SkillController');
    Route::resource('pictures', 'PictureController');
    Route::resource('socials', 'SocialController');
    Route::resource('portfolios', 'PortfolioController');
});