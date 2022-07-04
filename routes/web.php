<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
  return view('auth.login');
});

Auth::routes();

/*Route::get('/home', 'HomeController@index')->name('home');*/
    Route::group(['prefix' => 'admin', 'middleware' => ['admin','auth'],'namespace'=> 'admin'], function () {
    Route::get('dashboard', 'AdminController@index')->name('admin.dashboard');

    Route::get('add-memberinfo', 'AdminController@add_memberinfo')->name('admin.add_memberinfo');
    Route::get('member-check/{query}', 'AdminController@action')->name('live_search_member');
  

    Route::post('save-memberinfo', 'AdminController@save_memberinfo')->name('admin.save_memberinfo');
    Route::get('display_member_info', 'AdminController@display_member_info')->name('display_member_info');
    Route::get('edit_memberinfo/{id}', 'AdminController@edit_memberinfo')->name('edit_memberinfo');
    Route::post('update_memberinfo/{id}', 'AdminController@update_memberinfo')->name('update_memberinfo');
    Route::delete('delete_memberinfo/{id}', 'AdminController@delete_memberinfo')->name('delete_memberinfo');

    Route::get('add_Area', 'AdminController@add_area')->name('add_Area');
    Route::get('add_Area/search', 'AdminController@Shop_Search')->name('add_Area.search');


    Route::post('save_area', 'AdminController@save_area')->name('save_area');
    Route::get('displayArea', 'AdminController@displayArea')->name('displayArea');
    Route::delete('admin/delete_area/{id}', 'AdminController@delete_area')->name('delete_area');
    Route::get('excel', 'AdminController@excel')->name('excel');
    Route::get('register_user', 'AdminController@register_user')->name('register_user');

/*    Route::post('register', 'AdminController@register_save')->name('register_save');*/

    Route::get('assign_market', 'AdminController@assign_market')->name('admin.assign_market');
    Route::get('assign_market/{query}', 'AdminController@market_search')->name('admin.market_search');
    // Route::get('assign_market/search', 'AdminController@market_search')->name('admin.market_search');
    Route::post('assign_market', 'AdminController@save_assign_market')->name('admin.save_assign_market');

/*    Route::post('register', 'AdminController@register_save')->name('register_save');*/
    Route::get('display_user', 'AdminController@display_user')->name('admin.display_user');
   
    Route::delete('delete_user/{id}', 'AdminController@delete_user')->name('delete_user');
    Route::get('export-excel', 'AdminController@exportIntoExcel')->name('export-excel');
    Route::post('save_user', 'AdminController@save_user')->name('save_user');
    Route::get('pending', 'AdminController@pending')->name('admin.pending');
    Route::get('edit_approved/{id}', 'AdminController@edit_approved')->name('admin.edit_approved');
    Route::post('update_approved/{id}', 'AdminController@update_approved')->name('admin.update_approved');


    //stock routes
    Route::get('add-stock', 'AdminController@add_stock')->name('admin.add_stock');
    Route::post('save-stock', 'AdminController@save_stock')->name('admin.save_stock');
    Route::get('display-stock', 'AdminController@display_stock')->name('admin.display_stock');
    Route::get('edit-stock/{id}', 'AdminController@edit_stock')->name('edit_stock');
    Route::post('update-stock/{id}', 'AdminController@update_stock')->name('update_stock');

/*    Route::get('pending', 'AdminController@pending')->name('admin.pending');*/
/*    Route::put('approve/{id}', 'AdminController@approve')->name('admin.approve');*/
  });

  Route::group(['prefix' => 'user', 'middleware' => ['user','auth'],'namespace'=> 'user'], function () {
    Route::get('dashboard', 'UserController@index')->name('user.dashboard');
    Route::get('dashboard', 'UserController@show_select_data')->name('user.dashboard');
    Route::post('save_member_info', 'UserController@save_member_info')->name('save_member_info');
    
    Route::get('display', 'UserController@display')->name('display');
    Route::get('edit_memberinfo/{id}', 'UserController@edit_memberinfo')->name('user.edit_memberinfo');
    Route::post('update_memberinfo/{id}', 'UserController@update_memberinfo')->name('user.update_memberinfo');

    //stock routes
    Route::get('add-stock', 'UserController@add_stock')->name('user.add_stock');
    Route::post('save-stock', 'UserController@save_stock')->name('user.save_stock');
    Route::get('display-stock', 'UserController@display_stock')->name('user.display_stock');
    Route::get('edit-stock/{id}', 'UserController@edit_stock')->name('edit_stock');
    Route::post('update-stock/{id}', 'UserController@update_stock')->name('update_stock');




  });


  