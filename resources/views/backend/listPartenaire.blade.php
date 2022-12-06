@extends('master.header_admin')
@php
$active ='listePartenaire'
@endphp
@section('styles')
<link rel="stylesheet" href="sweetalert2.min.css">
@endsection
@section('contentAdmin')
<div class="container-fluid p-0 m-0">

    <div class="container-fluid br bg-white  p-0 shadow-sm" style="overflow: hidden;">
        <div class="px-4 py-1 bg-bou-claire">
            <div class="container-fluid text-left">
                <h6 class=" text-uppercase blockTitle" style="font-weight: bold;color: #fff;"> Liste des partenaires</h6>
            </div>
        </div>
        <div class="px-3 px-sm-5 py-4">


            <table class="table  table-bordered table-responsive">
                <thead>
                    <tr>
                        <th scope="col">Logo</th>
                        <th scope="col">Nom et Prénom</th>
                        <th scope="col">Fonction occupée</th>
                        <th scope="col">Raison sociale</th>
                        <th scope="col">Telephone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="text-start">
                   @foreach($partenaires as $partenaire)
                    <tr class="">
                        <td><img src="/{{$partenaire->logo}}" alt="logo" width="80px" height="80px"></td>
                        <td>{{$partenaire->nom}}</td>
                        <td>{{$partenaire->fonction}}</td>
                        <td>{{$partenaire->raison_sociale}}</td>
                        <td>{{$partenaire->telephone}}</td>
                        <td>{{$partenaire->email}}</td>
                        <td>
                            <div class="d-flex mt-3 p-0 justify-content-end">
                            <a href="" class="btn btn-primary listbtn br" data-bs-toggle="modal" data-bs-target="#apercuModal{{$partenaire->id_partenaire}}">Aperçu</a>
                            &nbsp;&nbsp;
                            @if($partenaire->etat !=1)
                            <a class="btn btn-warning listbtn br" id="valider-supp{{$partenaire->id_partenaire}}" onclick="return validerPartenaire({{$partenaire->id_partenaire}})" href="{{route('valider.partenaire', $partenaire->id_partenaire)}}" type="button">Valider</a>
                            @endif
                            </div>
                           
                        </td>
                    </tr>

                    <!-- =============================Modal Part=============================================================== -->
<div class="modal fade" id="apercuModal{{$partenaire->id_partenaire}}" tabindex="-1"  aria-labelledby="apercuModal{{$partenaire->id_partenaire}}Label" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header pt-0">
                                            <h5 class="modal-title fs-2" id="apercuModal{{$partenaire->id_partenaire}}Label">{{$partenaire->raison_sociale}}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body px-0 py-4">
                                            <div class="row">
                                                <div class="col-md-3">
                                                 <h3 class="mb-0 text-bou-claire ">Nom complet</h3>
                                                  <p class="mt-0 text-cafe text-justify text-flex">{{$partenaire->nom}}</p>
                                                </div>
                                                <div class="col-md-3">
                                                 <h3 class="mb-0 text-bou-claire ">Fonction occupee</h3>
                                                  <p class="mt-0 text-cafe text-justify text-flex">{{$partenaire->fonction}}</p>
                                                </div>
                                                <div class="col-md-3">
                                                 <h3 class="mb-0 text-bou-claire ">Email</h3>
                                                  <p class="mt-0 text-cafe text-justify text-flex">{{$partenaire->email}}</p>
                                                </div>
                                                <div class="col-md-3">
                                                 <h3 class="mb-0 text-bou-claire ">Telephone</h3>
                                                  <p class="mt-0 text-cafe text-justify text-flex">{{$partenaire->telephone}}</p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                 <h3 class="mb-0 text-bou-claire ">Adresse</h3>
                                                  <p class="mt-0 text-cafe text-justify text-flex">{{$partenaire->adresse}}</p>
                                                </div>
                                                <div class="col-md-3">
                                                 <h3 class="mb-0 text-bou-claire ">Ville</h3>
                                                  <p class="mt-0 text-cafe text-justify text-flex">{{$partenaire->ville}}</p>
                                                </div>
                                                <div class="col-md-3">
                                                 <h3 class="mb-0 text-bou-claire ">Pays</h3>
                                                  <p class="mt-0 text-cafe text-justify text-flex">{{$partenaire->pays}}</p>
                                                </div>
                                                <div class="col-md-3">
                                                 <h3 class="mb-0 text-bou-claire ">Site web</h3>
                                                  <p class="mt-0 text-cafe text-justify text-flex">{{$partenaire->site_web}}</p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                 <h3 class="mb-0 text-bou-claire ">Categorie</h3>
                                                  <p class="mt-0 text-cafe text-justify text-flex">{{$partenaire->categorie}}</p>
                                                </div>
                                                <div class="col-md-3">
                                                 <h3 class="mb-0 text-bou-claire ">Service offert</h3>
                                                  <p class="mt-0 text-cafe text-justify text-flex">{{$partenaire->service_offert}}</p>
                                                </div>
                                                <div class="col-md-3">
                                                 <h3 class="mb-0 text-bou-claire ">Commission</h3>
                                                  <p class="mt-0 text-cafe text-justify text-flex">{{$partenaire->commission}}</p>
                                                </div>
                                                <div class="col-md-3">
                                                 <h3 class="mb-0 text-bou-claire ">Avantages proposés</h3>
                                                  <p class="mt-0 text-cafe text-justify text-flex">{{$partenaire->avantange}}</p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                 <h3 class="mb-0 text-bou-claire ">Autre informations</h3>
                                                  <p class="mt-0 text-cafe text-justify text-flex">{{$partenaire->autre_info}}</p>
                                                </div>
                                            </div>


                                        </div>
                                </div>
                            </div>
