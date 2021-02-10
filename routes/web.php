<?php


    Route::get('/', 'HomeController@index')->name('home');
   

    // Settings
    Route::resource('settings', 'SettingsController');

    // Galleries
    Route::resource('galleries', 'GalleriesController');

    // Faqs
    Route::resource('faqs', 'FaqsController');

    // Amenities
    Route::resource('amenities', 'AmenitiesController');

    // Prices
    Route::resource('prices', 'PricesController');

