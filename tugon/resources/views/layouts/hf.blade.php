<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Construction - Free HTML Bootstrap Template</title>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Custom Fonts -->
        <link rel="stylesheet" href="custom-font/fonts.css" />
        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <!-- Bootsnav -->
        <link rel="stylesheet" href="css/bootsnav.css">
        <!-- Fancybox -->
        <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.5" media="screen" />	
        <!-- Custom stylesheet -->
        <link rel="stylesheet" href="css/custom.css" />
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <style>
            .ali{
                color: azure;
            }
            .ali2{
                font-size: 20px;
            }
        </style>
    </head>
    <body>

        <!-- Preloader -->

        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                </div>
            </div>
        </div>

        <!--End off Preloader -->

        <!-- Header -->
        <header>
            

            <!-- Navbar -->
            <nav class="navbar bootsnav">
                <!-- Top Search -->
                <div class="top-search">
                    <div class="container">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <!-- Atribute Navigation -->
                    
                    <!-- Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="" class="ali1"><h4 class="ali">Tug'on tamir</h4></a>
                    </div>
                    <!-- Navigation -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav menu">
                            <li><a href="">BOSH SAXIFA</a></li>                    
                            <li><a href="#about">BIZ XAQIMIZDA</a></li>
                            <li><a href="#services">XIZMATLAR</a></li>
                            <li><a href="#portfolio">ISHLAR</a></li>
                            <li><a href="#contact_form">BOG'LANISH</a></li>
                        </ul>
                    </div>
                </div>   
            </nav><!-- Navbar end -->
        </header><!-- Header end -->



        @yield('content')


                <!-- Footer -->
                <footer>
                    <!-- Footer top -->
                    <div class="container footer_top">
                        <div class="row">
                            <div class="col-lg-4 col-sm-7">
                                <div class="footer_item">
                                    <h4>KOMPANIYA XAQIDA</h4>
                                    <p>Kompaniya-tadbirkorlik subyektining tashkiliy-huquqiy shakli ko'rsatilgan holdagi to'liq nomi:  <h3 style="color: #fff">"TUG"ON TAMIR" MCHJ</h3> </p>
        
                                    
                                </div>
                            </div>
                         
                            <div class="col-lg-3 col-sm-5">
                                <div class="footer_item">
                                    <h4>BIZ BILAN BOG"LANISH</h4>
                                    <ul class="list-unstyled footer_contact">
                                        <li><a href=""><span class="fa fa-map-marker"></span>Andijon viloyati, Xonobod shaxri, Xonobod, A.FITRAT - 164</a></li>
                                        <li><a href=""><span class="fa fa-envelope"></span> tugon_tamir@gmail.com</a></li>
                                        <li><a href=""><span class="fa fa-mobile"></span><p>+998 98 570 80 00</p></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!-- Footer top end -->
        
                    <!-- Footer bottom -->
                    <div class="footer_bottom text-center">
                        <p class="wow fadeInRight">
                            Uzbekistan
                            <i class="fa fa-heart"></i>
                            01.11.2021
                        </p>
                    </div><!-- Footer bottom end -->
                </footer><!-- Footer end -->
        
                <!-- JavaScript -->
                <script src="js/jquery-1.12.1.min.js"></script>
                <script src="js/bootstrap.min.js"></script>
        
                <!-- Bootsnav js -->
                <script src="js/bootsnav.js"></script>
        
                <!-- JS Implementing Plugins -->
                <script src="js/isotope.js"></script>
                <script src="js/isotope-active.js"></script>
                <script src="js/jquery.fancybox.js?v=2.1.5"></script>
        
                <script src="js/jquery.scrollUp.min.js"></script>
        
                <script src="js/main.js"></script>
            </body>	
        </html>	