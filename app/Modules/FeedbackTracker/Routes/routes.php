<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'namespace' => 'App\Modules\FeedbackTracker\Controllers',
    'prefix' => 'feedback-tracker'
], static function() {
    Route::get('/test', ['as' => 'test', 'uses' => 'TestController@index']);
});

