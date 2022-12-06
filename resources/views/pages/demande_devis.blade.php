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
    <title>Demande de devis : Le Mono Services</title>
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
            <h3 class="pull-left">Demande de devis</h3>
            <ul class="custom-list breadcrumbs pull-right">
              <li><a href="/">Accueil</a></li>
              <li><a href="#">Demande de devis</a></li>
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
            <h3>Faites votre demande de devis en toute tranquillité</h3>
            <img src="img/divisor.png" alt="">
            <!-- <p>Etant une conciergerie, c’est avec des dizaines de partenaires repartis dans plusieurs pays et villes et appartenant à une dizaine de secteurs d’activités que nous travaillons pour vous vous fournir tous nos services et vous garantir le meilleur au quotidien.</p> -->
            </br>
          </div>
          <!-- End Preamble -->

          <!-- Start Tabs-Container -->
          <div class="tabs-container essentials-tabs-container">
            <ul class="custom-list tab-content-list">
               <!-- Start Fleet Items -->
              <li class="tab-content active">
                   <form  method="POST" action="{{route('envoyer.devis')}}" enctype="multipart/form-data" class="default-form">
                   @csrf
                      <div class="row">
                      <div class="col-lg-4 col-md-4">
                          <p class="form-row">
                            <!-- <input class="required" type="text" placeholder="Categorie"> -->
                              <select name="type" onchange="showDiv(this)">
                              <option value="" disabled>Type de profil</option>
                                @if(old('type'))
                                <option @if(old('type')) selected @endif value="{{old('type')}}">{{old('type')}}</option>
                                @endif 
                                <option value="Particulier">Particulier</option>
                                <option value="Entreprise">Entreprise</option>
                              </select>
                           </p>
                        </div>
                        &nbsp;
                        <div class="col-lg-4 col-md-4" id="hidden_tva" style="display:none">
                            <p class="form-row">
                              <input class="required" value="{{old('raison')}}" name="raison" type="text" placeholder="Raison sociale">
                            </p>
                        </div>
                        &nbsp;
                        <div class="col-lg-3 col-md-4">
                          <p class="form-row">
                            <select name="civilite">
                                @if(old('civilite'))
                                <option @if(old('civilite')) selected @endif value="{{old('civilite')}}"> {{old('civilite')}}</option>
                                @endif 
                                <option value="" disabled>Civilité</option>
                                <option value="Monsieur">Monsieur</option>
                                <option value="Madame">Madame</option>
                              </select>
                          </p>
                        </div>
                      </div>
                     </br>
                      <div class="row">
                      <div class="col-lg-4 col-md-4">
                          <p class="form-row">
                          <input class="required" required="" value="{{old('nom')}}" name="nom" type="text" placeholder="Nom complet">
                          </p>
                        </div>
                        &nbsp;
                        <div class="col-lg-4 col-md-4">
                          <p class="form-row">
                            <input class="required" required="" value="{{old('ville')}}" name="ville" type="text" placeholder="Ville">
                          </p>
                        </div>
                        &nbsp;
                        <div class="col-lg-3 col-md-4">
                          <p class="form-row">
                            <input class="required" required="" value="{{old('pays')}}" name="pays" type="text" placeholder="Pays">
                          </p>
                        </div>
                      </div>
                      </br>
                      <div class="row">
                        <div class="col-lg-4 col-md-4">
                          <p class="form-row">
                            <input class="required form-control" required="" value="{{old('email')}}" name="email" type="email" placeholder="Email" style="height:50px">
                          </p>
                        </div>
                        &nbsp;&nbsp;
                        <div class="col-lg-4 col-md-4">
                          <p class="form-row">
                            <input class="required" required="" value="{{old('telephone')}}" name="telephone" type="text" placeholder="Telephone">
                          </p>
                        </div>
                        &nbsp;&nbsp;
                        <div class="col-lg-3 col-md-4">
                          <p class="form-row">
                            <input class="required"  name="service" value="{{old('service')}}" type="text" placeholder="Service">
                          </p>
                        </div>
                      </div>
                     </br>
                     <div class="row">
                        <div class="col-lg-6 col-md-6">
                          <p class="form-row">
                          <textarea style="height:180px" required="" name="besoin" placeholder="Exprimer votre besoin">{{old('besoin')}}</textarea>
                          </p>
                        </div>
                        &nbsp;&nbsp;
                        <div class="col-lg-5 col-md-6">
                          <p class="form-row">
                          <textarea  style="height:180px" name="contrainte" placeholder="Contrainte particuliere">{{old('contrainte') }}</textarea>
                          </p>
                        </div>
                      </div>
                     </br>

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
  
    <script>
   function showDiv(select){
   if(select.value=='Entreprise'){
    document.getElementById('hidden_tva').style.display = "block";
   } else{
    document.getElementById('hidden_tva').style.display = "none";
   }
}
</script>

@endsection