<!-- =============================End Modal Part=============================================================== -->
                   @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>


<style>
    .br {
        border-radius: 6px !important;
    }

    .form-group label {
        color: #8D8D8D;
    }

    .videoLink {
        border-radius: 10px;
        background: #FF116C;
        box-shadow: 0px 5px 7px #FF97BA,
            -1px -1px 10px #DFDFDF;
        color: white;
    }

    .imageLink {
        border-radius: 10px;
        background: #F6D40F;
        box-shadow: 0px 5px 7px #FDE55D,
            -1px -1px 10px #DFDFDF;
        color: #fff;

    }

    .entrep {
        display: none
    }

    /* =======Circular chex box=================== */
    .round {
        position: relative;
    }

    .round label {
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 50%;
        cursor: pointer;
        height: 28px;
        left: 0;
        position: absolute;
        top: 0;
        width: 28px;
    }

    .round label:after {
        border: 2px solid #fff;
        border-top: none;
        border-right: none;
        content: "";
        height: 6px;
        left: 7px;
        opacity: 0;
        position: absolute;
        top: 8px;
        transform: rotate(-45deg);
        width: 12px;
    }

    .round input[type="checkbox"] {
        visibility: hidden;
    }

    .round input[type="checkbox"]:checked+label {
        background-color: #66bb6a;
        border-color: #66bb6a;
    }

    .round input[type="checkbox"]:checked+label:after {
        opacity: 1;
    }

    /* =========================================== */
    #btnSave {
        display: none
    }

    .terrain {
        display: none;
    }

    .blockTitle {
        font-size: 1.5rem;
    }

    td {
        max-width: 40rem !important;
        white-space: wrap !important;
        align-items: center;
    }

    tr {
        white-space: normal !important;
    }

    .modal {
        border: none !important
    }

    tr.publie {
        background-color: #BDBDBD42;
    }
</style>
@endsection
@section('scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    function validerPartenaire(id){
   event.preventDefault();
     Swal.fire({
    title: 'Êtes vous sur de vouloir valider ce partenariat ?',
    text: "Cette action est irréversible",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#D63030',
    cancelButtonColor: '#797979E3',
    confirmButtonText: 'Oui, validé!',
    cancelButtonText: 'Annuler'
  }).then((result) => {
    if (result.isConfirmed) {
      var href = $('#valider-supp'+id).attr('href');
      window.location.href = href; 
      Swal.fire(
        'Partenariat validé!',
        'Validation effectuée avec succès.',
        'success'
      )
    }

  })
}

</script>
@endsection