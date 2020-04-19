<?php

use Illuminate\Support\Facades\Route;
use App\Header;
use App\Subscriber;
use App\Service;
use App\Testimonial;
use App\About;
use App\Portfolio;
use App\Team;

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

Route::get('/', function () {
    $header=Header::find(1);
    $subscriber=Subscriber::find(1);
    $services=Service::all();
    $testimonials=Testimonial::all();
    $about = About::find(1);
    $portfolios = Portfolio::all();
    $teams = Team::all();
    return view('welcome', compact('header', 'subscriber', 'services', 'testimonials','about','portfolios','teams'));
});

Route::get('/admin', function(){return view ("admin.index");})->name('admin.index');


//Section Header

Route::get('/admin/header', 'HeaderController@edit')->name('header');

Route::put('/admin/header', 'HeaderController@update')->name('header.update');

Route::post('/admin/header', 'HeaderController@create')->name('header.create');

Route::get('admin/subscriber', "SubscriberController@index")->name('subscriber');
Route::post('admin/subscriber/create', "SubscriberController@create")->name('subscriber.create');
Route::post('admin/subscriber/update', "SubscriberController@update")->name('subscriber.update');


Route::get('admin/service', 'ServiceController@index')->name('service');
Route::get('admin/service/create', 'ServiceController@create')->name('service.create');
Route::post('admin/service/store', 'ServiceController@store')->name('service.store');
Route::put('admin/service/update/{id}', 'ServiceController@update')->name('service.update');
Route::get('admin/service/edit/{id}', 'ServiceController@edit')->name('service.edit');
Route::delete('admin/service/destroy/{id}', 'ServiceController@destroy')->name('service.destroy');


Route::resource('testimonial','TestimonialController');

Route::get('admin/contact/index', 'ContactController@index')->name('contact.index');
Route::post('admin/contact/store', 'ContactController@store')->name('contact.store');
Route::delete('admin/contact/destroy/{id}', 'ContactController@destroy')->name('contact.destroy');


//Section About

Route::get('admin/about' , 'AboutController@edit')-> name('about');

Route::post('admin/about' , 'AboutController@update')->name('about.update');

//Section Portfolio

Route::resource('admin/portfolio' , 'PortfolioController');

//Section Team

Route::resource('admin/team' , 'TeamController');

