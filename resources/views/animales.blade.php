@extends('template.layout')

@section('Title')
   Animal - {{$Anima['ID']}}
@endsection

@section('Menu')
    <li class="active"> <a href="{{route('index')}}">Inicio</a> </li>
    <li><a href="#dino">Información</a></li>
    <li><a href="#dinos">Otros Animales</a></li>
    <li><a href="#contact">Contacto</a></li>
@endsection

@section('Body')
<section>
   <div id="dino" class="container">
         <div class="plants">
            <div class="titlepage">
               <h2>{{$Anima['Nombre']}}</h2>
            </div>
            
            <div class="plants-box">
               <figure><img src="{{$Anima['Imagen']}}" alt="img"/></figure>
               <p>Nombre_latino: {{$Anima['Nombre_latino']}}</p>
               <p>Tipo: {{$Anima['Tipo']}}</p>
               <p>Tiempo_activo: {{$Anima['Tiempo_activo']}}</p>
               <p>Longi_min: {{$Anima['Longi_min']}}</p>
               <p>Longi_max: {{$Anima['Longi_max']}}</p>
               <p>Peso_min: {{$Anima['Peso_min']}}</p>
               <p>Peso_max: {{$Anima['Peso_max']}}</p>
               <p>Esperanza_vida: {{$Anima['Esperanza_vida']}}</p>
               <p>Habitat: {{$Anima['Habitat']}}</p>
               <p>Dieta: {{$Anima['Dieta']}}</p>
               <p>Rango_geo: {{$Anima['Rango_geo']}}</p>
               <p>created_at: {{$Anima['created_at']}}</p>
               <p>updated_at: {{$Anima['updated_at']}}</p>
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
                <h2>Otros Animales</h2>
                <span>Consulta la información de cualquier Animal que desees, solo dando clic.</span>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- end plant -->
@endsection