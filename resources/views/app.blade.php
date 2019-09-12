<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Inclui o MBD e suas dependências -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/css/mdb.min.css" rel="stylesheet">

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/js/mdb.min.js"></script>
        
        <title>@yield('titulo')</title>

    </head>

<!-- Cria menu -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark scrolling-navbar">
        <div class="container">
    
            <a class="navbar-brand pt-0 waves-effect" href="https://www.marvel.com/" target="_blank">
                <img src="{{ asset('/img/logo.png') }}" style="width: 160px; height: 40px;" alt="Logo Marvel">
            </a>
    
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link waves-effect" href="{{ url('/') }}">Home
                        </a>
                    </li>
    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Personagens </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{ url('/personagem/demolidor') }}">Demolidor</a>
                            <a class="dropdown-item" href="{{ url('/personagem/iron-man') }}">Homem de Ferro</a>
                            <a class="dropdown-item" href="{{ url('/personagem/rocket') }}">Rocket</a>
                        </div>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link waves-effect" href="#">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect" href="#">Sobre</a>
                    </li>
                </ul>
    
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <a href="https://pt-br.facebook.com/Marvel/" class="nav-link waves-effect" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://twitter.com/marvel" class="nav-link waves-effect" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                            <a href="https://github.com/CaueSants/Marvel-Project/" class="nav-link waves-effect" target="_blank">
                                <i class="fab fa-lg fa-github"></i>
                            </a>
                    </li>
                </ul>
    
            </div>
    
        </div>
    </nav>

    <!-- Carrossel -->
    <div id="carouselFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('/img/thor.jpg') }}" alt="Thor slide">
              </div>

              <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('/img/hulk.jpg') }}" alt="Hulk slide">
              </div>

              <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('/img/capitao.jpg') }}" alt="Capitao slide">
              </div>

            </div>

            <a class="carousel-control-prev" href="#carouselFade" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#carouselFade" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>

          </div>
    
    <!-- conteúdo das views -->
    <body>
        <div class="container">
                @yield('conteudo')
        </div>
    </body>
</html>
<style>
body{
    background-color: #f5f5f5;
}
</style>
@extends('footer')