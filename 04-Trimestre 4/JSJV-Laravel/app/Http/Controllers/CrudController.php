<?php

namespace App\Http\Controllers;

use App\Models\Inventarios;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class CrudController extends Controller
{                                         // CRUD CONTROLLERS //
        //READ
        public function index(){
            $datos=DB::select('select * from inventarios');
                return view("inventario")-> with("datos",$datos);
         }

         //PDF
         public function pdf(){
            $inventarios = inventarios::all();
            $pdf = Pdf::loadView('PDF/inventariosPDF', compact('inventarios'));
            return $pdf->stream();
            //return view('PDF/actividadesPDF');
        }

         //CREATE
         public function create(Request $request){
            try{
                $SQL=DB::insert('insert into inventarios(id_Inventarios,NombreProveedor,cantidad,decripcionInventario,idInsumo,idMaquina) values(?,?,?,?,?,?)',[
                    $request->txtinventario,
                    $request->txtnombre,
                    $request->txtcantidad,
                    $request->txtdecripcion,
                    $request->txtinsumo,
                    $request->txtmaquina]);

            }catch(\Throwable $th){
                $SQL=0;

            }
                if($SQL == true){
                   return back() ->with('Correcto',"Registrado correctamente");
                }else{
                    return back() ->with('Incorrecto',"Error al registrar");

                }

         }
         //UPDATE

         public function update(Request $request){
            try{
                $SQL=DB::update('update inventarios set NombreProveedor=?,cantidad=?,decripcionInventario=?,idInsumo=?,idMaquina=? where id_Inventarios=?',[

                    $request->txtnombre,
                    $request->txtcantidad,
                    $request->txtdecripcion,
                    $request->txtinsumo,
                    $request->txtmaquina,
                    $request->txtinventario]);
                    if($SQL==0){
                        $SQL=1;
                    }

            }catch(\Throwable $th){
                $SQL=0;

            }
                if($SQL == true){
                   return back() ->with('Correcto',"Modificado correctamente");
                }else{
                    return back() ->with('Incorrecto',"Error al modificar");

                }

         }
         // DELETE
         public function delete ($id){
            try{
                $SQL=DB::delete("delete from inventarios where id_Inventarios =$id");

            }catch(\Throwable $th){
                $SQL=0;

            }
                if($SQL == true){
                   return back() ->with('Correcto',"Eliminado correctamente");
                }else{
                    return back() ->with('Incorrecto',"Error al eliminar");

                }

         }
         }
