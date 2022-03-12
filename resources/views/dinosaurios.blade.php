@extends('template.layout')

@section('Title')
    Dinoanimales - {{$Dino['Nombre']}}
@endsection

@section('Menu')
    <li class="active"> <a href="{{route('index')}}">Inicio</a> </li>
    <li><a href="#dino">Información</a></li>
    <li><a href="#dinos">Otros Dinosaurios</a></li>
    <li><a href="#contact">Contacto</a></li>
@endsection

@section('Body')

<div>
</div>

<div id="dino" class="plants">
   <div class="titlepage">
      <h2>{{$Dino['Nombre']}}</h2>
   </div>
   
   <div class="plants-box">
      <figure><img src="{{$Dino['Imagen']}}" alt="img"/></figure>
      <span>Descripcion: {{$Dino['Descripcion']}}</span>
      <span>Altura: {{$Dino['Altura']}}</span>
      <span>Peso: {{$Dino['Peso']}}</span>
      <span>Región: {{$Dino['Region']}}</span>
      <span>Región: {{$Dino['Region']}}</span>
      <span>Área Geológica: {{$Dino['Area_Geologica']}}</span>
   </div>
</div>

 <!-- plant -->
 <div id="dinos" class="plants">
    <div class="container">
       <div class="row">
          <div class="col-md-12 ">
             <div class="titlepage">
                <h2>Otros Dinosaurios</h2>
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