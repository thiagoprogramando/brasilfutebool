@extends('layout')
    @section('conteudo')
        <div class="hero overlay" style="background-image: url('{{ asset('assets/bg_3.jpg')}}');">
            <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 mx-auto text-center">
                <h1 class="text-white">Como funciona?</h1>
                <p>Saiba como funcionam nossas transmissões, valores e recusos.</p>
                </div>
            </div>
            </div>
        </div>

        <div class="container site-section">
            <div class="row">
                <div class="col-6 title-section">
                    <h2 class="heading">Futebool Brasil</h2>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-lg-4 mb-4">
                    <div class="custom-media d-block">
                        <div class="text">
                            <span class="meta">Funcionamento</span>
                            <h3 class="mb-4"><a href="#">Quais jogos iremos transmitir?</a></h3>
                            <p>Iremos transmitir todos os jogos do Brasileirão 2023, Libertadores mata-mata e Copa do Brasil.</p>
                            <p>Às transmissões terão início 10 minutos antes do start da partida e serão finalizadas no máximo 5 minutos após o apito final.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="custom-media d-block">
                        <div class="text">
                            <span class="meta">Financeiro</span>
                            <h3 class="mb-4"><a href="#">Qual o custo?</a></h3>
                            <p>Todos os jogos custam uma quantidade X de Tickets determinada pela plataforma. Variando entre 1 e 5.</p>
                            <p>Ao se cadastrar você poderá comprar Tickets e usa-los da maneira que desejar!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="custom-media d-block">
                        <div class="text">
                            <span class="meta">Recursos</span>
                            <h3 class="mb-4"><a href="#">Integrações</a></h3>
                            <p>Oferecemos APIs com links de transmissão, resultados e tabelas dos jogos e campeonatos.</p>
                            <p>Entre em contato com nosso suporte após fazer login!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
