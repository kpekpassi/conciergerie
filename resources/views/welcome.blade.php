@extends('master.entete')
@section('title')
<title>Votre Conciergerie Privée et d’Entreprise Multiservices en France et au Togo – Le Mono Services</title>
<meta name="title" content=" Votre Conciergerie Privée et d’Entreprise Multiservices en France et au Togo – Le Mono Services">
<meta name="description" content="Gagnez du temps en nous confiant des tâches d’organisation d’évènement, de réservation de salles, voitures, billets, tickets… Confiez-nous l’envoi et la récupération de vos colis ainsi que vos démarches administratives.">
<meta name="keywords" content="">
<meta property="og:title" content="">
<meta property="og:site_name" content="">
<meta property="og:url" content="">
<meta property="og:description" content="Gagnez du temps en nous confiant des tâches d’organisation d’évènement, de réservation de salles, voitures, billets, tickets… Confiez-nous l’envoi et la récupération de vos colis ainsi que vos démarches administratives.">
<meta property="og:type" content="website">
<meta property="og:image" content="">
<meta name="twitter:site" content="">
<meta name="twitter:title" content="Votre Conciergerie Privée et d’Entreprise Multiservices en France et au Togo – Le Mono Services">
<meta name="twitter:image" content="">
<meta name="twitter:description" content="Gagnez du temps en nous confiant des tâches d’organisation d’évènement, de réservation de salles, voitures, billets, tickets… Confiez-nous l’envoi et la récupération de vos colis ainsi que vos démarches administratives.">

@endsection

      @section('header')
      <header id="header" class="triangle">
      @endsection

      @section('slide')
        <div class="banner-bg">
          <div class="banner-bg-item"><img src="{{asset('img/banner-bg-1.jpg')}}" alt=""></div>
          <div class="banner-bg-item"><img src="{{asset('img/banner-bg-2.jpg')}}" alt=""></div>
          <div class="banner-bg-item"><img src="{{asset('img/banner-bg-3.jpg')}}" alt=""></div>
          <div class="banner-bg-item"><img src="{{asset('img/banner-bg-4.jpg')}}" alt=""></div>
        </div>
      @endsection


@section('content')

@if(Session::has('mess'))
<script>
    Swal.fire(
        'Parfait', 
        '{{session("mess")}}',
        'success'
        )
</script>
@endif

@if(Session::has('error'))
<script>
    Swal.fire(
        'Echec', 
        '{{session("error")}}',
        'error'
        )
</script>
@endif

