@extends('layout')
    @section('conteudo')
    <div class="hero overlay" style="background-image: url('{{ asset('assets/bg_3.jpg')}}'); height: 10vh !important; min-height: 200px !important;"></div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <form action="{{ route('login.auth') }}" method="POST">
                        @csrf
                        <div class="form-group text-center">
                            <h3>Bem-vindo(a), torcedor!</h3>
                            @if($mensagem = Session::get('erro'))
                                {{$mensagem}}
                            @endif

                            @if($errors->any())
                                @foreach ($errors->all() as $error)
                                    {{$error}} <br>
                                @endforeach
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Senha">
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
