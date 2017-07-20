<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// use App\Task;
use Illuminate\Http\Request;

// Default Home to dashboard
Route::get('/', function () {
    return redirect('dashboard/dashboardv1');
});


// Dashboard
// -------------------
Route::group(['prefix' => 'dashboard'], function() {

    Route::get('dashboardv1', function () {
        return view('dashboard-v1');
    });

    Route::get('dashboardv2', function () {
        return view('dashboard-v2');
    });

});

// Widgets
// -------------------
Route::get('widgets', function() {
    return view('widgets');
});

// Elements
// -------------------
Route::group(['prefix' => 'elements'], function() {

    Route::get('animations', function() {
        return view('animations');
    });

    Route::get('button', function() {
        return view('button');
    });
    Route::get('grid-masonry', function() {
        return view('grid-masonry');
    });

    Route::get('grid', function() {
        return view('grid');
    });

    Route::get('icons', function() {
        return view('icons');
    });
    Route::get('maps', function() {
        return view('maps');
    });

    Route::get('notifications', function() {
        return view('notifications');
    });

    Route::get('panels', function() {
        return view('panels');
    });

    Route::get('portlets', function() {
        return view('portlets');
    });

    Route::get('spinners', function() {
        return view('spinners');
    });

    Route::get('typo', function() {
        return view('typo');
    });

    Route::get('dropdown-animations', function() {
        return view('dropdown-animations');
    });
});

// Charts
// -------------------
Route::group(['prefix' => 'charts'], function() {

    Route::get('chart-flot', function() {
        return view('chart-flot');
    });

    Route::get('chart-radial', function() {
        return view('chart-radial');
    });
});

// Forms
// -------------------
Route::group(['prefix' => 'forms'], function() {

    Route::get('form-standard', function() {
        return view('form-standard');
    });

    Route::get('form-validation', function() {
        return view('form-validation');
    });

    Route::get('form-wizard', function() {
        return view('form-wizard');
    });

    Route::get('form-extended', function() {
        return view('form-extended');
    });
});

// Extras
// -------------------
Route::group(['prefix' => 'extras'], function() {

    Route::get('invoice', function() {
        return view('invoice');
    });

    Route::get('mailbox', function() {
        return view('mailbox');
    });

    Route::get('search', function() {
        return view('search');
    });
    Route::get('calendar', function() {
        return view('calendar');
    });

    Route::get('tasks', function() {
        return view('tasks');
    });

    Route::get('timeline', function() {
        return view('timeline');
    });
});

// Tables
// -------------------
Route::group(['prefix' => 'tables'], function() {

    Route::get('table-datatable', function() {
        return view('table-datatable');
    });

    Route::get('table-extended', function() {
        return view('table-extended');
    });

    Route::get('table-standard', function() {
        return view('table-standard');
    });
});

// Pages
// -------------------
Route::group(['prefix' => 'pages'], function() {

    Route::get('login', function() {
        return view('pages/login');
    });

    Route::get('signup', function() {
        return view('pages/signup');
    });

    Route::get('lock', function() {
        return view('pages/lock');
    });

    Route::get('recover', function() {
        return view('pages/recover');
    });

    Route::get('template', function() {
        return view('template');
    });
});
