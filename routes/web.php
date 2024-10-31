<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/db-check', function () {
    try {
        \DB::connection()->getPdo();
        return 'Соединение с базой данных установлено!';
    } catch (\Exception $e) {
        return 'Не удалось подключиться к базе данных: ' . $e->getMessage();
    }
});
