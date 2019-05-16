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

Route::group(['middleware'=>'checkuser'],function(){

});

Route::get('/', 'LoginAndRegistrationController@index');

Route::get('/customerLogin', 'LoginAndRegistrationController@login');
Route::post('/customerLogin', 'LoginAndRegistrationController@verifyLogin');
Route::post('/validateEmail', 'LoginAndRegistrationController@validateEmail');

Route::get('/customerRegistration','LoginAndRegistrationController@create');
Route::post('/customerRegistration','LoginAndRegistrationController@register');

Route::post('/chatting','ChattingController@index');
Route::get('/chatting', function () {
    return view('loginAndRegistration.index');
});

Route::get('/services', function () {
    return view('home.service');
});
Route::get('/about-us', function () {
    return view('home.aboutUs');
});

// Owners //
    Route::get('/owner','OwnersController@index');
    Route::get('/viewProperty','OwnersController@viewProperty');
    Route::get('/propertyForm','OwnersController@addPropertyForm');
    Route::post('/addProperty', 'OwnersController@addProperty');
    Route::get('/maintenance','OwnersController@maintenance');
    Route::get('/payments','OwnersController@payments');
    Route::get('/expenses','OwnersController@expenses');
    Route::get('/profile','OwnersController@myProfile');
    Route::get('/applicant','OwnersController@applicant')->name('applicant');
    //Route::get('/applicant-accept/{id}','OwnersController@applicantAccept')->name('acceptTenant');
    Route::post('/applicant-accept','OwnersController@applicantAccept')->name('acceptTenant');


// Chatting //
Route::get('/chatting','ChattingController@index');
Route::post('fetchUser','AjaxController@index');
Route::post('update_last_activity','AjaxController@updateLastActivity');
Route::post('fetch_user_chat_history','AjaxController@fetch_user_chat_history');
Route::post('fetch_user_chat_history_for_chat','AjaxController@fetch_user_chat_history_for_chat');
Route::post('update_is_type_status','AjaxController@update_is_type_status');
Route::post('insert_chat','AjaxController@insert_chat');

Route::post('/logout','LoginAndRegistrationController@logout');  
Route::get('/logoutM','LoginAndRegistrationController@logoutM');  

// Tenant //
Route::get('/tenant','TenantsController@index');
Route::get('/tenant/available-property','TenantsController@availableProperties');
Route::get('/tenant/pay-rent','TenantsController@payRent');
Route::get('/tenant/apply-property/{id}','TenantsController@applyProperties')->name('details');
Route::get('/tenant/apply/{ownerId}/{tenantId}/{propertyId}','TenantsController@apply')->name('apply');
Route::get('/tenant/myProfile','TenantsController@myProfile');
Route::get('/tenant/requestMaintenance','TenantsController@requestMaintenance');

/*
Route::post('/fetchUser', function () {
    return view('loginAndRegistration.index');
});
*/