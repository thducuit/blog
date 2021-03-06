<?php

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth'], function()
{
    // Controllers Within The "App\Http\Controllers\Admin" Namespace
	// Matches The "/admin/..." URL

	Route::get('rent-apart', 'RentApartmentController@index')->name('rent-apart');
	Route::get('rent-apart/{id}', 'RentApartmentController@index')->name('edit-rent-apart');
    Route::post('rent-apart', 'RentApartmentController@upsert')->name('upsert-rent-apart');
    Route::post('rent-apart/delete', 'RentApartmentController@delete')->name('delete-rent-apart');

    Route::get('sell-apart', 'SellApartmentController@index')->name('sell-apart');
	Route::get('sell-apart/{id}', 'SellApartmentController@index')->name('edit-sell-apart');
    Route::post('sell-apart', 'SellApartmentController@upsert')->name('upsert-sell-apart');
    Route::post('sell-apart/delete', 'SellApartmentController@delete')->name('delete-sell-apart');

    Route::get('district', 'DistrictController@index')->name('district');
    Route::get('district/{id}', 'DistrictController@index')->name('edit-district');
    Route::post('district', 'DistrictController@upsert')->name('upsert-district');
    Route::post('district/delete', 'DistrictController@delete')->name('delete-district');

    Route::get('ward', 'WardController@index')->name('ward');
    Route::get('ward/{id}', 'WardController@index')->name('edit-ward');
    Route::post('ward', 'WardController@upsert')->name('upsert-ward');
    Route::post('ward/delete', 'WardController@delete')->name('delete-ward');

    Route::post('upload-photo', 'UploadPhotoController@upload')->name('upload-photo');
    Route::post('remove-upload-photo', 'UploadPhotoController@remove')->name('remove-upload-photo');
});