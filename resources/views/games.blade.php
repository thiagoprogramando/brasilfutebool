@extends('layout')
    @section('conteudo')
        <div class="site-section">
            <div style="margin-top: 5% !important;" class="container">

                <div class="row">
                    <div class="col-6 title-section">
                        <h2 class="heading">Ao vivo</h2>
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
                            <img src="{{ asset('assets/img_1.jpg') }}" alt="Image" class="img-fluid">
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
                        <h2 class="heading">Próximos jogos</h2>
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
                            <img src="{{ asset('assets/img_1.jpg') }}" alt="Image" class="img-fluid">
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
