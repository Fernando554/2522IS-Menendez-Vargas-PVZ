@extends('template.layout')

@section('Title')
    Dinoanimales - {{$Dino['Nombre']}}
@endsection

@section('Menu')
    <li class="active"> <a href="{{route('index')}}">Inicio</a> </li>
    <li><a href="#dino">Información</a></li>
    <li><a href="#dino">Otros Dinosaurios</a></li>
    <li><a href="#contact">Contacto</a></li>
    <li class="last"><a href="#"><img src="images/search_icon.png" alt="icon"/></a></li>
@endsection

@section('Body')
 <!-- plant -->
 <div id="dino" class="plants">
    <div class="container">
       <div class="row">
          <div class="col-md-12 ">
             <div class="titlepage">
                <h2>Algunos de los Dinosaurios</h2>
                <span>Consulta la información de cualquier dinosaurio que desees, solo dando clic.</span>
             </div>
          </div>
       </div>
    </div>
    <div class="container">
       <div class="row">
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
             <div class="plants-box">
                <figure><img src="{{$Dino_1['Imagen']}}" alt="img"/></figure>
                <h3>{{$Dino_1['Nombre']}}</h3>
                <p>{{$Dino_1['Descripcion']}}</p>
             </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
             <div class="plants-box">
                <figure><img src="{{$Dino_2['Imagen']}}" alt="img"/></figure>
                <h3>{{$Dino_2['Nombre']}}</h3>
                <p>{{$Dino_2['Descripcion']}}</p>
             </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
             <div class="plants-box">
                <figure><img src="{{$Dino_3['Imagen']}}" alt="img"/></figure>
                <h3>{{$Dino_3['Nombre']}}</h3>
                <p>{{$Dino_3['Descripcion']}}</p>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- end plant -->
@endsection