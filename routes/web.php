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

Route::get('/', 'HomeController@index')->name('home');
Route::get('produtos/{slug}', 'ProductController@category')->name('category.products');
Route::post('contact', 'ContactController@store');
Route::post('newsletter', 'NewsletterController@store');
Route::post('produtos/newsletter', 'NewsletterController@store');

Route::get('mail', function() {
    $contact = new \stdClass();
    $contact->name = 'Anselmo';
    $contact->email = 'design@anselmovelame.com.br';
    
    //return new \App\Mail\ContactSite($contact);
    
    \Illuminate\Support\Facades\Mail::send(new \App\Mail\ContactSite($contact));
});
