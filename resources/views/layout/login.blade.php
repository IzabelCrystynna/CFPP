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
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form>
                    <div class="login-form-head">
                        <h4>Entrar</h4>
                        <p>Olá, faça login e comece a desfrutar dos benefícios do CFPP</p>
                    </div>
                    <div class="login-form-body">
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
                        <div class="row mb-4 rmber-area">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing">Lembre de mim</label>
                                </div>
                            </div>
                            <div class="col-6 text-right">
                                <a href="#">Esqueceu a senha?</a>
                            </div>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Enviar<i class="ti-arrow-right"></i></button>
                            <div class="login-other row mt-4">
                                <div class="col-6">
                                    <a class="fb-login" href="#">Entrar com <i class="fa fa-facebook"></i></a>
                                </div>
                                <div class="col-6">
                                    <a class="google-login" href="#">Entrar com <i class="fa fa-google"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="form-footer text-center mt-5">
                            <p class="text-muted">Não tem conta? <a href="{{route('cadastro')}}">Inscrever-se</a></p>
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