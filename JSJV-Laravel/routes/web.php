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

Route::get('/Usuarios', function () {
    return view("Usuarios");
});

Route::get('/Registro', function () {
    return view("Registro");
});

Route::get('/Quienes', function () {
    return view("Quienes");
});

Route::get('/Pago', function () {
    return view("pago");
});

Route::get('/Index', function () {
    return view("Index");
});

Route::get('/Form Restablecer Contraseña', function () {
    return view("form_restablecer_contraseña");
});

Route::get('/Form Registrarse', function () {
    return view("form_registrarse");
});

Route::get('/Form Registro Empleado', function () {
    return view("Form_Reg_Emp");
});

Route::get('/Error404', function () {
    return view("Error404");
});

Route::get('/Error505', function () {
    return view("Error505");
});

