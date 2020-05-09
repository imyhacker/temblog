<?php

use Illuminate\Support\Facades\Route;

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

/* 
		Global Path
*/
Route::get('/', 'ClientController@index');
Route::get('/tag/{tag}', 'ClientController@tag');
Route::get('/about', 'ClientController@about');
Route::get('/contact', 'ClientController@contact');
Route::get('/disclaimer', 'ClientController@disclaimer');
Route::get('/tos', 'ClientController@tos');
Route::get('/privacy', 'ClientController@privacy');
Route::get('/sitemap.xml', 'SitemapController@index');
Route::get('/c19', 'ClientController@c19');
/*
 		Baca Artikel Path
*/
Route::get('/{id}/baca','ClientController@baca');


Auth::routes([
    'register' => false,
]);

/*  ADMIN START */

Route::get('/post', /*POST ARTIKEL*/ 'HomeController@post');
Route::get('/home/{id}/edit_ar', 'HomeController@edit_ar');
Route::get('/home/{id}/hapus_ar', 'HomeController@hapus_ar');
Route::post('/home/{id}/asdet','HomeController@asdet');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home/{id}/hapus_tag', 'HomeController@hapus_tag');

// APDET ABOUT START
Route::get('/home/about', 'HomeController@about');
Route::get('/home/about/{id}/get', 'HomeController@yaabout');
Route::post('/home/{id}/updateabout', 'HomeController@updateabout');
// APDET STOP


// APDET CONTACT START
Route::get('/home/contact', 'HomeController@contact');
Route::get('/home/contact/{id}/get', 'HomeController@yacontact');
Route::post('/home/{id}/updatecontact', 'HomeController@updatecontact');
// CONTACT STOP

// APDET DISCLAIMER START
Route::get('/home/disclaimer', 'HomeController@disclaimer');
Route::get('/home/disclaimer/{id}/get', 'HomeController@yadisclaimer');
Route::post('/home/{id}/updatedisclaimer', 'HomeController@updatedisclaimer');
// DISCLAIMER STOP

// APDET TOS START
Route::get('/home/tos', 'HomeController@tos');
Route::get('/home/tos/{id}/get', 'HomeController@yatos');
Route::post('/home/{id}/updatetos', 'HomeController@updatetos');
// TOS STOP

// APDET PRIV START
Route::get('/home/privacy', 'HomeController@privacy');
Route::get('/home/privacy/{id}/get', 'HomeController@yaprivacy');
Route::post('/home/{id}/updateprivacy', 'HomeController@updateprivacy');
// STOP PRIV
 
// APDET ADS START
Route::get('/home/adsen', 'HomeController@adsen');
Route::get('/home/adsen/{id}/get', 'HomeController@yaadsen');
Route::post('/home/{id}/updateadsen', 'HomeController@updateadsen');
// STOP ADS
 

// APDET SOCIAL START
Route::get('/home/social', 'HomeController@social');
Route::get('/home/social/{id}/get', 'HomeController@yasocial');
Route::post('/home/{id}/possocial', 'HomeController@possocial');
//Stop Social

Route::get('/home/pixel', 'HomeController@pixel');
Route::get('/home/pixel/{id}/get', 'HomeController@yapixel');
Route::post('/home/{id}/updatepixel', 'HomeController@updatepixel');



Route::get('/home/fp', 'HomeController@fp');
Route::get('/home/fp/{id}/get', 'HomeController@yafp');
Route::post('/home/{id}/updatefp', 'HomeController@updatefp');




Route::post('/addtag',/*ADD TAG*/ 'HomeController@addtag');
Route::post('/kirimartikel', /*KIRIM ARTIKEL*/'HomeController@kirimartikel');

Route::post('/kirimabout', 'HomeController@kirimabout');