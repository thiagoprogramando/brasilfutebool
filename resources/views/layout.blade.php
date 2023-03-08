<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Brasil Futebool - Jogos ao vivo</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('soccer/fonts/icomoon/style.css')}}">
        <link rel="stylesheet" href="{{ asset('soccer/css/bootstrap/bootstrap.css')}}">
        <link rel="stylesheet" href="{{ asset('soccer/css/jquery-ui.css')}}">
        <link rel="stylesheet" href="{{ asset('soccer/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{ asset('soccer/css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{ asset('soccer/css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{ asset('soccer/css/jquery.fancybox.min.css')}}">
        <link rel="stylesheet" href="{{ asset('soccer/css/bootstrap-datepicker.css')}}">
        <link rel="stylesheet" href="{{ asset('soccer/fonts/flaticon/font/flaticon.css')}}">
        <link rel="stylesheet" href="{{ asset('soccer/css/aos.css')}}">
        <link rel="stylesheet" href="{{ asset('soccer/css/style.css')}}">
    </head>

    <body>

        <div class="site-wrap">

            <div class="site-mobile-menu site-navbar-target">
                <div class="site-mobile-menu-header">
                    <div class="site-mobile-menu-close">
                        <span class="icon-close2 js-menu-toggle"></span>
                    </div>
                </div>
                <div class="site-mobile-menu-body"></div>
            </div>

            <header class="site-navbar py-4" role="banner">
                <div class="container">
                    <div class="d-flex align-items-center">
                        <div class="site-logo">
                            <a href="{{ route('index') }}">
                                <img src="{{ asset('assets/logo.png') }}" alt="Logo">
                            </a>
                        </div>
                        <div class="ml-auto">
                            <nav class="site-navigation position-relative text-right" role="navigation">
                                <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                    <li class="active"><a href="/" class="nav-link">Início</a></li>
                                    <li><a href="/games" class="nav-link">Jogos</a></li>
                                    <li><a href="/about" class="nav-link">Como funciona?</a></li>
                                    @auth
                                        <li><a href="/ticket" class="nav-link">Tickets</a></li>
                                        <li><a href="/player" class="nav-link">Player</a></li>
                                        <li><a href="/store" class="nav-link">Minhas transmissões</a></li>
                                        <li><a href="{{ route('login.logout') }}" class="nav-link">Sair</a></li>
                                    @else
                                        <li><a href="/login" class="nav-link">Login / Cadastro</a></li>
                                    @endauth

                                </ul>
                            </nav>

                            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right text-white"><span class="icon-menu h3 text-white"></span></a>
                        </div>
                    </div>
                </div>
            </header>

            @yield('conteudo')

            <footer class="footer-section">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <div class=" pt-5">
                                <p> Copyright &copy; Todos os direitos reservados | FuteboolBrasil.app </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>

        <script src="{{ asset('soccer/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{ asset('soccer/js/jquery-migrate-3.0.1.min.js')}}"></script>
        <script src="{{ asset('soccer/js/jquery-ui.js')}}"></script>
        <script src="{{ asset('soccer/js/popper.min.js')}}"></script>
        <script src="{{ asset('soccer/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('soccer/js/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('soccer/js/jquery.stellar.min.js')}}"></script>
        <script src="{{ asset('soccer/js/jquery.countdown.min.js')}}"></script>
        <script src="{{ asset('soccer/js/bootstrap-datepicker.min.js')}}"></script>
        <script src="{{ asset('soccer/js/jquery.easing.1.3.js')}}"></script>
        <script src="{{ asset('soccer/js/aos.js')}}"></script>
        <script src="{{ asset('soccer/js/jquery.fancybox.min.js')}}"></script>
        <script src="{{ asset('soccer/js/jquery.sticky.js')}}"></script>
        <script src="{{ asset('soccer/js/jquery.mb.YTPlayer.min.js')}}"></script>
        <script src="{{ asset('soccer/js/main.js')}}"></script>

        <script>
            function verifiedCpf(){
                let cpf = $('input[name=cpf]').val();
                let token = '124678250wDRJmrCEXu225102800';
                let error = document.querySelector('#error');

                const button = document.querySelector('#registrer');

                fetch(`http://ws.hubdodesenvolvedor.com.br/v2/cpf/?cpf=${cpf}&token=${token}`, {
                    headers: {
                        'Accept': 'application/json'
                    }
                })
                .then(response => {
                    if (response.ok) {
                        return response.json();
                    } else {
                        throw new Error('Não foi possível obter os dados do CPF.');
                    }
                })
                .then(data => {
                    if (data.return == 'OK') {
                        button.removeAttribute('disabled');
                    } else {
                        button.setAttribute('disabled', 'disabled');
                        error.innerHTML = 'CPF INVÁLIDO!';
                    }
                })
                .catch(error => {
                    button.setAttribute('disabled', 'disabled');
                    error.innerHTML = 'Não foi possível válidar o CPF!';
                });
            }
        </script>

    </body>

</html>
