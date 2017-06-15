<?php

Route::get('/logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

Route::get('/admin', 'AdminAuth\AuthController@showLoginForm');
Route::post('/adminlogin', 'AdminAuth\AuthController@login');


Route::get('/logoutApp', array(
    'as' => 'logoutApp',
    'uses' => 'Auth\LoginController@logout'));

Auth::routes();

Route::post('/notification', function(){
    return \App\FakeOut\Helper::readNotifications();
})->name('read.notifications');



Route::get('/', 'PagesController@base')->name('index');

Route::post('/registernew', 'PagesController@register');

Route::get('/about', 'PagesController@about');

//////////////////////////Front End Routes Logged In Users//////////////////////////////////

Route::get('/app', array(
    'as' => 'app',
    'uses' => 'AppController@appLaunch'));


Route::get('/event', array(
    'as' => 'front.event.show',
    'uses' => 'AppController@event'));

Route::get('/event/add', array(
    'as' => 'front.event.add',
    'uses' => 'AppController@eventAdd'));

Route::post('/event/add', array(
    'as' => 'front.event.add.post',
    'uses' => 'AppController@Add'));


Route::get('/event/add/showBarcode/{id}', array(
    'as' => 'front.event.add.showBarcode',
    'uses' => 'AppController@showBarcode'));


Route::get('/add/user-profile/{id}', array(
    'as' => 'front.user.profile.show',
    'uses' => 'UsersProfileController@userProfileShow'));

Route::post('/add/user-profile/store', array(
    'as' => 'front.user.profile.store',
    'uses' => 'UsersProfileController@userProfilestore'));






Route::get('/event/edit', array(
    'as' => 'front.event.edit',
    'uses' => 'AppController@eventEdit'));


Route::get('/event/list/{id}', array(
    'as' => 'front.event.list',
    'uses' => 'AppController@eventList'));





////////////////////////////////////////////////////Admin Pannel/////////////////////////
///
///
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

    Route::get('/promoterEvents/showBarcode/{id}', array(
        'as' => 'promoterEvents.create.showBarcode',
        'uses' => 'Admin\EventController@showBarcode'));


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









//api routes
Route::get('/api', 'ApiController@api');
Route::post('/api/createToken', 'ApiController@createToken');
Route::post('/api/event', 'ApiController@getEvents');
Route::post('/api/event/{id}', 'ApiController@getSingleEvent');
Route::post('/api/code/{id}', 'ApiController@getCode');
