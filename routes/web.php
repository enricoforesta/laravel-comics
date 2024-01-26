<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $dataHeader = [
        "itemsHeader" => config('list-itemdb')
    ];
    $dataFooter = [
        "itemsFooter" => config('list-itemdb')
    ];

    return view('homepage', $dataHeader, $dataFooter);
});
Route::get('/single', function () {
    $data = [
        "items" => config('list-itemdb')
    ];
    return view('single', $data);
});
