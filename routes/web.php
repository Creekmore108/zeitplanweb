<?php


    Route::get('/', 'HomeController@index')->name('home');
   
    Route::post('/save_email', 'HomeController@save_email')->name('save_email');

    Route::post('/contaact_form', 'HomeController@contact_form')->name('contact_form');

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

    

   
