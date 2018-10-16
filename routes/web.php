<?php

/*
|
|-----------------------------------------------------------------------------------
| cv sections Route
|-----------------------------------------------------------------------------------    
|
*/


Route::group(['prefix'=>'cv'], function(){
    Route::get('my-cv','CvController@getIndex');
    Route::post('my-cv','CvController@postMessages');
});



/*
|-----------------------------------------------------------------------------------
| reiaz.com all pages 
|-----------------------------------------------------------------------------------    
*/
  

Route::get('reiaz',function(){  return public_path(); });

Route::get('/','PublicPagesController@getIndex');

Route::get('/category/{slug}','PublicPagesController@getCategory');

Route::get('/tag/{slug}','PublicPagesController@getTag');

Route::get('/single-post/{slug}','PublicPagesController@getSinglePost');

Route::get('/contact','PublicPagesController@getContact');

Route::post('/contact','PublicPagesController@postContact');



/*
|
|-----------------------------------------------------------------------------------
| User Login, Logout
|-----------------------------------------------------------------------------------    
|
|   3 sets of Routes:
|           - GET   - login landing page
|           - POST  - login form post route
|           - GET   - logout through get
|
|           - GET   - forgot password landing page
|           - POST  - forgot password form post route
|
|           - GET   - Signup landing page
|           - POST  - Signup form post route
|
*/

Route::group(['prefix'=>'auth'], function(){
    
    Route::get('signup', ['as'=>'signup', 'uses'=>  'AccessController@signup']);
    Route::post('signup',                           'AccessController@postSignup');
    
    Route::get('social/{name}',                 'AccessController@social');
    Route::get('login', ['as'=>'login','uses'=> 'AccessController@login']);
    Route::post('login',                        'AccessController@postLogin');
    
    Route::get('/logout', [
        'as'=>'logout',
        'uses'=> 'AccessController@logout'
    ]);
    
    Route::get('forgot-password',               'AccessController@forgotPassword');
    Route::post('forgot-password',              'AccessController@postForgotPassword');
    
});


// Route::group(['middleware' => ['auth','permission'], 'prefix'=>'admin'], function(){
Route::group(['middleware' => ['auth'], 'prefix'=>'admin'], function(){
    
    
    Route::get('/dashboard', [
        'as'=>'dashboard',
        'uses'=> 'DashboardController@getDashboard'
    ]);
    
    
    //  All Users route
    Route::get('/all-user', [
        'as'=>'alluser',
        'uses'=> 'UsersController@getAllUser'
    ]);
    
    Route::get('/block-user', [
        'as'=>'blockuser',
        'uses'=> 'UsersController@getBlockUser'
    ]);
    
    Route::get('/block-users/{id}', [
        'as'=>'blockusers',
        'uses'=> 'UsersController@getBlockUsers'
    ]);
    
    Route::get('/subscriber', [
        'as'=>'subscriber',
        'uses'=> 'UsersController@getSubscriber'
    ]);
    
    Route::get('/user-create', [
        'as'=>'usercreate',
        'uses'=> 'UsersController@getUserCreate'
    ]);
    
    Route::post('/user-create', [
        'as'=>'userstore',
        'uses'=> 'UsersController@storeuser'
    ]);
    
    Route::get('/role-to-permissions/{id}', [
        'as'=>'roletopermissions',
        'uses'=> 'UsersController@roleToPremissions'
    ]);
    
    Route::PUT('/role-to-permissions', [
        'as'=>'setpermissions',
        'uses'=> 'UsersController@postSetPremissions'
    ]);
    
    
    //  my profile route
    
    Route::get('/my-profile/edit/{id}', [
        'as'=>'myprofileedit',
        'uses'=> 'MyProfile@getEditProfile'
    ]);
    
    Route::get('/my-profile/{id}', [
        'as'=>'myprofile',
        'uses'=> 'MyProfile@getProfile'
    ]);
    
    Route::PUT('/my-profile/{id}', [
        'as'=>'myprofile',
        'uses'=> 'MyProfile@postProfileUpdate'
    ]);
    
    
    Route::get('/my-profile-change-password', [
        'as'=>'changepassword',
        'uses'=> 'MyProfile@changePassword'
    ]);
    
    Route::post('/my-profile-change-password', [
        'as'=>'changepassword',
        'uses'=> 'MyProfile@updatePassword'
    ]);
    
    //  my profile route 
    
    Route::resource('/permissions', 'PermissionController', ['except' => 'destroy']);
    Route::resource('/roles', 'RolesController', ['except' => 'destroy']);



    // my project route
    
    
    Route::get('/subscriber', [
        'as'=>'subscriber',
        'uses'=> 'SubscriberController@getSubscriber'
    ]);
    
    
    Route::resource('/category', 'CategoryController', ['except' => 'destroy']);
    Route::resource('/tag', 'TagsController', ['except' => 'destroy']);
    Route::resource('/settings', 'SettingsController', ['except' => 'destroy']);
    Route::resource('/about-me', 'AboutController', ['except' => 'destroy']);
    Route::resource('/posts', 'PostsController');
    Route::resource('/sliders', 'SliderController');
    
    Route::resource('/videos', 'VideosController');
    

});

