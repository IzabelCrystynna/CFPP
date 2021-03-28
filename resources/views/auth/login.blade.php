<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{asset('resumo/srtdash/assets/images/icon/favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('resumo/srtdash/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('resumo/srtdash/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('resumo/srtdash/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('resumo/srtdash/assets/css/metisMenu.css')}}">
    <link rel="stylesheet" href="{{asset('resumo/srtdash/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('resumo/srtdash/assets/css/slicknav.min.css')}}">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{asset('resumo/srtdash/assets/css/typography.css')}}">
    <link rel="stylesheet" href="{{asset('resumo/srtdash/assets/css/default-css.css')}}">
    <link rel="stylesheet" href="{{asset('resumo/srtdash/assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('resumo/srtdash/assets/css/responsive.css')}}">
    <!-- modernizr css -->
</head>
<body>
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- ínicio da área de login-->
    <div class="login-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card shadow-lg border-5 rounded-lg mt-5">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="logo text-center">
                                <br>
                                <a href="#"><img src="{{asset('resumo/srtdash/assets/images/Imagem3.png')}}" alt="logo"></a>
                                <br>
                                <h5>Bem-vindo ao CFPP!</h5>
                            </div>
                            <div class="login-form-body">
                                <h5><i class="ti-lock"><label style="font-size: 25px">Login</label></i></h5>
                                <hr style="background: #948989">
                                <div class="form-group">
                                    <input class="form-control border-input @error('email') is-invalid @enderror" type="email" id="email" name="email" placeholder="Email" autocomplete="on" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input class="form-control border-input @error('password') is-invalid @enderror" type="password" id="password" name="password" placeholder="Senha" required autocomplete="current-password">
                                     @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="row mb-4 rmber-area">
                                    <div class="col-6">
                                        <label for="remember_me" class="inline-flex items-center">
                                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                            <span class="ml-2 text-sm text-gray-600">{{ __('Lembre-me') }}</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <x-button class="btn btn-primary items-center" style="background-color: #752F75">
                                        {{ __('Entrar') }}
                                    </x-button>
                                </div>
                                <div class="form-footer text-center mt-2">
                                    <p class="text-muted">Não tem conta? <a href="{{route('register')}}" style="color: #752F75">Inscrever-se</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fim da área de login -->

    <!-- jquery latest version -->
    <script src="{{asset('resumo/srtdash/assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
    <!-- bootstrap 4 js -->
    <script src="{{asset('resumo/srtdash/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('resumo/srtdash/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('resumo/srtdash/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('resumo/srtdash/assets/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('resumo/srtdash/assets/js/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('resumo/srtdash/assets/js/jquery.slicknav.min.js')}}"></script>
    
    <!-- others plugins -->
    <script src="{{asset('resumo/srtdash/assets/js/plugins.js')}}"></script>
    <script src="{{asset('resumo/srtdash/assets/js/scripts.js')}}"></script>
</body>
</html>