<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

Route::get('/', function () {
    return view('welcome');
});

// Route to change the language dynamically
Route::get('lang/{locale}', function ($locale) {
    // Check if the locale is supported (you can add more languages here)
    if (in_array($locale, ['en', 'es'])) {
        // Store the selected locale in the session
        Session::put('locale', $locale);
    }
    
    // Redirect back to the previous page
    return redirect()->back();
});