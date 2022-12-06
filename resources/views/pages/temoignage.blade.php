@extends('master.entete')
@section('title')
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Des clients satisfaits, il n’y a rien de mieux. Pour leur avoir offert des services en : Organisation, recherche, réservation, dégustation, location … pour des évènements, des voyages, des démarches administratives, des envois de colis, la restauration">
<meta name="keywords" content="">
<meta property="og:title" content="Nos clients parlent de notre Conciergerie – Le Mono Services">
<meta property="og:site_name" content="">
<meta property="og:url" content="{{ url('/temoignages-conciergerie-privée-entreprise-Togo-France')}}">
<meta property="og:description" content="Des clients satisfaits, il n’y a rien de mieux. Pour leur avoir offert des services en : Organisation, recherche, réservation, dégustation, location … pour des évènements, des voyages, des démarches administratives, des envois de colis, la restauration">
<meta property="og:type" content="website">
<meta property="og:image" content="">
<meta name="twitter:site" content="">
<meta name="twitter:title" content="Nos clients parlent de notre Conciergerie – Le Mono Services">
<meta name="twitter:image" content="">
<meta name="twitter:description" content="Des clients satisfaits, il n’y a rien de mieux. Pour leur avoir offert des services en : Organisation, recherche, réservation, dégustation, location … pour des évènements, des voyages, des démarches administratives, des envois de colis, la restauration">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <title>Nos clients parlent de notre Conciergerie – Le Mono Services</title>
@endsection

      @section('header')
      <header id="header" class="triangle header-title testimonials">
      @endsection

@section('content')
<div class="css-table">
          <div class="css-table-cell">


          </div>
        </div>

      </div>
<!-- Start Header-Title-Inner -->
        <div class="header-title-inner">
          <div class="container">
            <h3 class="pull-left">Témoignages</h3>
            <ul class="custom-list breadcrumbs pull-right">
              <li><a href="/">Accueil</a></li>
              <li><a href="#">Témoignages</a></li>
            </ul>
          </div>
        </div>
        <!-- End Header-Title-Inner -->

    </header>
    <!-- End Header -->
<!-- Start Customers -->
<section class="customers">
      <div class="container">
        <div class="row">
          <!-- Start Preamble -->
          <div class="col-lg-12 preamble">
            <h3>Nos clients parlent de notre Conciergerie – Le Mono Services</h3>
            <img src="img/divisor.png" alt="" class="divisor">
            <p>Des clients satisfaits, il n’y a rien de mieux. Pour leur avoir offert des services en : Organisation, recherche, réservation, dégustation, location … pour des évènements, des voyages, des démarches administratives, des envois de colis, la restauration</p>
          </div>
          <!-- End Preamble -->
        
          <!-- Start Customers-List -->
          <div class="col-lg-12">
            <ul class="custom-list customers-list layout-list">
              @foreach($temoignages as $temoignage)
              <li class="customer-testimonial">
                <!-- <div class="logo">
                  <img src="img/customer-logo.png" alt="">
                </div> -->
                <div class="content customer-testimonial-content">
                  <header class="customer-testimonial-header">
                    <h5>{{$temoignage->nom}}</h5>
                    <span>{{$temoignage->fonction}}</span>
                  </header>
                  <blockquote>{!!$temoignage->description!!}</blockquote>
                </div>
              </li>
             @endforeach
            </ul>
          </div>
          <!-- End Customers-List -->

        </div>
      </div>
    </section>
    <!-- End Customers -->

    @endsection