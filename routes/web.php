<?php

use App\Providers\RouteServiceProvider;

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/{any}', 'AppController@index')->where('any', '.*');
});
