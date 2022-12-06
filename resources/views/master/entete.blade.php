<!DOCTYPE html>
<html lang="en-us">
<head>
     @yield('title')
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Crimson+Text' rel='stylesheet' type='text/css'>
    <link rel="icon" href="{{asset('assets/images/onat.jpeg')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('img/logo.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('img/logo.png')}}">
    <!-- STYLESHEETS-->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    <!-- <link href="{{asset('css/style-switcher.css')}}" rel="stylesheet"> -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--[if lte IE 9]>
      <script src="js/respond.min.js" type="text/javascript"></script>
    <![endif]-->

  </head>
  <body class="enable-fixed-header">

    <!-- Start Header -->
    <!-- <header id="header" class="triangle"> -->
    @yield('header')
      <!-- Menu toggle Mobile -->
      <label id="toggle" class="toggle"></label>

      <!-- Start Banner --> 
      <div id="banner">
      @yield('slide')

        <!-- Start Header-Inner -->
        <div class="header-inner cleafix">

          <!-- Start Header-Logo -->
          <div class="header-logo">
            <a href="/">
              <img src="{{asset('img/logo.png')}}" alt="logo">
            </a>
          </div>
          <!-- End Header-Logo -->

          <!-- Start Header-Tool-Bar -->
          <div class="header-tool-bar">
            <div class="container">
              <div class="row">

                <!-- Start Header-Left -->
                <div class="col-lg-4 col-md-5 col-xs-12 header-left">

                  <!-- Start Header-Contact -->
                  <ul class="custom-list header-contact">
                    <li>
                      <i class="fa fa-phone"></i>
                      +1 (123) 456-7890
                    </li>
                    <li>
                       <i class="fa fa-phone"></i>
                        +1 (123) 456-7890
                    </li>
                  </ul>
                  <!-- End Header-Contact -->

                </div>
                <!-- End Header-Left -->

                <!-- Start Header-Right -->
                <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 col-lg-offset-4 col-md-offset-2 header-right">

                  <!-- Start Social -->
                  <ul class="header-social custom-list">
                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                  </ul> 
                  <!-- End Social -->

                  <!-- Start Header-Login -->
                  <div class="header-login">
                  Lomé-TOGO 
                   </div>
                  <!-- End Header-Login -->

                  <!-- Start Header-Language -->
                  <div class="header-language">
                  Paris-FRANCE
                  </div>
                  <!-- End Header-Language -->

                </div>
                <!-- End Header-Right -->

              </div>
            </div>
          </div>
          <!-- End Header-tool-bar -->

          <!-- Start Header-Nav -->
          <div class="header-nav">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">

                  <!-- Start Nav -->
                  <nav role="navigation">
                    <ul class="nav navbar-nav">
                      <li >
                        <a href="/" class="active">Accueil</a>
                      </li>
                      <li >
                        <a href="{{ url('/notre-conciergerie-en-France-et-au-Togo')}}">A propos de nous</a>
                      </li>
                      <li><a href="/services-de-conciergerie-privée-entreprise-en-France-et-au-togo">Nos services</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                    <li >
                      <a href="{{route('partenaire')}}">Nos partenaires</a>
                    </li>
                    <li><a href="{{route('liste.temoignage.front')}}">Témoignages</a></li>
                    <li >
                      <a href="{{route('demande.devis')}}">Demander devis</a>
                    </li>
                  </ul>
                  </nav>
                  <!-- End Nav -->

                </div>
              </div>
            </div>
          </div>
          <!-- End Header-Nav -->
        </div>
          @yield('content')

          <!-- Start Footer -->
    <footer id="footer">
      <div class="container">

          <!-- Start Preamble -->
          <div class="col-lg-12 preamble">
            <img src="img/footer-logo.png" alt="">
          </div>
          <!-- End Preamble -->

          <!-- Start Footer-Content -->
          <div class="footer-content">
            <div class="row">

              <!-- Start Widget-About -->
              <div class="col-lg-4 col-md-4 widget widget-about">
                <h5>Qui sommes-nous ?</h5>
                <p>Nous sommes une conciergerie d’entreprise et une conciergerie privée basée en France (Paris) et au Togo (Lomé) avec … années d’expérience et … partenaires (magasins, supermarchés, restaurants, Compagnies de location et de transport, Agences évènementielles, agences d’hébergement et des travaux d’entretiens, etc.) repartis dans plusieurs villes du Togo et de la France.</p>
              </div>
              <!-- End Widget-About -->

              <!-- Start Widget-News -->
              <div class="col-lg-4 col-md-4 widget widget-news">
                <h5>Liens rapides</h5>
                <ul class="custom-list">
                  <li><a href="{{ url('/notre-conciergerie-en-France-et-au-Togo')}}">A propos de nous</a></li>
                  <li><a href="/services-de-conciergerie-privée-entreprise-en-France-et-au-togo">Nos services</a></li>
                  <li><a href="{{route('partenaire')}}">Nos partenaires</a></li>
                  <li><a href="{{route('liste.temoignage.front')}}">Témoignages</a></li>
                  <li><a href="{{route('demande.devis')}}">Demander devis</a></li>
                </ul>
              </div>
              <!-- End Widget-News -->

              <!-- Start Widget-Newsletter -->
              <div class="col-lg-4 col-md-4 widget widget-newsletter">
                <!-- <h5>Newsletter</h5> -->
                <a href="{{route('demande.devis')}}"><button class="btn ">Demander devis</button></a>
              </div>
              <div class="col-lg-4 col-md-4 widget widget-newsletter">
                <!-- <h5>Newsletter</h5> -->
                <a href="{{route('partenaire')}}"><button class="btn light">Devenir partenaire</button></a>
              </div>
              <!-- End Widget-Newsletter -->
             
              <!-- Start Widget-Social -->
              <div class="col-lg-4 col-md-4 widget widget-social">
              </br>
                <!-- <h5>Lets Stay in Touch</h5> -->
                <ul class="custom-list">
                  <li>
                    <a href="#"><i class="fa fa-facebook-square"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-twitter-square"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-linkedin-square"></i></a>
                  </li>
                </ul>
              </div>
              <!-- End Widget-Social -->
            </div>
        </div>
      </div>
      <!-- End Footer-Content -->

      <!-- Start Footer-Copyrights -->
      <div class="footer-copyrights">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <p>Copyright 2022 © lemonoservice. All rights reserved. Powered by <a href="#">INNOV IS</a></p>
            </div>
          </div>
        </div>
      </div>
      <!-- End Footer-Copyrights -->

    </footer>
    <!-- End Footer -->

    <a href="#" class="btn" id="back-to-top"><i class="fa fa-arrow-up"></i></a>

    <!-- SCRIPTS-->
    <script src="{{asset('js/jquery-1.9.1.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.vide.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui-1.10.4.custom.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <script src="{{asset('js/jquery.ba-outside-events.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/jquery.placeholder.js')}}"></script>
    <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('js/gmap3.min.js')}}"></script>
  
  </body>

</html>