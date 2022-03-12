<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Dinosaurios;

class DinosauriosController extends Controller
{
    //vistas del JSON de la base de dato
    public function consultarDinosaurios(){
        //Enviar a lo dinosaurios
        $Dinosaurios = Dinosaurios::all();

        //convertir el arreglo a JSON
        return response() ->json(["Estatus" =>"Dinosaurios_Listos","Dinosaurios" => $Dinosaurios]);
    }

    public function consultarDinosaurio($id){
        //Enviar a lo dinosaurios
        $Dinosaurio = Dinosaurios::find($id);

        //convertir el arreglo a JSON
        return response() ->json(["Estatus" =>"Dinosaurio_Listo","Dinosaurio" => $Dinosaurio]);
    }
}
