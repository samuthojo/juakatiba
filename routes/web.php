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

Route::get('/', 'JuaKatiba@index');
Route::get('home', 'JuaKatiba@index');
Route::get('sw', 'JuaKatiba@index');
Route::get('en', 'JuaKatiba@index_en');

Route::get('read_katiba', 'JuaKatiba@read_katiba');
Route::get('read_wananchi', 'JuaKatiba@read_wananchi');
Route::get('read_warioba', 'JuaKatiba@read_warioba');
Route::get('history', 'JuaKatiba@history');
Route::get('machapisho', 'JuaKatiba@machapisho');
Route::get('faq', 'JuaKatiba@faq');

Route::get('debates/{id}', 'JuaKatiba@debates');
Route::get('fetch_ibara/{katiba}/{ibara}', 'JuaKatiba@fetch_ibara');
Route::get('download_katiba_pdf/{type}', 'JuaKatiba@download_katiba');
Route::get('download_chapisho_pdf/{file_name}', 'JuaKatiba@download_chapisho');

Route::get('admin', 'Cms@index')->name('login');
Route::get('adminstart', 'Cms@adminstart');
Route::get('api/logout', 'Cms@logout');
Route::post('api/login', 'Cms@login');

Route::get('api/yaliyomo_details/{id}', 'Cms@yaliyomo_details');
Route::get('api/midahalo_details/{id}', 'Cms@midahalo_details');
Route::get('api/news_details/{id}', 'Cms@news_details');
Route::get('api/history', 'Cms@cms_history');
Route::get('api/yaliyomo', 'Cms@yaliyomo');
Route::get('api/habari', 'Cms@habari');
Route::get('api/machapisho', 'Cms@api_machapisho');
Route::get('api/soma_ibara/{id}', 'Cms@soma_ibara');
Route::get('api/katiba77', 'Cms@katiba77');
Route::get('api/midahalo', 'Cms@midahalo');

Route::delete('api/form_delete/{form_name}/{id}', 'Cms@form_delete');
Route::get('api/form_edit/{form_name}/{id}', 'Cms@form_edit');
Route::get('api/download_chapisho_pdf/{file_name}', 'Cms@download_chapisho');
Route::post('api/save_form_changes/{form_name}', 'Cms@save_form_changes');
Route::post('api/save_data/{form_name}', 'Cms@save_data');
Route::get('api/add_form/{form_name}', 'Cms@add_form');
Route::post('api/replace_image/{form_name}/{id}', 'Cms@replace_image');
Route::get('api/change_password_form', 'Cms@change_password_form');
Route::post('api/change_password', 'Cms@change_password');
