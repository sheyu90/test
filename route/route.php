<?php
use think\facade\Route;

Route::get('index','@index/Index/index')->name('index/Index/index');
Route::get('create','@index/Index/create')->name('index/Index/create');
Route::post('create','@index/Index/add')->name('index/Index/add');
Route::get('search','@index/Index/search')->name('index/Index/search');
Route::get('delete','@index/Index/delete')->name('index/Index/delete');


Route::get('section/:id','@index/Index/section')->name('index/Index/section');

Route::get('login','@index/Login/index')->name('index/Login/index');
Route::post('login','@index/Login/login')->name('index/Login/index');
Route::get('register','@index/Login/register')->name('index/Login/register');
Route::post('register','@index/Login/registerHandle')->name('index/Login/registerHandle');
Route::get('logout','@index/Login/logout')->name('index/login/logut');
