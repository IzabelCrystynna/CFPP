<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Esqueceu sua senha?</title>
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
</head>
<body>
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="logo text-center">
                        <br>
                        <a href="#"><img src="{{asset('resumo/srtdash/assets/images/Imagem3.png')}}" alt="logo"></a>
                    </div>
                    <div class="login-form-body">
                        <div class="form-group">
                            <hr>
                            <label for="email" id="email" name="email" value="email">Email</label>
                            <input class="form-control border-input" id="email" class="block mt-1 w-full" type="email" name="email" placeholder="Informe seu e-mail e enviaremos um link de redefinição" :value="old('email')" required autocomplete="email" autofocus>
                        </div>
                        <div class="text-center">
                            <x-button class="btn btn-primary" style="background-color: #752F75">
                                {{ __('Redefinir') }}
                            </x-button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->
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