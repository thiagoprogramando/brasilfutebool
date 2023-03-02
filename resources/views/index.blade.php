@extends('layout')
    @section('conteudo')

        <div class="hero overlay" style="background-image: url('{{ asset('assets/bg_3.jpg')}}');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 ml-auto">
                        <h1 class="text-white">Assista <br> sem limites</h1>
                        <p>Assista aos principais jogos ao vivo, reserve seu lugar nos próximos duelos. Sem propagandas, sem extras!</p>
                        <p>
                            <a href="#" class="btn btn-primary py-3 px-4 mr-3">Comprar Tickets</a>
                            <a href="#" class="more light">Saiba mais</a>
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


