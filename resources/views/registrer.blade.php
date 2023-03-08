@extends('layout')
    @section('conteudo')
    <div class="hero overlay" style="background-image: url('{{ asset('assets/bg_3.jpg')}}'); height: 20vh !important; min-height: 300px !important;"></div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf
                        <div class="form-group text-center">
                            <h3>Faça parte da nação!</h3>
                            @if($mensagem = Session::get('erro'))
                                {{$mensagem}}
                            @endif
                            <p class="text-danger" id="error"></p>
                            @if($errors->any())
                                @foreach ($errors->all() as $error)
                                    {{$error}} <br>
                                @endforeach
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" name="nome" class="form-control" placeholder="Nome">
                        </div>
                        <div class="form-group">
                            <input type="text" name="cpf" onblur="verifiedCpf();" class="form-control" placeholder="CPF">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" name="password" class="form-control" placeholder="Senha">
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" id="registrer" class="btn btn-primary py-3 px-5">Cadastrar-me</button>
                            <br>
                            <p><a href="/login" class="more light">Já tenho uma conta</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection
