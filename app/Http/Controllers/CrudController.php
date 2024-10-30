<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

class CrudController extends Controller
{
    public function index(){
        $datos=DB::select(' SELECT * FROM usuarios_guiñez');
        return view("welcome")->with("datos",$datos);
    }
    public function create(Request $Request){
        try {
            $sql = DB::insert("INSERT INTO usuarios_guiñez (ID_Nombre, Nombre, Segundo_Nombre, Apellido, Segundo_Apellido, Fecha_Actual, Rut, Centro_costo) VALUES (?, ?, ?, ?, ?, ?, ?, ?)", [
                $Request->ID_Nombre,
                $Request->Nombre,
                $Request->Segundo_Nombre,
                $Request->Apellido,
                $Request->Segundo_Apellido,
                $Request->Fecha_Actual,
                $Request->Rut,
                $Request->Centro_costo,
            ]);
        } catch (\Throwable $th) {
            $sql == 0;
        }
        
        if ($sql == true) {
            return back()->with("success", "Usuario Registrado correctamente");
        } else {
            return back()->with("incorrecto", "Error al Registrar");
        }
    }

    public function update(Request $request)
    {
        try {
            $sql=DB::update(" update usuarios_guiñez set  Nombre=?,Segundo_Nombre=?,Apellido=?,
            Segundo_Apellido=?,Fecha_Actual=?,Rut=?,Centro_costo=? where ID_Nombre=?",[
                $request->txtNombre,
                $request->txtSegundoNombre,
                $request->txtApellido,
                $request->txtSegundoApellido,
                $request->txtFecha,
                $request->txtRut,
                $request->txtCentrodecosto,
                $request->txtID,
            ]);
            if ($sql == 0) {
                $sql = 1;
            }
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("success", "Usuario modificado correctamente");
        } else {
            return back()->with("incorrecto", "Error al modificar");
        }
    }
    public function delete($id){
        try {
            $sql =  DB::delete(" delete from usuarios_guiñez where ID_Nombre=$id");
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true){
            return back()->with("success", "usuario eliminado correctamente");
        } else {
            return back()->with("incorrecto", "error al eliminar");
        }
        
    }

}
    