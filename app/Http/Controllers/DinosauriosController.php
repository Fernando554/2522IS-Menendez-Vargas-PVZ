<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Dinosaurios;

class DinosauriosController extends Controller
{
    //vistas del JSON de la base de dato
    public function consultarDinosaurios(){
        //Enviar a lo dinosaurios
        $Dinosaurios = dinosaurios::all();

        //convertir el arreglo a JSON
     return response() ->json(["Estatus" =>"Dinosaurios_Listos","Dinosaurios" => $Dinosaurios]);
    }
}
