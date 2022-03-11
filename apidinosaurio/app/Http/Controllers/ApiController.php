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
        return view('index');
    }

    public function dinosaurios(){
        return view('dinosaurios');
    }
}
