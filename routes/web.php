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

//Route::get('/home', [
//    'uses'=>'TestCaseController@getTestCases',
//    'as'=>'testcase.index'
//]);

Route::get('/', function() {
    return view('cube');

})->name('cube');


Route::group(['middleware'=>'auth'], function () {

    Route::get('/home', 'TestCaseController@getTestCases')->name('home');

});



Route::group(['prefix' => 'user'], function () {

    Route::group(['middleware'=>'guest'], function () {


        Route::get('/signup', 'UserController@getSignup')->name('user.signup');
        Route::post('/signup', 'UserController@postSignup')->name('user.signup');


        Route::get('/signin', 'UserController@getSignin')->name('login');
        Route::post('/signin', 'UserController@postSignin')->name('login');


        //        Route::get('/signup', [
//            'uses'=>'UserController@getSignup',
//            'as'=>'user.signup'
//        ]);

//
//        Route::post('/signup',[
//            'uses' => 'UserController@postSignup',
//            'as' => 'user.signup'
//        ]);


//        Route::get('/signin', [
//            'uses'=>'UserController@getSignin',
//            'as'=> 'user.signin'
//        ]);


//        Route::post('/signin',[
//            'uses' => 'UserController@postSignin',
//            'as' => 'user.signuin'
//        ]);
    });

    Route::group(['middleware'=>'auth'], function () {

        Route::get('/profile', 'UserController@getProfile')->name('user.profile');
        Route::get('/logout', 'UserController@getLogout')->name('user.logout');


//        Route::get('/profile', [
//            'uses' => 'UserController@getProfile',
//            'as' => 'user.profile'
//        ]);
//
//        Route::get('/logout', [
//            'uses' => 'UserController@getLogout',
//            'as' => 'user.logout'
//        ]);
    });
});

Route::get('/marketing', function() {
    return view('marketing.index');

})->name('marketing.index');



// Fun Variant pages
Route::get('/jks', function() {
    return view('jks');

});
Route::get('/sphere', function() {
    return view('sphere');

});
Route::get('/nick', function() {
    return view('nick');

});
Route::get('/jeff', function() {
    return view('jeff');

});

// Fun Variant pages
