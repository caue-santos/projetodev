@extends('app')

@section('titulo')
Marvel Project
@stop
  
@section('conteudo')

<div class="container">

  <section class="mt-5 wow fadeIn" style="visibility: visible; animation-name fadeIn;">

    <div class="text-center">
        <h1 class="h1-responsive font-weight-bold text-center my-5">Atenção!</h1>
        <hr class="my-4">
        <h2>Esta é uma aplicação demonstrativa, faz parte de um processo seletivo e não deve ser usada para fins comercias.</h2>
        <hr class="my-4">
    </div>

  </section>

  <!-- Tecnologias -->
  <section class="mt-5 wow fadeIn" style="visibility: visible; animation-name fadeIn;">
    
    <div class="text-center">
      <h2 class="h1-responsive font-weight-bold text-center my-5">Técnologias utilizadas</h2>
    </div>

    <div class="row">
      <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('/img/laravel2.jpg') }}" alt="Card image cap">

              <div class="card-body">
                <h5 class="card-title">Laravel Framework</h5>
                <p class="card-text">Laravel é um framework poderoso, livre e de código aberto, desenvolvido em 2011 por Taylor B. Otwell para o desenvolvimento de aplicações em PHP com a arquitetura MVC.</p>
                <a href="https://laravel.com/" target="_blank">Saiba mais</a>
              </div>

          </div>
      </div>

      <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('/img/mdb2.jpg') }}" alt="Card image cap">
  
              <div class="card-body">
                <h5 class="card-title">Material Design Bootstrap</h5>
                <p class="card-text">O Material Design Bootstrap é um kit de ferramentas de código aberto baseado no Bootstrap para o desenvolvimento de aplicativos.</p>
                <a href="https://mdbootstrap.com/" target="_blank">Saiba mais</a>
              </div>
  
          </div>
      </div>

      <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('/img/marvelApi.jpg') }}" alt="Card image cap">
  
              <div class="card-body">
                <h5 class="card-title">Marvel API</h5>
                <p class="card-text">A Marvel Comics API permite que os desenvolvedores de todos os lugares acessem informações sobre a vasta biblioteca de quadrinhos da Marvel.</p>
                <a href="https://developer.marvel.com/" target="_blank">Saiba mais</a>
              </div>
  
          </div>
      </div>

    </div>

  </section>

  <section class="mt-5 wow fadeIn" style="visibility: visible; animation-name fadeIn;">
    <!-- aqui pode ser adicionado mais conteúdo a aplicação na página inicial -->
  </section>

</div>
@stop