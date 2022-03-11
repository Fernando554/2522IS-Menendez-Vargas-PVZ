@extends('template.layout')
  
@section('Titulo')
  {{$Dino['Nombre']}}
@endsection

@section('Cuerpo')
<div class="section-container">
  <div class="container">
    <div class="text-center section-container-spacer">
      <h2 class="with-project-number"><span class="project-number">{{$Dino['id']}}
      </span>{{$Dino['Nombre']}}</h2>
    </div>
    <div class="row section-container-spacer">
      <img src="{{$Dino['Imagen']}}" class="img-responsive" style="width:100px, height: 100px;">

      <h4>Descripcion: {{$Dino['Descripcion']}}</h4>
      <br>
      <p><b>Altura: </b>{{$Dino['Altura']}}</p>
      <p><b>Peso: </b>{{$Dino['Peso']}}</p>
      <p><b>Imagen: </b>{{$Dino['Imagen']}} ft</p>
      <p><b>Region: </b>{{$Dino['Region']}} ft</p>
      <p><b>Area_Geologica: </b>{{$Dino['Area_Geologica']}} lbs</p>
    </div>


    <div class="row">
      <h4>Otros Animales</h4>
    
      <div class="col-md-6">
      <img src="{{$Dino_1['Imagen']}}" class="img-responsive" style="width: 100px; height: 100px;">
      <p><a href="{{route('dinosaurios', $Dino_1['ID'])}}" class="btn btn-primary btn-lg">{{$Dino_1['Nombre']}}</a></p>
      </div>
    
      <div class="col-md-6">
      <img src="{{$Dino_2['Imagen']}}" class="img-responsive" style="width: 100px; height: 100px;">
      <p><a href="{{route('dinosaurios', $Dino_2['ID'])}}" class="btn btn-primary btn-lg">{{$Dino_2['Nombre']}}</a></p>
      </div>
    </div>
  </div>
</div>



<div class="navbar navbar-default navbar-fixed-bottom">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <ul class="navbar-nav nav">
          <li>
            <a href="{{route('dinosaurios', $id-1)}}" title="" class="project-nav left"><span class="project-number">{{$id-1}}</span>Anterior</a>
          </li>
        </ul>
        <p class="h5 navbar-text">Dinoanimales<i class="fa fa-chevron-down arrow-down" aria-hidden="true"></i></p>

        <ul class="navbar-nav nav navbar-right">
          <li>
            <a href="{{route('dinosaurios', $id+1)}}" title="" class="project-nav right"><span class="project-number">{{$id+1}}</span>Siguiente</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection