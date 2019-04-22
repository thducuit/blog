<?php

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function()
{
    // Controllers Within The "App\Http\Controllers\Admin" Namespace
	// Matches The "/admin/..." URL

	Route::get('rent-apart', 'RentApartmentController@index')->name('rent-apart');
	Route::get('rent-apart/{id}', 'RentApartmentController@index')->name('edit-rent-apart');
    Route::post('rent-apart', 'RentApartmentController@upsert')->name('upsert-rent-apart');

    Route::post('upload-photo', 'UploadPhotoController@upload')->name('upload-photo');
    Route::post('remove-upload-photo', 'UploadPhotoController@remove')->name('remove-upload-photo');
});