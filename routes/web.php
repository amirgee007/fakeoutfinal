<?php

//Route::get('/logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

Route::get('/admin', 'AdminAuth\AuthController@showLoginForm');
Route::post('/adminlogin', 'AdminAuth\AuthController@login');


Route::get('/logoutApp', array(
    'as' => 'logoutApp',
    'uses' => 'Auth\LoginController@logout'));


Route::post('/notification', function(){
    return \App\FakeOut\Helper::readNotifications();
})->name('read.notifications');


Route::group(['middleware' => ['admin'] , 'prefix' => '/admin' ], function () {


    Route::post('/dashboard', array(
        'as' => 'post.dashboard',
        'uses' => 'Admin\AdminController@dashboard'));


    Route::get('/dashboard', array(
        'as' => 'get.dashboard',
        'uses' => 'Admin\AdminController@dashboard'));


    Route::get('/dashboard/logout', array(
        'as' => 'logout',
        'uses' => 'AdminAuth\AuthController@logout'));


////////////////////////////////Users Routes///////////////////////////////////
    Route::get('/user', array(
        'as' => 'user.index',
        'uses' => 'Admin\UserController@index'));

    Route::post('/user/add', array(
        'as' => 'user.add',
        'uses' => 'Admin\UserController@store'));


    Route::get('/user/{id}', array(
        'as' => 'user.edit',
        'uses' => 'Admin\UserController@edit'));

    Route::post('/user/{id}', array(
        'as' => 'user.update',
        'uses' => 'Admin\UserController@update'));


    Route::get('/user/delete/{id}', array(
        'as' => 'user.delete',
        'uses' => 'Admin\UserController@destroy'));


////////////////////////////////Events Routes///////////////////////////////////
    Route::get('/event', array(
        'as' => 'event.index',
        'uses' => 'Admin\EventController@index'));

    Route::post('/event/add', array(
        'as' => 'event.add',
        'uses' => 'Admin\EventController@store'));


    Route::get('/event/{id}', array(
        'as' => 'event.edit',
        'uses' => 'Admin\EventController@edit'));

    Route::post('/event/{id}', array(
        'as' => 'event.update',
        'uses' => 'Admin\EventController@update'));


    Route::get('/event/delete/{id}', array(
        'as' => 'event.delete',
        'uses' => 'Admin\EventController@destroy'));



////////////////////////////////PromoterEvents Routes///////////////////////////////////
    Route::get('/promoterEvents', array(
        'as' => 'promoterEvents.index',
        'uses' => 'Admin\EventController@promoterIndex'));

    Route::get('/promoterEvents/add', array(
        'as' => 'promoterEvents.add',
        'uses' => 'Admin\EventController@promoterAdd'));

    Route::post('/promoterEvents/create', array(
        'as' => 'promoterEvents.create',
        'uses' => 'Admin\EventController@promoterStore'));


    Route::get('/promoterEvents/{id}', array(
        'as' => 'promoterEvents.edit',
        'uses' => 'Admin\EventController@promoterEdit'));

    Route::post('/promoterEvents/{id}', array(
        'as' => 'promoterEvents.update',
        'uses' => 'Admin\EventController@promoterUpdate'));


    Route::get('/promoterEvents/delete/{id}', array(
        'as' => 'promoterEvents.delete',
        'uses' => 'Admin\EventController@promoterdestroy'));



////////////////////////////////////////////////////////////////////////
});


Route::get('/', 'PagesController@base')->name('index');

Route::post('/registernew', 'PagesController@register');

Route::get('/about', 'PagesController@about');


// Event manipulation section
Route::get('/event', 'AppController@event');
Route::get('/event/add', 'AppController@eventAdd');
Route::get('/event/edit', 'AppController@eventEdit');
Route::post('/event/add', 'AppController@Add');
Route::get('/event/list/{id}', 'AppController@eventList');
Route::get('/app', 'AppController@appLaunch')->name('app');

Auth::routes();

//api routes
Route::get('/api', 'ApiController@api');
Route::post('/api/createToken', 'ApiController@createToken');
Route::post('/api/event', 'ApiController@getEvents');
Route::post('/api/event/{id}', 'ApiController@getSingleEvent');
Route::post('/api/code/{id}', 'ApiController@getCode');
