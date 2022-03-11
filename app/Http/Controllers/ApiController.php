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
        $Dino_1 = Dinosaurios::find(rand(1, 11));
        $Dino_2 = Dinosaurios::find(rand(1, 11));
        $Dino_3 = Dinosaurios::find(rand(1, 11));
        $Dino_4 = Dinosaurios::find(rand(1, 11));
        $Dino_5 = Dinosaurios::find(rand(1, 11));

        return view('index', ['Dino_1'=>$Dino_1, 'Dino_2'=>$Dino_2, 'Dino_3'=>$Dino_3, 'Dino_4'=>$Dino_4, 'Dino_5'=>$Dino_5]);
    }

    public function dinosaurios($id){
        
        $Dino = Dinosaurios::find($id);
        $Dino_1 = Dinosaurios::find(rand(1 , 10));
        $Dino_2 = Dinosaurios::find(rand(1, 10));

        //variable id de los animales
        $id = $Dino['id'];

        return view('dinosaurios', ['Dino'=>$Dino, 'Dino_1'=>$Dino_1, 'Dino_2'=>$Dino_2, 'id'=>$id]);
    }

}
