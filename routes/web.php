<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () 
{
    return "This is the home page";
}) ->name('home');


Route::get('/about/{id}', function ($id) 
{
    return "This is about page and your id is ".$id;
})->name('about');

Route::get('/features/{name?}', function ($name = "user") 
{
    return "this is features page and you are ".$name;
})->name('features');

Route::get('/pricing', function () 
{
    return "this is pricing page";
})->name('pricing');

Route::get('/contact', function () 
{
    return "this is contact page" ;
})->name('contact');