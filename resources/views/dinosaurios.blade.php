@extends('template.layout')

@section('Title')
   Dinosaurio - {{$Dino['id']}}
@endsection

@section('Menu')
    <li class="active"> <a href="{{route('index')}}">Inicio</a> </li>
    <li><a href="#dino">Información</a></li>
    <li><a href="#dinos">Otros Dinosaurios</a></li>
    <li><a href="#contact">Contacto</a></li>
@endsection

@section('Body')

<section>
   <div id="dino" class="container">
         <div class="plants">
            <div class="titlepage">
               <h2>{{$Dino['Nombre']}}</h2>
            </div>
            
            <div class="plants-box">
               <figure><img src="{{$Dino['Imagen']}}" alt="img"/></figure>
               <p>Descripcion: {{$Dino['Descripcion']}}</p>
               <p>Altura: {{$Dino['Altura']}}</p>
               <p>Peso: {{$Dino['Peso']}}</p>
               <p>Región: {{$Dino['Region']}}</p>
               <p>Área Geológica: {{$Dino['Area_Geologica']}}</p>
            </div>
         </div>
   </div>
</section>

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
                <h3><a href="{{route('dinosaurios', $Dino_1['id'])}}">{{$Dino_1['Nombre']}}</a></h3>
                <p>{{$Dino_1['Descripcion']}}</p>
             </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
             <div class="plants-box">
                <figure><img src="{{$Dino_2['Imagen']}}" alt="img"/></figure>
                <h3><a href="{{route('dinosaurios', $Dino_2['id'])}}">{{$Dino_2['Nombre']}}</a></h3>
                <p>{{$Dino_2['Descripcion']}}</p>
             </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
             <div class="plants-box">
                <figure><img src="{{$Dino_3['Imagen']}}" alt="img"/></figure>
                <h3><a href="{{route('dinosaurios', $Dino_3['id'])}}">{{$Dino_3['Nombre']}}</a></h3>
                <p>{{$Dino_3['Descripcion']}}</p>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- end plant -->
@endsection