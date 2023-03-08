@extends('layout')
    @section('conteudo')

        <div class="hero overlay" style="background-image: url('{{ asset('assets/bg_3.jpg')}}');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 ml-auto">
                        <h1 class="text-white">Assista <br> sem limites</h1>
                        <p>Assista aos principais jogos ao vivo, reserve seu lugar nos próximos duelos. Sem propagandas, sem extras!</p>
                        <p>
                            <a href="{{ route('login') }}" class="btn btn-primary py-3 px-4 mr-3">Comprar Tickets</a>
                            <!-- Caso o usuário esteja logado deve redirecionar para /ticket
                            <a href="/tickt" class="btn btn-primary py-3 px-4 mr-3">Comprar Tickets</a>
                            -->
                            <a href="{{ route('about') }}" class="more light">Saiba mais</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">

                <div class="row">
                    <div class="col-6 title-section">
                        <h2 class="heading">Próximos Jogos</h2>
                    </div>
                    <div class="col-6 text-right">
                        <div class="custom-nav">
                            <a href="#" class="js-custom-prev-v2"><span class="icon-keyboard_arrow_left"></span></a>
                            <span></span>
                            <a href="#" class="js-custom-next-v2"><span class="icon-keyboard_arrow_right"></span></a>
                        </div>
                    </div>
                </div>

                <div class="owl-4-slider owl-carousel">
                    <div class="item">
                        <div class="video-media">
                            <img src="{{ asset('assets/img_1.jpg')}}" class="img-fluid">
                            <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                                <span class="icon mr-3">
                                    <span class="icon-play"></span>
                                </span>
                                <div class="caption">
                                    <h3 class="m-0">Dogba set for Juvendu return?</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="site-section container">
            <div class="row m-2">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="title-section">
                        <h2 class="heading">Brasileirão</h2>
                    </div>
                    <div class="widget-next-match">
                        <table class="table custom-table">
                            <thead>
                                <tr>
                                    <th>P</th>
                                    <th>Team</th>
                                    <th>W</th>
                                    <th>D</th>
                                    <th>L</th>
                                    <th>PTS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><strong class="text-white">Football League</strong></td>
                                    <td>22</td>
                                    <td>3</td>
                                    <td>2</td>
                                    <td>140</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><strong class="text-white">Soccer</strong></td>
                                    <td>22</td>
                                    <td>3</td>
                                    <td>2</td>
                                    <td>140</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="title-section">
                        <h2 class="heading">Resultados</h2>
                    </div>
                    <div class="widget-next-match">
                        <div class="widget-title">
                            <h3>Jogos</h3>
                        </div>
                        <div class="widget-body mb-3">
                            <div class="widget-vs">
                                <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                                    <div class="team-1 text-center">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2e/Flamengo_braz_logo.svg/640px-Flamengo_braz_logo.svg.png" class="w-25">
                                        <h4>Flamengo</h4>
                                    </div>
                                    <div>
                                        <span class="vs"><span>1 X 0</span></span>
                                    </div>
                                    <div class="team-2 text-center">
                                        <img src="https://play-lh.googleusercontent.com/WvV_ihVFcK6KED5puHwqgpXdCmTzXVZILLplrPn9IXF5uKxi3cDDOFC9eY8uNWSUI1ZL" class="w-25">
                                        <h4>Soccer</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">

                <div class="row">
                    <div class="col-6 title-section">
                        <h2 class="heading">Reserve seus Jogos</h2>
                    </div>
                    <div class="col-6 text-right">
                        <div class="custom-nav">
                            <a href="#" class="js-custom-prev-v2"><span class="icon-keyboard_arrow_left"></span></a>
                            <span></span>
                            <a href="#" class="js-custom-next-v2"><span class="icon-keyboard_arrow_right"></span></a>
                        </div>
                    </div>
                </div>

                <div class="owl-4-slider owl-carousel">
                    <div class="item">
                        <div class="video-media">
                            <img src="{{ asset('assets/img_1.jpg')}}" class="img-fluid">
                            <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                                <span class="icon mr-3">
                                    <span class="icon-play"></span>
                                </span>
                                <div class="caption">
                                    <h3 class="m-0">Dogba set for Juvendu return?</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    @endsection


