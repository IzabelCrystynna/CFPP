<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cadastro</title>
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
    <script src="{{asset('resumo/srtdash/assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>
<body>
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form>
                    <div class="login-form-head">
                        <h4>Inscrever-se</h4>
                        <p>Olá, inscreva-se e junte-se a nós</p>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="exampleInputName1">Nome completo</label>
                            <input type="text" id="exampleInputName1">
                            <i class="ti-user"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputEmail1">Endereço de email</label>
                            <input type="email" id="exampleInputEmail1">
                            <i class="ti-email"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword1">Senha</label>
                            <input type="password" id="exampleInputPassword1">
                            <i class="ti-lock"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword2">Confirme sua senha</label>
                            <input type="password" id="exampleInputPassword2">
                            <i class="ti-lock"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Enviar<i class="ti-arrow-right"></i></button>
                            <div class="login-other row mt-4">
                                <div class="col-6">
                                    <a class="fb-login" href="#">Cadastre-se com<i class="fa fa-facebook"></i></a>
                                </div>
                                <div class="col-6">
                                    <a class="google-login" href="#">Cadastre-se com<i class="fa fa-google"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="form-footer text-center mt-5">
                            <p class="text-muted">Já tem conta?<a href="{{route('login')}}">Entrar</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->
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