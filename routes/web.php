<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('lang/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'ms'])) {
        abort(400);
    }
    session(['locale' => $locale]);
    return redirect()->back();
});

Route::group([
    'as'            => 'site.',
], function () {
    Route::get('', 'PageController@index')->name('index');
    Route::get('about/background', 'PageController@aboutBackground')->name('about.background');
    Route::get('about/organisation', 'PageController@aboutOrganisation')->name('about.organisation');
    Route::get('services', 'PageController@services')->name('services');
    Route::get('portfolio', 'PageController@portfolio')->name('portfolio');
    Route::get('licenses-certificates', 'PageController@licenses')->name('licenses-certificates');
    Route::get('gallery', 'PageController@gallery')->name('gallery');
    Route::get('contact', 'PageController@contact')->name('contact');
});
