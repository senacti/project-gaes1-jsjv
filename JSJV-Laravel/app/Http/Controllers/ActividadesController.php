<?php

namespace App\Http\Controllers;

use App\Models\Actividades;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActividadesController extends Controller
{
    /**
     Se muestran los datos 
     */
    public function index()
    {
        $datos=DB::select(" select * from actividades ");
        return view("actividades")->with("datos",$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        try {
            $sql=DB::insert('insert into actividades (id_Actividad, estadoActividad, fechaActividad, descripcionActividad) values (?, ?, ?, ?)', 
            [
              $request->txtCodigo,
              $request->txtEstado,
              $request->txtFecha,
              $request->txtDescrip,
                
            ]);
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto","Actividad Registradad exitosamente");
        } else {
            return back()->with("incorrecto","Error al registrar Actividad");
        }
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Actividades $actividades)
    {
     
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Actividades $actividades)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try {
            $sql=DB::update('update actividades set estadoActividad=?, fechaActividad=?, descripcionActividad=? where id_Actividad=?', 
            [
                $request->txtEstado,
                $request->txtFecha,
                $request->txtDescrip,
                $request->txtCodigo,
            ]);
            if ($sql==0) {
                $sql=1;
            }
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto","Actividad modificada exitosamente");
        } else {
            return back()->with("incorrecto","Error al modificar Actividad");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        try {
            $sql=DB::delete("delete from actividades where id_actividad=$id");
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto","Actividad se elimino exitosamente");
        } else {
            return back()->with("incorrecto","Error al eliminar Actividad");
        }
        
    }
}
