@extends('app')

@section('titulo')
    Marvel Project :: {{ $nome }}
@stop

@section('conteudo')
<div class="container">
    
    <section class="mt-5 wow fadeIn" style="visibility: visible; animation-name fadeIn;">
        <div class="row">
            <div class="col-md-4"> 
                <img class="rounded-circle img-thumbnail" src="{{ $img }}">        
            </div>

            <div class="col-md-8">
                <h1 class="h1-responsive font-weight-bold my-3">{{ $nome }}</h1>
                <h4>{{ $info }}</h4>
            </div>

        </div>
    </section>

    <section class="mt-5 wow fadeIn" style="visibility: visible; animation-name fadeIn;">
            <hr class="my-5">
            <h1 class="h1-responsive font-weight-bold text-center my-2">Suas Histórias</h1>
            <h5 class="h5-responsive text-center my-2">Histórias do personagem ou relacionadas ao mesmo</h5>
            <hr class="my-5">
            <div class="row row-md-8">
                <div class="col-md-4">
                    <img class="img-thumbnail" src="{{ asset($finalHist0['thumbnail']['path'].'.'.$finalHist0['thumbnail']['extension']) }}">
                    <h4 class="h4-responsive font-weight-bold my-3"> {{ $finalHist0['title'] }} </h4>
                    <h6 class="h6-responsive my-3"> {{ $finalHist0['description'] }}</h6>

                    <a href="{{ $finalHist0['urls'][0]['url'] }}" target="_blank">
                            <button type="button" class="btn btn-elegant">Detalhes</button>
                    </a>
        
                    <a>
                            <button type="button" class="btn btn-elegant">Comprar</button>
                    </a>

                </div>
    
                <div class="col-md-4">
                    <img class="img-thumbnail" src="{{ asset($finalHist1['thumbnail']['path'].'.'.$finalHist1['thumbnail']['extension']) }}">
                    <h4 class="h4-responsive font-weight-bold my-3"> {{ $finalHist1['title'] }} </h4>
                    <h6 class="h6-responsive my-3"> {{ $finalHist1['description'] }}</h6>

                    <a href="{{ $finalHist1['urls'][0]['url'] }}" target="_blank">
                            <button type="button" class="btn btn-elegant">Detalhes</button>
                    </a>
        
                    <a>
                            <button type="button" class="btn btn-elegant">Comprar</button>
                    </a>

                </div>

                <div class="col-md-4">
                    <img class="img-thumbnail" src="{{ asset($finalHist2['thumbnail']['path'].'.'.$finalHist2['thumbnail']['extension']) }}">
                    <h4 class="h4-responsive font-weight-bold my-3"> {{ $finalHist2['title'] }} </h4>
                    <h6 class="h6-responsive my-3"> {{ $finalHist2['description'] }}</h6>

                    <a href="{{ $finalHist2['urls'][0]['url'] }}" target="_blank">
                            <button type="button" class="btn btn-elegant">Detalhes</button>
                    </a>
        
                    <a>
                            <button type="button" class="btn btn-elegant">Comprar</button>
                    </a>

                </div>
    
            </div>

    </section>

    <section class="mt-5 wow fadeIn" style="visibility: visible; animation-name fadeIn;">

        <div class="row row-md-8">
                
            <div class="col-md-4">
                <img class="img-thumbnail" src="{{ asset($finalHist3['thumbnail']['path'].'.'.$finalHist3['thumbnail']['extension']) }}">
                <h4 class="h4-responsive font-weight-bold my-3"> {{ $finalHist3['title'] }} </h4>
                <h6 class="h6-responsive my-3"> {{ $finalHist3['description'] }}</h6>

                <a href="{{ $finalHist3['urls'][0]['url'] }}" target="_blank">
                        <button type="button" class="btn btn-elegant">Detalhes</button>
                </a>
    
                <a>
                        <button type="button" class="btn btn-elegant">Comprar</button>
                </a>

            </div>

            <div class="col-md-4" id="empty"></div>

            <div class="col-md-4">
                <img class="img-thumbnail" src="{{ asset($finalHist4['thumbnail']['path'].'.'.$finalHist4['thumbnail']['extension']) }}">
                <h4 class="h4-responsive font-weight-bold my-3"> {{ $finalHist4['title'] }} </h4>
                <h6 class="h6-responsive my-3"> {{ $finalHist4['description'] }}</h6>
                
                <a href="{{ $finalHist4['urls'][0]['url'] }}" target="_blank">
                    <button type="button" class="btn btn-elegant">Detalhes</button>
                </a>

                <a>
                        <button type="button" class="btn btn-elegant">Comprar</button>
                </a>

            </div>

        </div>

    </section>

    <section class="mt-5 wow fadeIn" style="visibility: visible; animation-name fadeIn;">
        <!-- aqui pode ser adicionado mais conteúdo relacionado ao personagem, como vem da API, informações devem ser em php/blade -->
    </section>

</div>
@stop