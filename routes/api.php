<?php
use Illuminate\Support\Facades\Route;

Route::get('/api/zip-codes/{zipcodeid}', 'ZipCodesController@show')->where('zipcodeid', '[0-9]+');
