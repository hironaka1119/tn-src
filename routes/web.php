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

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::resource('/production_flow', 'ProductionFlowController');
Route::resource('/price_list', 'PriceListController');
Route::resource('/concept', 'ConseptController');
Route::get('/contacts', 'ContactController@index');
Route::post('/contacts', 'ContactController@send');

// 各画面の情報
Route::resource('page_infos', 'PageInfoMasterController');
Route::get('admin_lte',function(){
    return view('adminlte');
});
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

