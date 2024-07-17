<?php
use Illuminate\Http\Request;

Route::get('link', function () {
    $url = route('w');
    return "<a href='$url'>go to welcome</a>";
});

Route::get('hwelcome', function () {
    return "welcome to laravel";
})->name('w');

Route::get('cv', function () {
    return view('cv');
});

Route::get('login', function () {
    return view('login');
});

Route::get('/form', function () {
    return view('form');
})->name('form');

Route::post('/process_form', function () {
    return redirect()->route('login_done');
})->name('process_form');

Route::get('/login_done', function () {
    return "Login Done";
})->name('login_done');

Route::get('/contact', function () {
    return view('contact');
})->name('contact_form');

Route::post('/contact', function (Request $request) {
    $data = $request->all();
    return view('contact_confirmation', ['data' => $data]);
})->name('submit_contact_form');



?>