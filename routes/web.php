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

// CMS
Route::get('/',             'PageCtrl@home'); // Home
Route::get('/impressum',    'PageCtrl@imprint'); // Imprints - Impressum
Route::get('/imprint',      'PageCtrl@imprint');
Route::get('/kontakt',      'PageCtrl@contact'); // Contact - Kontakt
Route::get('/contact',      'PageCtrl@contact');

// Contact form
Route::post('/danke', 'ContactCtrl@sendContactForm')->name('cfp');
// Route::get('/danke',        'PageCtrl@thanks');
// Route::get('/thanks',       'PageCtrl@thanks');
// Route::get('/thank-you',    'PageCtrl@thanks');
