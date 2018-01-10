<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Spatie\Analytics\Period;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/data', function() {

	$analyticsData = Analytics::fetchTopBrowsers(Period::days(7));
	dd($analyticsData);
});

Route::get('demo', function() {
    return view('demo');
});
Route::get('thirdparty', function () {
    return view('thirdParty');
});