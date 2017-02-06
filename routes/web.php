<?php

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
    return view('welcome');
});

Route::get('login', function () {
    return view('auth.login');
});

Route::get('logout', function () {
    return 'Web de logout!';
});

Route::get('alumnos', function () {
    return view('alumnos.index');
});

Route::get('alumnos/show/{id}', function ($id) {
    return view('alumnos.show', array('id=>$id'));
});

Route::get('alumnos/create', function () {
    return view('alumnos.create');
});

Route::get('alumnos/edit/{id}', function ($id) {
    return view('alumnos.edit', array('id=>$id'));
});

Route::get('padres', function () {
    return view('padres.index');
});

Route::get('padres/show/{id}', function ($id) {
    return view('padres.show', array('id=>$id'));
});