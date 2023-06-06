<?php

use NineteenSquared\Instagram\Http\Controllers\InstagramLoginController;
use NineteenSquared\Instagram\Http\Controllers\InstagramLogoutController;

Route::prefix('nineteen-ig/')->name('nineteen-ig.')->group(function () {
    Route::get('/', 'InstagramLoginController@index')->name('index');
    Route::get('/logout', 'InstagramLogoutController')->name('logout');
    Route::get('/auth', 'InstagramLoginController@callback')->name('callback');
});
