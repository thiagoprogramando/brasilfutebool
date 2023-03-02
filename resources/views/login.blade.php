@extends('layout')
    @section('conteudo')
    <div class="hero overlay" style="background-image: url('{{ asset('assets/bg_3.jpg')}}'); height: 10vh !important; min-height: 200px !important;"></div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-3">
                    <form action="#">
                        <div class="form-group text-center">
                            <h3>Bem-vindo(a), torcedor!</h3>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Senha">
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary py-3 px-5">Acessar</button>
                            <br>
                            <p><a href="/registrer" class="more light">Cadastrar-se</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