<div class="css-table">
          <div class="css-table-cell">

            <!-- Start Banner-Search -->
            
            <div class="banner-search">
              <div class="container">
                  <div id="hero-tabs" class="banner-search-inner">
                    <ul class="custom-list tab-title-list clearfix">
                      <li class="tab-title active"><a href="#yachts">Sejour clé en main</a></li>
                      <li class="tab-title"><a href="#privjet">Reservation</a></li>
                      <li class="tab-title"><a href="#luxcars">Evenementiel</a></li>
                      <li class="tab-title"><a href="#cartrans">Envoi colis</a></li>
                    </ul>
                    <ul class="custom-list tab-content-list">

                      <!-- Start Yachts -->
                      <li class="tab-content active">
                        <form method="POST" action="{{route('envoyer.devis.express')}}" class="default-form">
                         @csrf
                          <span class="hire-input ">
                            <input type="text" required="" name="ville_depart" placeholder="Ville de depart">
                          </span>
                          <span class="return-input ">
                            <input type="text" required="" name="ville_arrive" placeholder="Ville d'arrivée" >
                          </span>
                          &nbsp;&nbsp;&nbsp;
                          <span class="hire-input calendar">
                            <input type="text" required="" name="date_depart" placeholder="Date de depart" data-dateformat="dd/mm/yy"> 
                            <i class="fa fa-calendar"></i>
                          </span>
                          <span class="return-input calendar">
                            <input type="text" required="" name="date_arrive" placeholder="Date d'arrivée" data-dateformat="dd/mm/yy"> 
                            <i class="fa fa-calendar"></i>
                          </span>
                          <span class="model select-box">
                            <select name="nombre_pers" data-placeholder="Nbr de pers" required="">
                              <option>Nbr de pers</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                            </select>
                          </span>
                          <input type="hidden" name="type_service" value="Sejour clé en main"> 
                          <span class="submit-btn">
                            <button class="btn light" type="cancel" data-toggle="modal" data-target="#role">Envoyer</button>
                            <!-- <a href="#">Advanced Search</a> -->
                          </span>
                          <!-- @include('pages/modal_info') -->
                        </form>
                      </li>
                      <!-- End Yachts -->

                      <!-- Start Privjet -->
                      <li class="tab-content">
                       <form method="POST" action="{{route('envoyer.devis.express')}}" class="default-form">
                         @csrf
                          <span class="hire-input ">
                            <input type="text" required="" name="lieu_depart" placeholder="Lieu de depart">
                          </span>
                          <span class="hire-input ">
                            <input type="text"  required="" name="lieu_arrive" placeholder="Lieu d'arrivé">
                          </span>
                          <span class="hire-input calendar">
                            <input type="text"  required="" name="date_depart" placeholder="Date de depart" data-dateformat="dd/mm/yy"> 
                            <i class="fa fa-calendar"></i>
                          </span>
                          <span class="hire-input calendar">
                            <input type="text"  required="" name="date_arrive" placeholder="Date d'arrivée" data-dateformat="dd/mm/yy"> 
                            <i class="fa fa-calendar"></i>
                          </span>
                          <span class="point-a select-box">
                             <select name="type_reservation"  required="" data-placeholder="Type de réservation">
                              <option>Type de réservation</option>
                              <option value="Billet d'avion">Billet d'avion</option>
                              <option value="Billet de train">Billet de train</option>
                              <option value="Billet de fery">Billet de fery</option>
                              <option value="Billet de fery">Autre</option>
                            </select>
                          </span>
                          <span class="point-b select-box">
                             <select name="nombre_pers"  required="" data-placeholder="Nbr de pers">
                              <option>Nbr de pers</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                            </select>
                          </span>
                          <input type="hidden" name="type_service" value="Reservation"> 
                          <span class="submit-btn">
                            <button class="btn light" type="cancel" data-toggle="modal" data-target="#role1">Envoyer</button>
                            <!-- <a href="#">Advanced Search</a> -->
                          </span>
                          <!-- @include('pages/modal/modal_info1') -->
                        </form>
                      </li>
                      <!-- End Privjet -->

                      <!-- Start Luxcars -->
                      <li class="tab-content">
                       <form method="POST" action="{{route('envoyer.devis.express')}}" class="default-form">
                         @csrf
                          <span class="where-input">
                            <input type="text" placeholder="Lieu" required="" name="lieu">
                          </span>
                          <span class="hire-input calendar">
                            <input type="text" placeholder="Date debut" required=""  name="date_depart"  data-dateformat="dd/mm/yy">
                            <i class="fa fa-calendar"></i>
                          </span>
                          <span class="return-input calendar">
                            <input type="text" placeholder="Date fin" required=""  name="date_arrive" data-dateformat="dd/mm/yy">
                            <i class="fa fa-calendar"></i>
                          </span>
                          <span class="model select-box">
                            <select name="type_evenement" required=""   required="" data-placeholder="Type">
                              <option>Type d'evenement</option>
                              <option value="Concert">Concert</option>
                              <option value="Formation">Formation</option>
                              <option value="Buffé">Buffé</option>
                              <option value="Conference">Conference</option>
                            </select>
                          </span>
                          <input type="hidden" name="type_service" value="Evenementiel"> 
                          <span class="submit-btn">
                            <button class="btn light" type="cancel" data-toggle="modal" data-target="#role2">Envoyer</button>
                            <!-- <a href="#">Advanced Search</a> -->
                          </span>
                          <!-- @include('pages/modal/modal_info2') -->
                        </form>
                      </li>
                      <!-- End Luxcars -->

                      <!-- Start Car-trans -->
                      <li class="tab-content">
                      <form method="POST" action="{{route('envoyer.devis.express')}}" class="default-form">
                         @csrf
                          <span class="hire-input ">
                            <input type="text" required="" name="lieu_depart" placeholder="Lieu de depart">
                          </span>
                          <span class="hire-input ">
                            <input type="text" required="" name="lieu_arrive" placeholder="Lieu d'arrivée">
                          </span>
                          <span class="hire-input calendar">
                            <input type="text" required="" name="date_envoi" placeholder="Date d'envoi" data-dateformat="dd/mm/yy"> 
                            <i class="fa fa-calendar"></i>
                          </span>
                          <span class="hire-input calendar">
                            <input type="text" required="" name="date_arrive" placeholder="Date d'arrivée'" data-dateformat="dd/mm/yy"> 
                            <i class="fa fa-calendar"></i>
                          </span>
                          <span class="hire-input ">
                            <input type="text" required="" name="poids" placeholder="Poids">
                          </span>
                          <input type="hidden" name="type_service" value="Envoi colis"> 
                          <span class="submit-btn">
                            <button class="btn light" type="cancel" data-toggle="modal" data-target="#role3">Envoyer</button>
                            <!-- <a href="#">Advanced Search</a> -->
                          </span>
                          <!-- @include('pages/modal/modal_info3') -->
                        </form>
                      </li>
                      <!-- End Car-trans -->

                    </ul>
                </div>
              </div>
            </div>
            
            <!-- End Banner-Search -->

          </div>
        </div>

      </div>
      <!-- End Banner -->

    </header>
    <!-- End Header -->

    <!-- Start About -->
    <section class="about">
      <div class="container">
        <div class="row">

          <!-- Start Preamble -->
          <div class="col-lg-12 preamble">
            <h3>A propos de la conciergerie Le Mono Services</h3>
            <img src="img/divisor.png" alt="" class="divisor">
            <p>A clients exceptionnels, services exceptionnels. Le Mono Services est une conciergerie qui s’adresse à une clientèle désireuse de disposer pleinement de son temps en déléguant certaines tâches quotidiennes ou exceptionnelles (commandes, réservations, organisations, etc.) à un professionnel. Nos concierges mettent donc toute leur expertise pour répondre à tous vos besoins, quel qu’ils soient, avec discrétion et rapidité. Grâce à un large réseau de partenaires, minutieusement sélectionnés pour leur professionnalisme et la qualité de leurs services, nous ferons tout pour vous satisfaire. </p>
          </div>
          <!-- End Preamble -->

          <div class="col-lg-3 col-md-3 col-sm-6 feature text-center">
            <div class="overlay">
              <img src="img/about1.png" alt="">
              <!-- <div class="overlay-shadow">
                <div class="overlay-content">
                  <a href="#" class="btn light">Read More</a>
                </div>
              </div> -->
            </div>
            <h5>Des Services…</h5>
            <p>Des services personnalisés et exécutés avec la plus grande discrétion, rapidité et professionnalisme.</p>
          </div>
          
          <div class="col-lg-3 col-md-3 col-sm-6 feature text-center">
            <div class="overlay">
              <img src="img/about2.png" alt="">
              <!-- <div class="overlay-shadow">
                <div class="overlay-content">
                  <a href="#" class="btn light">Read More</a>
                </div>
              </div> -->
            </div>
            <h5>Des Partenaires…</h5>
            <p>Des partenaires fiables minutieusement sélectionnés pour leurs valeurs et la qualité de leurs services.</p>
          </div>

         <div class="col-lg-3 col-md-3 col-sm-6 feature text-center">
            <div class="overlay">
              <img src="img/about3.png" alt="">
              <!-- <div class="overlay-shadow">
                <div class="overlay-content">
                  <a href="#" class="btn light">Read More</a>
                </div>
              </div> -->
            </div>
            <h5>Des Equipes…</h5>
            <p>Des équipes professionnelles à l’écoute, conscientes des enjeux et toujours prêtes à faire plus pour vous.</p>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-6 feature text-center">
            <div class="overlay">
              <img src="img/about4.png" alt="">
              <!-- <div class="overlay-shadow">
                <div class="overlay-content">
                  <a href="#" class="btn light">Read More</a>
                </div>
              </div> -->
            </div>
            <h5>Des Outils...</h5>
            <p>Des outils de pointe et innovants pour vous offrir le confort et le luxe nécessaire à votre satisfaction.</p>
          </div>

        </div>
      </div>
    </section>
    <!-- End About -->
    
    <!-- Start Testimonials -->
    <section class="testimonials">

      <!-- Start Video Background -->
      <div id="video_testimonials" data-vide-bg="video/ocean" data-vide-options="position: 0% 50%"></div>
      <div class="video_gradient"></div>
      <!-- End Video Background -->

      <div class="container">
        <div class="row">

          <!-- Start Preamble -->
          <div class="preamble">
            <h3>Témoignages</h3>
            <img src="img/divisor2.png" alt="" class="divisor">
          </div>
          <!-- End Preamble -->

          <div id="owl-testimonials" class="owl-carousel owl-theme">
           @foreach($temoignages as $temoignage)
            <!-- Start Item -->
            <div class="item">
              <blockquote class="quote">
                <cite>{{$temoignage->nom}}<span class="job">{{$temoignage->fonction}}</span></cite>
                <p class="stars">
                  <!-- <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i> -->
                </p>
                {!!$temoignage->description!!}
              </blockquote>
            </div>
            <!-- End Item -->
           @endforeach  
          </div>

        </div>
      </div>
    </section>
    <!-- End Testimonials -->

    <!-- Start Supertabs -->
    <section class="supertabs">
      <div class="container">
        <div class="row">

          <!-- Start Tabs-Navigation -->
          <div class="col-lg-4 col-md-4 tabs-navigation">
            <ul class="custom-list tab-title-list">
              <li data-href="#fleet">
                <h5>Comptez sur notre </h5>
                <p>Disponibilité et notre Rapidité</p>
              </li>
              <li data-href="#drivers">
                <h5>Avec nous, ça sera </h5>
                <p>Discrétion et Confidentialité</p>
              </li>
              <li data-href="#ourlocs">
                <h5>Et toujours avec </h5>
                <p>Expertise et professionnalisme </p>
              </li>
            </ul>
          </div>
          <!-- End Tabs-Navigation -->

          <div class="clearfix visible-sm visible-xs"></div>

          <!-- Start Tabs-Content -->
          <div class="col-lg-8 col-md-8 tabs-content">
            <ul class="custom-list tab-content-list">

              <!-- Start Fleet -->
              <li id="fleet" data-bgimage="img/supertabs3.png">
                <div class="heading">
                  <h5>Comptez sur notre </h5>
                  <p>Disponibilité et notre Rapidité</p>
                </div>
                <cite>Nous traitons vos demandes de devis en moins de 30 minutes. En plus, grâce à notre application mobile et au système de tchat intégré, notre proximité et disponibilité vous éviteront de perdre du temps.</cite>  
              </li>
              <!-- End Fleet -->

              <!-- Start Drivers -->
              <li id="drivers" data-bgimage="img/supertabs2.png">
                <div class="heading">
                  <h5>Avec nous, ça sera </h5>
                  <p>Discrétion et Confidentialité</p>
                </div>
                <cite>Vous n’avez pas à vous inquiétez pour votre vie privée ou pour vos projets non publics. En vous rendant service, nous tâcherons à faire preuve de la plus grande discrétion et de la plus grande confidentialité.</cite>  
              </li>
              <!-- End Drivers -->

              <!-- Start Ourlocs -->
              <li id="ourlocs" data-bgimage="img/supertabs1.png">
                <div class="heading">
                  <h5>Et toujours avec </h5>
                  <p>Expertise et professionnalisme </p>
                </div>
                <cite>Nous avons compris de part nos années d’expérience que la disponibilité et la discrétion ne suffisent pas pour une conciergerie qui s’adresse à vous. Nos équipes sont bien formées dans ce sens.</cite>    
              </li>          
              <!-- End Ourlocs -->

            </ul>
          </div>
          <!-- End Tabs-Content -->

        </div>
      </div>
    </section>
    <!-- End Supertabs -->

    <!-- Start Partners -->
    <section class="partners">
      <div class="container">
        <div class="row">

          <!-- Start Preamble -->
          <div class="col-lg-12 preamble">
            <h5>Nos Partenaires</h5>
          </div>
          <!-- End Preamble -->
         @foreach($partenaires as $partenaire)
          <!-- Start Partner -->
          <div class="col-lg-3 col-md-3 col-sm-3 company">
            <a href="{{route('partenaire')}}"><img src="/{{$partenaire->logo}}" alt="" height="100px" width="170px"></a>
          </div>
          <!-- End Partner -->
        @endforeach
        </div>
      </div>
    </section>
    <!-- End Partners -->
    @endsection