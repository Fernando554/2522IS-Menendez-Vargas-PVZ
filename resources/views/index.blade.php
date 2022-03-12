@extends('template.layout')

@section('Title')
    Dinoanimales - Inicio
@endsection

@section('Menu')
    <li class="active"> <a href="#">Inicio</a> </li>
    <li><a href="#dino">Dinosaurios</a></li>
    <li><a href="#animal">Animales</a></li>
    <li><a href="#about">Acerca De</a> </li>
    <li><a href="#contact">Contacto</a></li>
@endsection

@section('Body')
<section >
    <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">
       <ol class="carousel-indicators">
          <li data-target="#main_slider" data-slide-to="0" class="active"></li>
          <li data-target="#main_slider" data-slide-to="1"></li>
          <li data-target="#main_slider" data-slide-to="2"></li>
       </ol>
       <div class="carousel-inner">
          <div class="carousel-item active">
             <div class="container">
                <div class="row marginii">
                   <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      <div class="carousel-caption ">
                         <h1>Bievenido a <strong class="color">Dinoanimales</strong></h1>
                         <p>Bienvenidos paleopapus aqui encontraras la informacion mas importante de las diferentes especies de Dinosaurios. Dinoanimales espera que tu experiencia sea agradable :)</p>
                         <a class="btn btn-lg btn-primary" href="#about" role="button">About</a>
                         <a class="btn btn-lg btn-primary" href="#contact" role="button">Contact US</a>
                      </div>
                   </div>
                   <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      <div class="img-box">
                         <figure><img src="images/dino.webp" alt="img"/></figure>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="carousel-item">
             <div class="container">
                <div class="row marginii">
                   <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      <div class="carousel-caption ">
                         <h1>Admira al <strong class="color">{{$Dino_1['Nombre']}}</strong></h1>
                         <p>{{$Dino_1['Descripcion']}}</p>
                         <a class="btn btn-lg btn-primary" href="#about" role="button">Acerca De</a>
                         <a class="btn btn-lg btn-primary" href="#contact" role="button">Contacto</a>
                      </div>
                   </div>
                   <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      <div class="img-box ">
                         <figure><img src="{{$Dino_1['Imagen']}}" alt="img"/></figure>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="carousel-item">
             <div class="container">
                <div class="row marginii">
                   <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      <div class="carousel-caption ">
                         <h1>Admira al <strong class="color"><a href="{{route('dinosaurios', $Dino_1['id'])}}">{{$Dino_1['Nombre']}}</a></strong></h1>
                         <p>{{$Dino_1['Descripcion']}}</p>
                         <a class="btn btn-lg btn-primary" href="#about" role="button">Acerca De</a>
                         <a class="btn btn-lg btn-primary" href="#contact" role="button">Contacto</a>
                      </div>
                   </div>
                   <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      <div class="img-box ">
                         <figure><img src="{{$Dino_1['Imagen']}}" alt="img"/></figure>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
       <i class='fa fa-angle-left'></i></a>
       <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
       <i class='fa fa-angle-right'></i>
       </a>
    </div>
 </section>

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
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
             <div class="plants-box">
                <figure><img src="{{$Dino_4['Imagen']}}" alt="img"/></figure>
                <h3><a href="{{route('dinosaurios', $Dino_4['id'])}}">{{$Dino_4['Nombre']}}</a></h3>
                <p>{{$Dino_4['Descripcion']}}</p>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- end plant -->

 <!-- plant -->
 <div id="animal" class="plants">
    <div class="container">
       <div class="row">
          <div class="col-md-12 ">
             <div class="titlepage">
                <h2>Algunos de los Animales</h2>
                <span>Consulta la información de cualquier animal que desees, solo dando clic.</span>
             </div>
          </div>
       </div>
    </div>
    <div class="container">
       <div class="row">
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
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
             <div class="plants-box">
                <figure><img src="{{$Dino_4['Imagen']}}" alt="img"/></figure>
                <h3>{{$Dino_4['Nombre']}}</h3>
                <p>{{$Dino_4['Descripcion']}}</p>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- end plant -->

 <!-- about -->
 <div id="about" class="about">
    <div class="container">
       <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="about-box">
                   <h2>50</h2>
                   <div class="white-bg">
                      <span>Visitantes</span> 
                   </div>
                </div>
             </div>
             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="about-box">
                   <h2>9.5/10</h2>
                   <div class="white-bg">
                      <span>Puntuacion de la pagina</span> 
                   </div>
                </div>
             </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
             <div class="about-box">
                <div class="titlepage">
                   <h2>Acerca De</h2>
                   <span>Dinoanimales es una API que puede ofrecerte toda informacion 
para brindarte sobre los diferentes tipos de dinosaurios, su forma de 
alimentacion hasta sus diferentes razas.
Los dinosaurios fueron un grupo de reptiles que habitaron la 
Tierra en la era mesozoica , desde el período triásico superior
 hasta fines del cretácico (245 a 65 millones de años atrás).
 Su desaparición marca el límite entre la era mesozoica y la 
cenozoica, y el comienzo de la denominada edad de los mamíferos.
 El término dinosaurio proviene del griego (significa "lagarto 
terrible") y se refiere a ejemplares de lo más diversos: grandes, 
como el brontosaurio, que pesaba cerca de 75 toneladas, y muy 
pequeños, como el saltopus, de tan sólo 50 cm de largo.

Los primeros homínidos , por su parte, aparecieron en la 
Tierra hace relativamente poco, alrededor de 2 millones de 
años atrás, muchísimo después de que el último de estos grandes 
reptiles pereciera. Las imágenes de los primeros hombres junto a
 los dinosaurios no son más que un producto de la fantasía.</span> 
                   <div class="read-more">
                      <a  href="#">Read More</a>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- end about -->
@endsection