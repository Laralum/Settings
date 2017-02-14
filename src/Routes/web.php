<?php

Route::group([
        'middleware' => ['web', 'laralum.base', 'laralum.auth'],
        'prefix' => config('laralum.settings.base_url'),
        'namespace' => 'Laralum\Settings\Controllers',
        'as' => 'laralum::'
    ], function () {
        Route::get('settings', 'SettingsController@index')->name('settings.index');
        Route::post('settings/update', 'SettingsController@update')->name('settings.general.update');
});
