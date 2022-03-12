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
        $cliente1 = new \GuzzleHttp\Client();
        $response = $cliente1->request('GET', 'http://animalesaurios.herokuapp.com/consultarAnimales');
        $Animales = json_decode($response->getBody()->getContents(), true);
        //Dinos aleatorio para el index
        $Dino_1 = Dinosaurios::find(rand(1, 10));
        $Dino_2 = Dinosaurios::find(rand(1, 10));
        $Dino_3 = Dinosaurios::find(rand(1, 10));
        $Dino_4 = Dinosaurios::find(rand(1, 10));

        //Animales aleatorios para el index
        $Ani1 = $Animales["Animales"][rand(1, 40)];
        $Ani2 = $Animales["Animales"][rand(1, 40)];
        $Ani3 = $Animales["Animales"][rand(1, 40)];



        return view('index', ['Dino_1'=>$Dino_1, 'Dino_2'=>$Dino_2, 'Dino_3'=>$Dino_3, 'Dino_4'=>$Dino_4, 'index2','Ani1'=>$Ani1, 'Ani2'=>$Ani2, 'Ani3'=>$Ani3]);
    }

    public function dinosaurios($id){
        
        $Dino = Dinosaurios::find($id);
        $Dino_1 = Dinosaurios::find(rand(1 , 10));
        $Dino_2 = Dinosaurios::find(rand(1, 10));
        $Dino_3 = Dinosaurios::find(rand(1, 11));

        return view('dinosaurios', ['Dino'=>$Dino, 'Dino_1'=>$Dino_1, 'Dino_2'=>$Dino_2, 'Dino_3'=>$Dino_3]);
    }

    public FUNCTION animales($id){
        $cliente1 = new \GuzzleHttp\Client();
        $response = $cliente1->request('GET', 'http://animalesaurios.herokuapp.com/consultarAnimal/'.$id);
        $Animales = json_decode($response->getBody()->getContents(), true);

        $Anima = $Animales["Animal"];
        $id = $Anima['ID'];

        return view('animales', ['Anima'=>$Anima, 'ID'=>$id]);
    }

}
