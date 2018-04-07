<?php

Route::group(
    array(
        'namespace' => 'Main',
    ),
    function () {
        Route::get('/', 'MainController@index');
    }
);
