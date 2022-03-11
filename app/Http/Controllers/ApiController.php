<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dinosaurios;

class ApiController extends Controller
{
    public function raiz(){
        return redirect()->route('index');
    }

    public function index(){
        //Dino aleatorio para el index
        $Dino_1 = dinosaurios::find(rand(1, 10));
        $Dino_2 = dinosaurios::find(rand(1, 10));
        $Dino_3 = dinosaurios::find(rand(1, 10));
        $Dino_4 = dinosaurios::find(rand(1, 10));

        return view('index', ['Dino_1'=>$Dino_1, 'Dino_2'=>$Dino_2, 'Dino_3'=>$Dino_3, 'Dino_4'=>$Dino_4]);
    }

    public function dinosaurios($id){
        
        $Dino = dinosaurios::find($id);
        $Dino_1 = dinosaurios::find(rand(1 , 10));
        $Dino_2 = dinosaurios::find(rand(1, 10));

        //variable id de los animales
        $id = $Dino['id'];

        return view('dinosaurios', ['Dino'=>$Dino, 'Dino_1'=>$Dino_1, 'Dino_2'=>$Dino_2, 'id'=>$id]);
    }

    public function acercaDe(){
        return view('about');
    }
}
