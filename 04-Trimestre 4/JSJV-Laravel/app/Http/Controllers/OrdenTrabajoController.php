<?php

namespace App\Http\Controllers;

use App\Models\OrdenTrabajo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class OrdenTrabajoController extends Controller
{
    /**
     * Index
     */
    public function index()
    {
        $datos=DB::select(" select * from orden_trabajos");
        return view("ordenTrabajo")->with("datos",$datos);
    }
    /**
     * Funcion PDF.
     */

     public function pdf(){
        $OrdenTrabajo = ordenTrabajo::all();
        $pdf = Pdf::loadView('PDF/otPDF', compact('OrdenTrabajo'));
        return $pdf->stream();
       
    }

    /**
     * Create
     */
   public function create(Request $request)
{
    try {
        $sql = DB::insert('insert into orden_trabajos (id_Orden_trabajos, valor_total, fecha_de_entrada, cantidad, tipo_producto) values (?, ?, ?, ?, ?)',
            [
                $request->txtOT,
                $request->txtvalor,
                $request->txtfecha,
                $request->txtcantidad,
                $request->txttipo
            ]);
    } catch (\Throwable $th) {
        $sql = false;
    }

    if ($sql) {
        return back()->with("correcto", "Orden de trabajo registrada exitosamente");
    } else {
        return back()->with("incorrecto", "Error al registrar la Orden de trabajo");
    }
}



    /**
     * update
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(OrdenTrabajo $ordenTrabajo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrdenTrabajo $ordenTrabajo)
    {
        //
    }

    /**
     * Update 
     */
    public function update(Request $request)
    {
        try {
            $sql=DB::insert('insert into orden_trabajos (id_Orden_trabajos, valor_total, fecha_de_entrada, cantidad,tipo_producto) values (?, ?, ?, ?, ?)',
            [
                $request->txtOT,
                $request->txtvalor,
                $request->txtfecha,
                $request->txtcantidad,
                $request->txttipo]);
            if ($sql==0) {
                $sql=1;
            }
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto","Orde de trabajo modificada exitosamente");
        } else {
            return back()->with("incorrecto","Error al modificar Orden de trabajo");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        try {
            $sql=DB::delete("delete from orden_trabajos where id_Orden_trabajos=$id");
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto","Orden de trabajo se elimino exitosamente");
        } else {
            return back()->with("incorrecto","Error al eliminar Orden de trabajo");
        }

    }
}
