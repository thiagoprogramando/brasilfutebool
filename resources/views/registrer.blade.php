@extends('layout')
    @section('conteudo')
    <div class="hero overlay" style="background-image: url('{{ asset('assets/bg_3.jpg')}}'); height: 20vh !important; min-height: 300px !important;"></div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-3">
                    <form action="#">
                        <div class="form-group text-center">
                            <h3>Faça parte da nação!</h3>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nome">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="CPF">
                        </div>
                        <div class="form-group">
                            <label for="dataNascimento">Data de Nascimento</label>
                            <input type="date" class="form-control" id="dataNascimento">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Senha">
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary py-3 px-5">Cadastrar-me</button>
                            <br>
                            <p><a href="/login" class="more light">Já tenho uma conta</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
