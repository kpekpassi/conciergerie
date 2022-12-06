@extends('master.entete')
@section('title')
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Des partenaires sérieux et soucieux de la satisfaction de nos clients œuvrent au quotidien à nos côtés pour vous">
<meta name="keywords" content="">
<meta property="og:title" content="Les partenaires de la conciergerie Le Mono Services">
<meta property="og:site_name" content="">
<meta property="og:url" content="{{ url('/nos-partenaires-pour-la-conciergerie')}}">
<meta property="og:description" content="Des partenaires sérieux et soucieux de la satisfaction de nos clients œuvrent au quotidien à nos côtés pour vous">
<meta property="og:type" content="website">
<meta property="og:image" content="">
<meta name="twitter:site" content="">
<meta name="twitter:title" content="Les partenaires de la conciergerie Le Mono Services">
<meta name="twitter:image" content="">
<meta name="twitter:description" content="Des partenaires sérieux et soucieux de la satisfaction de nos clients œuvrent au quotidien à nos côtés pour vous">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <title>Les partenaires de la conciergerie Le Mono Services</title>
@endsection

      @section('header')
      <header id="header" class="triangle header-title news">
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


          </div>
        </div>

      </div>
      <!-- End Banner -->
<!-- Start Header-Title-Inner -->
       <div class="header-title-inner">
          <div class="container">
            <h3 class="pull-left">Nos partenaires </h3>
            <ul class="custom-list breadcrumbs pull-right">
              <li><a href="/">Accueil</a></li>
              <li><a href="#">Nos partenaires </a></li>
            </ul>
          </div>
        </div>
        <!-- End Header-Title-Inner -->

    </header>
    <!-- End Header -->

    <!-- Start Essentials -->
    <section id="essentials">
      <div class="container">
          
         <!-- Start Preamble -->
         <div class="col-lg-12 preamble">
            <h3>Des partenaires fiables nous accompagnent – Le Mono Services</h3>
            <img src="img/divisor.png" alt="">
            <p>Etant une conciergerie, c’est avec des dizaines de partenaires repartis dans plusieurs pays et villes et appartenant à une dizaine de secteurs d’activités que nous travaillons pour vous vous fournir tous nos services et vous garantir le meilleur au quotidien.</p>
            </br>
          </div>
          <!-- End Preamble -->

          <!-- Start Tabs-Container -->
          <div class="tabs-container essentials-tabs-container">
            <ul class="custom-list tab-title-list">
              <li class="tab-title active"><a href="#maps">Nos partenaires</a></li>
              <li class="tab-title"><a href="#fleets">Devenir partenaires</a></li>
            </ul>
            <ul class="custom-list tab-content-list">

              <!-- Start Map -->
              <li class="tab-content active">
                <!-- Start Fleet Filters -->
                <ul class="custom-list fleet-filters clearfix">
                  <li><a href="#" class="btn dark active" data-filter="*">Tous</a></li>
                  <li><a href="#" class="btn dark" data-filter=".transport">Transport</a></li>
                  <li><a href="#" class="btn dark" data-filter=".restauration">Restauration</a></li>
                  <li><a href="#" class="btn dark" data-filter=".travaux">Travaux</a></li>
                  <li><a href="#" class="btn dark" data-filter=".magasin">Magasins</a></li>
                  <li><a href="#" class="btn dark" data-filter=".supermarche">Supermarché</a></li>
                  <li><a href="#" class="btn dark" data-filter=".evenementiel">Événementiel</a></li>
                  <li><a href="#" class="btn dark" data-filter=".logement">Logement</a></li>
                </ul>
                <!-- End Fleet Filters -->

                <!-- Start Fleet Gallery -->
                <ul class="custom-list fleet-gallery isotope">
                  @foreach($transports as $transport)
                  <li class="transport">
                    <div class="overlay">
                      <img src="/{{$transport->logo}}" alt="">
                      <cite>{{$transport->raison_sociale}}</cite>
                      <div class="overlay-shadow">
                        <div class="overlay-content">
                          <a href="/{{$transport->logo}}" class="lightbox" data-lightbox-group="fleet-gallery">
                          <i class="fa fa-search"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </li>
                  @endforeach
                  @foreach($restaurations as $restauration)
                  <li class="restauration">
                    <div class="overlay">
                      <img src="/{{$restauration->logo}}" alt="">
                      <cite>{{$restauration->raison_sociale}}</cite>
                      <div class="overlay-shadow">
                        <div class="overlay-content">
                          <a href="/{{$restauration->logo}}" class="lightbox" data-lightbox-group="fleet-gallery">
                          <i class="fa fa-search"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </li>
                  @endforeach
                  @foreach($travaux as $trav)
                  <li class="travaux">
                    <div class="overlay">
                      <img src="/{{$trav->logo}}" alt="">
                      <cite>{{$trav->raison_sociale}}</cite>
                      <div class="overlay-shadow">
                        <div class="overlay-content">
                          <a href="/{{$trav->logo}}" class="lightbox" data-lightbox-group="fleet-gallery">
                            <i class="fa fa-search"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </li>
                  @endforeach
                  @foreach($magasins as $magasin)
                  <li class="magasin">
                    <div class="overlay">
                      <img src="/{{$magasin->logo}}" alt="">
                      <cite>{{$magasin->raison_sociale}}</cite>
                      <div class="overlay-shadow">
                        <div class="overlay-content">
                          <a href="/{{$magasin->logo}}" class="lightbox" data-lightbox-group="fleet-gallery">
                            <i class="fa fa-search"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </li>
                  @endforeach
                  @foreach($supermarches as $supermarche)
                  <li class="supermarche">
                    <div class="overlay">
                      <img src="/{{$supermarche->logo}}" alt="" style="widht:200px;height:200px">
                      <cite>{{$supermarche->raison_sociale}}</cite>
                      <div class="overlay-shadow">
                        <div class="overlay-content">
                          <a href="/{{$supermarche->logo}}" class="lightbox" data-lightbox-group="fleet-gallery">
                            <i class="fa fa-search"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </li>
                  @endforeach
                  @foreach($logements as $logement)
                  <li class="logement">
                    <div class="overlay">
                      <img src="/{{$logement->logo}}" alt="" style="widht:200px;height:200px">
                      <cite>{{$logement->raison_sociale}}</cite>
                      <div class="overlay-shadow">
                        <div class="overlay-content">
                          <a href="/{{$logement->logo}}" class="lightbox" data-lightbox-group="fleet-gallery">
                            <i class="fa fa-search"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </li>
                  @endforeach
                  @foreach($evenementiels as $evenementiel)
                  <li class="evenementiel">
                    <div class="overlay">
                      <img src="/{{$evenementiel->logo}}" alt="" style="widht:200px;height:200px">
                      <cite>{{$evenementiel->raison_sociale}}</cite>
                      <div class="overlay-shadow">
                        <div class="overlay-content">
                          <a href="/{{$evenementiel->logo}}" class="lightbox" data-lightbox-group="fleet-gallery">
                            <i class="fa fa-search"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </li>
                  @endforeach
                </ul>
                <!-- End Fleet Gallery -->
              </li> 
              <!-- End Map -->

              <!-- Start Fleet Items -->
              <li class="tab-content">
                   <form  method="POST" action="{{route('enregistrer.partenaire')}}" enctype="multipart/form-data" class="default-form">
                   @csrf
                      <div class="row">
                        <div class="col-lg-4 col-md-4">
                          <p class="form-row">
                            <input class="required" required="" value="{{old('nom')}}" name="nom" type="text" placeholder="Nom complet">
                          </p>
                        </div>
                        &nbsp;
                        <div class="col-lg-4 col-md-4">
                          <p class="form-row">
                            <input class="required" required="" value="{{old('fonction')}}" name="fonction" type="text" placeholder="Fonction occupée">
                          </p>
                        </div>
                        &nbsp;
                        <div class="col-lg-3 col-md-4">
                          <p class="form-row">
                            <input class="required" required="" value="{{old('raison')}}" name="raison" type="text" placeholder="Raison sociale">
                          </p>
                        </div>
                      </div>
                     </br>
                      <div class="row">
                        <div class="col-lg-4 col-md-4">
                          <p class="form-row">
                            <input class="required" required="" value="{{old('adresse')}}" name="adresse" type="text" placeholder="Adresse">
                          </p>
                        </div>
                        &nbsp;
                        <div class="col-lg-4 col-md-4">
                          <p class="form-row">
                            <input class="required" required="" value="{{old('telephone')}}" name="telephone" type="text" placeholder="Telephone">
                          </p>
                        </div>
                        &nbsp;
                        <div class="col-lg-3 col-md-4">
                          <p class="form-row">
                            <input class="required form-control" required="" value="{{old('email')}}" name="email" type="email" style="height:50px" placeholder="Email">
                          </p>
                        </div>
                      </div>
                     </br>
                      <div class="row">
                        <div class="col-lg-4 col-md-4">
                          <p class="form-row">
                            <input class="required" required="" value="{{old('ville')}}" name="ville" type="text" placeholder="Ville">
                          </p>
                        </div>
                        &nbsp;
                        <div class="col-lg-4 col-md-4">
                          <p class="form-row">
                            <input class="required" required="" value="{{old('pays')}}" name="pays" type="text" placeholder="Pays">
                          </p>
                        </div>
                        &nbsp;
                        <div class="col-lg-3 col-md-4">
                          <p class="form-row">
                            <input class="required"  name="site" value="{{old('site')}}" type="text" placeholder="Site web">
                          </p>
                        </div>
                      </div>
                     </br>
                     <div class="row">
                        <div class="col-lg-4 col-md-4">
                          <p class="form-row">
                            <!-- <input class="required" type="text" placeholder="Categorie"> -->
                              <select name="categorie">
                                <!-- <option> Choisissez la categorie </option> -->
                                @if(old('categorie'))
                                <option @if(old('categorie')) selected @endif value="{{old('categorie')}}"> {{old('categorie')}}</option>
                                @endif 
                                <option value="" disabled>Choisissez la categorie</option>
                                <option value="Recherche d’un restaurateur"> Recherche d’un restaurateur </option>
                                <option value="Achat d’objets rares"> Achat d’objets rares </option>
                                <option value="Epicerie fine"> Epicerie fine </option>
                                <option value="Séjour Clé en main"> Séjour Clé en main </option>
                                <option value="Evènementiel"> Evènementiel </option>
                                <option value="Cadeau VIP"> Cadeau VIP </option>
                                <option value="Travaux à domicile"> Travaux à domicile </option>
                                <option value="Réservation de billets"> Réservation de billets </option>
                                <option value="Location"> Location </option>
                                <option value="Démarches administratives"> Démarches administratives </option>
                                <option value="Envoi et récupération de colis"> Envoi et récupération de colis </option>
                              </select>

                          </p>
                        </div>
                        &nbsp;
                        <div class="col-lg-4 col-md-4">
                          <p class="form-row">
                              <select name="service" required="">
                                <!-- <option> Choisissez votre secteur </option> -->
                                @if(old('service'))
                                <option @if(old('service')) selected @endif value="{{old('service')}}"> {{old('service')}}</option> 
                                @endif
                                <option value="" disabled>Choisissez votre secteur</option>
                                <option value="transport">Transport </option>
                                <option value="restauration">Restauration</option>
                                <option value="travaux">Travaux</option>
                                <option value="magasins">Magasins</option>
                                <option value="supermarche">Supermarché</option>
                                <option value="evénementiel">Événementiel</option>
                                <option value="logement">Logement</option>
                              </select>
                          </p>
                        </div>
                        &nbsp;
                        <div class="col-lg-3 col-md-4">
                          <p class="form-row">
                            <input class="required"  required=""  value="{{old('commission')}}" name="commission" type="text" placeholder="Commission(%)">
                          </p>
                        </div>
                      </div>
                     </br>
                     <div class="row">
                        <div class="col-lg-6 col-md-6">
                          <p class="form-row">
                          <textarea style="height:180px" required="" name="avantage" placeholder="Avantages proposés">{{old('avantage')}}</textarea>
                          </p>
                        </div>
                        &nbsp;
                        <div class="col-lg-5 col-md-6">
                          <p class="form-row">
                          <textarea  style="height:180px" name="autre" placeholder="Autres informations utiles">{{old('autre')}}</textarea>
                          </p>
                        </div>
                      </div>
                     </br>
                     <div class="row">
                        <div class="col-lg-12 col-md-12">
                          <p class="form-row">
                          <input type="file" required="" class="form-control br border-none autocomplete="file" name="file" id="fonction" value="{{old('logo')}}" class="form-control">
                          </p>
                        </div>
                      </div>

                     </br></br>
                     <center><button class="btn dark">Envoyer</button></center>
                    </form>

              </li>
              <!-- End Fleet Items -->
              
            </ul>
          </div>
          <!-- End Tabs Container -->
              
      </div>
    </section>
    <!-- End Essentials -->
  
@endsection