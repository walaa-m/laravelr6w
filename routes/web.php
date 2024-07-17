<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CarController;

// Accounts Routes
Route::prefix('accounts')->group(function () {
    Route::get('/', [AccountController::class, 'index']);
    Route::get('/admin', [AccountController::class, 'admin']);
    Route::get('/user', [AccountController::class, 'user']);
});

// Cars Routes
Route::prefix('cars')->group(function () {
    // USA Cars
    Route::prefix('usa')->group(function () {
        Route::get('/ford', [CarController::class, 'ford']);
        Route::get('/tesla', [CarController::class, 'tesla']);
    });

    // German Cars
    Route::prefix('ger')->group(function () {
        Route::get('/mercedes', [CarController::class, 'mercedes']);
        Route::get('/audi', [CarController::class, 'audi']);
        Route::get('/volkswagen', [CarController::class, 'volkswagen']);
    });
});
=======
use App\Http\Controllers\ExampleController;


Route::get('login', [ExampleController::class, 'login']);
Route::get('cv', [ExampleController::class, 'cv']);

Route::get('', function () {
    return view('welcome');
});

Route::get('', function () {
    // return view('welcome');
    // 
    // 
});




// Route::view('cv', 'cv');


// Route::prefix('accounts')->group(function(){
//     Route::get('', function () {
//         return "accounts index";
//     });

//     Route::get('admin', function () {
//         return "accounts admin";
//     });

//     Route::get('user', function () {
//         return "accounts user";
//     });
// });

// Route::prefix('cars')->group(function(){
//     Route::get('', function () {
//         return "cars index";
//     });

//     Route::prefix('usa')->group(function() {
//         Route::get('ford', function () {
//             return "cars ford";
//         });
//         Route::get('tesla', function () {
//             return "cars tesla";
//         });
//     });

//     Route::prefix('ger')->group(function() {
//         Route::get('ford', function () {
//             return "cars ford";
//         });
//         Route::get('tesla', function () {
//             return "cars tesla";
//         });
//     });
// });

// Route::get('cars/{country?}/{car?}', function($country='', $car='') {
//     return "$country ";
// });

// Route::fallback(function(){
//     return redirect('/');
// });



Route::get('link', function () {
    $url1 = route('w');
    $url2 = route('g');
    return "<a href='$url1'>go to welcome</a> <br> <a href='$url2'>go to page</a> ";
    // return redirect('welcome');
});

Route::get('welcome', function () {
    return "welcome to laravel";
})->name('w');

Route::get('goodbye', function () {
    return "goodbye to laravel";
})->name('g');


Route::post('data', function() {
    return "data received";
})->name('data');



>>>>>>> upstream/main
