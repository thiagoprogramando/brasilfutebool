@extends('layout')
    @section('conteudo')
        <div class="hero overlay" style="background-image: url('{{ asset('assets/bg_3.jpg')}}'); height: 10vh !important; min-height: 200px !important;"></div>

        <div class="container site-section">
            <div class="row">
                <div class="col-6 title-section">
                    <h2 class="heading">Campeonato <strong>Brasileirão</strong> <p>Time um X Time Dois</p></h2>

                </div>
            </div>
            <div class="row m-2">
                <div class="col-lg-12 mb-4">
                    <video class="w-100" src="https://vimeo.com/139714818" controls></video>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="custom-media d-block">
                        <div class="text">
                            <h3 class="mb-4"><a href="#">Algum problema? Nos informe!</a></h3>

                            <form action="#">
                                <div class="form-group">
                                    <input name="email" type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <textarea name="mensagem" class="form-control" rows="3" placeholder="Mensagem"></textarea>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" name="btnHelp" class="btn btn-warning text-white py-2 px-3">Enviar Feedback</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
