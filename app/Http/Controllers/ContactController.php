<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
Route::get('/contact', 'ContactController@index')->name('contact.index');
Route::post('/handleContact', 'ContactController@handleContactForm')->name('contact.post');
}
