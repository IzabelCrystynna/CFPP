<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CFPP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
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
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="#"><img src="{{asset('resumo/srtdash/assets/images/Imagem3.png')}}" alt="logo"><b style="color:white; font-size: 30px">CFPP</b></a>
                    </a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-user"></i><span>Clientes</span></a>
                                <ul class="collapse">
                                    <li><a href="#">Cadastrar Clientes</a></li>
                                    <li><a href="#">Visualizar Cliente</a></li>
                                    <li><a href="#">Editar Cliente</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-shopping-cart"></i><span>Compra
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="#">Cadastrar Compra</a></li>
                                    <li><a href="#">Visualizar Compra</a></li>
                                    <li><a href="#">Editar Compra</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{(route('clientes.index'))}}" aria-expanded="true"><i class="ti-clipboard"></i><span>Lista de Clientes</span></a>
                            </li>
                            <li>
                                <a href="{{(route('produtos.index'))}}" aria-expanded="true"><i class="ti-clipboard"></i><span>Lista de Produtos</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="{{asset('resumo/srtdash/assets/images/author/avatar.png')}}" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}<i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- page title area end -->
            <div class="main-content-inner">
                <!-- overview area end -->
                <!-- market value area start -->
                <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                @yield('conteudo') 
                            </div>
                        </div>  
                    </div>
                </div>
                <!-- market value area end -->
                <!-- row area start -->
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2021. Todos os direitos reservados ao grupo de desenvolvedores do CFPP</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="{{asset('resumo/srtdash/assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
    <!-- bootstrap 4 js -->
    <script src="{{asset('resumo/srtdash/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('resumo/srtdash/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('resumo/srtdash/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('resumo/srtdash/assets/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('resumo/srtdash/assets/js/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('resumo/srtdash/assets/js/jquery.slicknav.min.js')}}"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="{{asset('resumo/srtdash/assets/js/line-chart.js')}}"></script>
    <!-- all pie chart -->
    <script src="{{asset('resumo/srtdash/assets/js/pie-chart.js')}}"></script>
    <!-- others plugins -->
    <script src="{{asset('resumo/srtdash/assets/js/plugins.js')}}"></script>
    <script src="{{asset('resumo/srtdash/assets/js/scripts.js')}}"></script>
</body>

</html>