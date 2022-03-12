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
                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using</p>
                         <a class="btn btn-lg btn-primary" href="#about" role="button">About</a>
                         <a class="btn btn-lg btn-primary" href="#contact" role="button">Contact US</a>
                      </div>
                   </div>
                   <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      <div class="img-box">
                         <figure><img src="images/gyufyufyu.png" alt="img"/></figure>
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
                      <span>Satisfaction</span> 
                   </div>
                </div>
             </div>
             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="about-box">
                   <h2>50</h2>
                   <div class="white-bg">
                      <span>Free Delivery</span> 
                   </div>
                </div>
             </div>
             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="about-box">
                   <h2>50</h2>
                   <div class="white-bg">
                      <span>Store Locators</span> 
                   </div>
                </div>
             </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
             <div class="about-box">
                <div class="titlepage">
                   <h2>About US</h2>
                   <span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web pageweb page</span> 
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