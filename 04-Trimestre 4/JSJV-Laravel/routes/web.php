<?php
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\OrdenTrabajoController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\ActividadesController;
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
//Rutas para los PDF
//-----------------------
//Actividades PDF
Route::get('PDF/actividadesPDF',[ActividadesController::class,'pdf'])->name('actividades.pdf');

//Inventarios PDF
Route::get('PDF/inventariosPDF',[CrudController::class,'pdf'])->name('inventarios.pdf');

//Ruta para mostrar los datos en la tabla actividades
Route::get("/Actividades",[ActividadesController::class,"index"])->name("Crud_actividades.Index");

//Ruta para regiostrar los datos en la tabla
Route::post("/regisActividad",[ActividadesController::class,"create"])->name("Crud_actividades.Create");

//Ruta para actualizar los datos en la tabla actividades
Route::post("/modifActividad",[ActividadesController::class,"update"])->name("Crud_actividades.update");

//Ruta para eliminar los datos en la tabla actividades
Route::get("/elimifActividad/{id}", [ActividadesController::class, "delete"])->name("Crud_actividades.delete");

//ruta para leer el inventario
Route::get('/inventario', [CrudController::class,"index"])->name("crud.Index");
//ruta para añadir inventario
Route::post('/registrarInventario', [CrudController::class,"create"])->name("crud.create");
//ruta para modificar inventario
Route::post('/modificarInventario', [CrudController::class,"update"])->name("crud.update");
//ruta para eliminar inventario
Route::get('/eliminarInventario--{id}', [CrudController::class,"delete"])->name("crud.delete");

Route::get('/Index', function () {
    return view("Index");
});

Route::get('/', function () {
    return view("welcome");
});
//Rutas de las vistas
/*
Route::get('/actividades', function () {
    return view("actividades");
});
*/
Route::get('/Usuario', function () {
    return view("Usuarios");
});

Route::get('/Registro', function () {
    return view("Registro");
});

Route::get('/Quienes', function () {
    return view("Quienes");
});

Route::get('/pago', function () {
    return view("pago");
});

Route::get('/Index', function () {
    return view("Index");
});
Route::get('/form_registrarse', function () {
    return view("form_registrarse");//El formulario tiene problemas en la redireccion
});

Route::get('/Form Registro Empleado', function () {
    return view("Form_Reg_Emp");//El formulario tiene problemas en la redireccion
});

Route::get('/Error404', function () {
    return view("Error404");
});

Route::get('/Error500', function () {
    return view("Error500");
});
Route::get('/Dashboard', function () {
    return view("Dashboard");
});
Route::get('/DashBoard_Ot', function () {
    return view("DashBoard_Ot");
});
Route::get('/Dashboard_Inv', function () {
    return view("Dashboard_Inv");// Hay un error que no se entiende
});;
Route::get('/Dashboard_GE', function () {
    return view("Dashboard_GE");// Hay un error que no se entiende
});
Route::get('/Dashboard_GA', function () {
    return view("Dashboard_GA");
});
Route::get('/con_olvidada', function () {
    return view("con_olvidada");
});
Route::get('/form_restablecer_contraseña', function () {
    return view("form_restablecer_contraseña");
});
Route::get('/Catalogo_Servicios_CR', function () {
    return view("Catalogo_Servicios_CR");
});
Route::get('/Catalogo_Servicios_SR', function () {
    return view("Catalogo_Servicios_SR");// Hay un error que no se entiende
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
