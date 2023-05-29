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
Route::get('/Dashboard', function () {
    return view("Dasboard");
});
Route::get('/Dashboard_Ot', function () {
    return view("DashBoard_Ot");
});
Route::get('/Dashboard_Inv', function () {
    return view("Dashboard_Inv");
});;
Route::get('/Dashboard_GE', function () {
    return view("Dashboard_GE");
});
Route::get('/Dashboard_GA', function () {
    return view("Dashboard_GA");
});
Route::get('/con_olvidada', function () {
    return view("con_olvidada");
});
Route::get('/Catalogo_Servicios_CR', function () {
    return view("Catalogo_Servicios_CR");
});
Route::get('/Catalogo_Servicios_SR', function () {
    return view("Catalogo_Sevicios_SR");
});