<?php

namespace App\Http\Controllers;

use App\Models\Sueldo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class SueldoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos=DB::select(" select * from sueldos ");
        return view("Sueldo")->with("datos",$datos);
    }

    /**
     * PDF
     */
    public function pdf(){
        $sueldos = sueldos::all();
        $pdf = Pdf::loadView('PDF/sueldosPDF', compact('sueldos'));
        return $pdf->stream();
        //return view('PDF/actividadesPDF');
    }

    /**
     * Crear
     */
    public function create(Request $request)
    {
        try {
            $sql=DB::insert('insert into sueldos (id_Sueldo, detallePago, descripcionCuenta, numeroCuenta, totalPago) values (?, ?, ?, ?,?)',
            [
              $request->txtCodigo,
              $request->txtdetallePago,
              $request->txtdescripcionCuenta,
              $request->txtnumeroCuenta,
              $request->txttotalPago

            ]);
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto","Pago Registradado exitosamente");
        } else {
            return back()->with("incorrecto","Error al registrar el pago");
        }
    }
    /**
     * Display the specified resource.
     */
    /**public function show(Sueldo $sueldo)
    {
        //
    }

    /**
     * M
     */
    /**public function edit(Sueldo $sueldo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_Sueldo)
{
    try {
        $sql = DB::table('sueldos')
            ->where('id_Sueldo', $id_Sueldo)
            ->update([
                'detallePago' => $request->txtdetallePago,
                'descripcionCuenta' => $request->txtdescripcionCuenta,
                'numeroCuenta' => $request->txtnumeroCuenta,
                'totalPago' => $request->txttotalPago
            ]);
        
        if ($sql) {
            return back()->with("correcto", "Pago modificado exitosamente");
        } else {
            return back()->with("incorrecto", "Error al modificar el pago");
        }
    } catch (\Throwable $th) {
        return back()->with("incorrecto", "Error al modificar el pago: " . $th->getMessage());
    }
}


    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        try {
            $sql=DB::delete("delete from sueldos where id_Sueldo=$id");
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto","El pago se elimino exitosamente");
        } else {
            return back()->with("incorrecto","Error al eliminar el pago");
        }

    }
    }
