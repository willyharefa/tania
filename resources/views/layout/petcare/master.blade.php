<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="/assets/template/petcare/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/template/petcare/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/template/petcare/assets/css/slicknav.css">
    <link rel="stylesheet" href="/assets/template/petcare/assets/css/flaticon.css">
    <link rel="stylesheet" href="/assets/template/petcare/assets/css/animate.min.css">
    <link rel="stylesheet" href="/assets/template/petcare/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/assets/template/petcare/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/assets/template/petcare/assets/css/themify-icons.css">
    <link rel="stylesheet" href="/assets/template/petcare/assets/css/slick.css">
    <link rel="stylesheet" href="/assets/template/petcare/assets/css/nice-select.css">
    <link rel="stylesheet" href="/assets/template/petcare/assets/css/style.css">
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="/assets/img/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!--? Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="/"><img src="/assets/img/logo.png" width="100"></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">
                                            <li><a href="/">Home</a></li>
                                            <li><a href="/page/item">Pesan Barang</a></li>
                                            <li><a href="/page/grooming">Daftar Grooming</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="header-right-btn f-right d-none d-lg-block ml-30">
                                    <a href="/dashboard" class="header-btn">Dashboard</a>
                                </div>
                            </div>
                        </div>   
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main> 
        <!-- Hero Area Start -->
        <div class="slider-area2 slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center pt-50">
                            <h2>{{ $title }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End -->
        {{-- main --}}
        @yield('content')
        {{-- end main --}}
    </main>
    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                       <div class="single-footer-caption mb-50">
                         <div class="single-footer-caption mb-30">
                              <!-- logo -->
                             <div class="footer-logo mb-25">
                                 <a href="/"><img src="/assets/img/logo.png" width="150"></a>
                             </div>
                             <div class="footer-tittle">
                                 <div class="footer-pera">
                                     <p>Jl. Riau No.52 D, Kp. Bandar, Kec. Senapelan, Kota Pekanbaru, Riau 28153</p>
                                </div>
                             </div>
                             <!-- social -->
                             <div class="footer-social">
                                 <a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-square"></i></a>
                                 <a href="#"><i class="fab fa-twitter-square"></i></a>
                                 <a href="#"><i class="fab fa-linkedin"></i></a>
                                 <a href="#"><i class="fab fa-pinterest-square"></i></a>
                             </div>
                         </div>
                       </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Company</h4>
                                <ul>
                                    <li><a href="/">Aquatic Pet Shop</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Services</h4>
                                <ul>
                                    <li><a href="/page/item">Pakan Hewan</a></li>
                                    <li><a href="/page/grooming">Pet Grooming</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Get in Touch</h4>
                                <ul>
                                 <li><a href="#">0822-8563-2727</a></li>
                                 <li><a href="#">aquaticpetshopriau@gmail.com</a></li>
                             </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                     <div class="row d-flex align-items-center">
                         <div class="col-xl-12 ">
                             <div class="footer-copy-right text-center">
                                 <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->
    
        <script src="/assets/template/petcare/assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="/assets/template/petcare/assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="/assets/template/petcare/assets/js/popper.min.js"></script>
        <script src="/assets/template/petcare/assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="/assets/template/petcare/assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="/assets/template/petcare/assets/js/owl.carousel.min.js"></script>
        <script src="/assets/template/petcare/assets/js/slick.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="/assets/template/petcare/assets/js/wow.min.js"></script>
		<script src="/assets/template/petcare/assets/js/animated.headline.js"></script>
        <script src="/assets/template/petcare/assets/js/jquery.magnific-popup.js"></script>

		<!-- Nice-select, sticky -->
        <script src="/assets/template/petcare/assets/js/jquery.nice-select.min.js"></script>
		<script src="/assets/template/petcare/assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="/assets/template/petcare/assets/js/contact.js"></script>
        <script src="/assets/template/petcare/assets/js/jquery.form.js"></script>
        <script src="/assets/template/petcare/assets/js/jquery.validate.min.js"></script>
        <script src="/assets/template/petcare/assets/js/mail-script.js"></script>
        <script src="/assets/template/petcare/assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="/assets/template/petcare/assets/js/plugins.js"></script>
        <script src="/assets/template/petcare/assets/js/main.js"></script>
        
    </body>
</html>