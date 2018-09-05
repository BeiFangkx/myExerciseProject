<?php



/**
 * 用户类路由
 */
Route::get('login', 'UserController@login')->name('login');
Route::post('login', 'UserController@signIn')->name('login');