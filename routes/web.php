<?php

use App\Models\Books;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    dd(Books::all());
});
