@extends('master.header_admin')
@php
$active ='listeDevisExpress'
@endphp
@section('styles')
<link rel="stylesheet" href="sweetalert2.min.css">
@endsection
@section('contentAdmin')
@if (Session::has('mess'))
<script>
    Swal.fire(
        'Parfait', 
        '{{session("mess")}}',
        'success'
        )
</script>
@endif
<div class="container-fluid p-0 m-0">

    <div class="container-fluid br bg-white  p-0 shadow-sm" style="overflow: hidden;">
        <div class="px-4 py-1 bg-bou-claire">
            <div class="container-fluid text-left">
                <h6 class=" text-uppercase blockTitle" style="font-weight: bold;color: #fff;"> Liste des demandes de devis Express</h6>
            </div>
        </div>
        <div class="px-3 px-sm-5 py-4">


            <table class="table  table-bordered table-responsive">
                <thead>
                    <tr>
                        <th scope="col">Nom & Prenom</th>
                        <th scope="col">Type de service</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telephone</th>
                        <th scope="col">Adresse</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-start">
                   @foreach($devis as $devi)
                    <tr class="">
                        <td>{{$devi->nom}}</td>
                        <td>{{$devi->type_service ?? ''}}</td>
                        <td>{{$devi->email}}</td>
                        <td>{{$devi->telephone}}</td>
                        <td>{{$devi->adresse}}</td>
                        <td>
                            <div class="d-flex mt-3 p-0 justify-content-end">
                            <a href="" class="btn btn-primary listbtn br" data-bs-toggle="modal" data-bs-target="#apercuModal{{$devi->id_devis_express}}">Aperçu</a>
                            &nbsp;&nbsp;
                            <a href="#" class="btn bg-warning mx-1 listbtn br">Répondre</a>
                            </div>
                           
                        </td>
                    </tr>
                @if($devi->type_service=="Sejour clé en main")
                    <div class="modal fade" id="apercuModal{{$devi->id_devis_express}}" tabindex="-1"  aria-labelledby="apercuModal{{$devi->id_devis_express}}Label" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header pt-0">
                                            <h5 class="modal-title fs-2" id="apercuModal{{$devi->id_devis_express}}Label">{{$devi->nom}} (<span style="color:red">{{$devi->type_service}} </span>)</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body px-0 py-4">
                                            <div class="row">
                                                <div class="col-md-3">
                                                 <h3 class="mb-0 text-bou-claire ">Ville de depart</h3>
                                                  <p class="mt-0 text-cafe text-justify text-flex">{{$devi->ville_depart}}</p>
                                                </div>
                                                <div class="col-md-3">
                                                 <h3 class="mb-0 text-bou-claire ">Ville d'arrivé</h3>
                                                  <p class="mt-0 text-cafe text-justify text-flex">{{$devi->ville_arrive}}</p>
                                                </div>
                                                <div class="col-md-3">
                                                 <h3 class="mb-0 text-bou-claire ">Date de depart</h3>
                                                  <p class="mt-0 text-cafe text-justify text-flex">{{$devi->date_depart}}</p>
                                                </div>
                                                <div class="col-md-3">
                                                 <h3 class="mb-0 text-bou-claire ">Date arrivée</h3>
                                                  <p class="mt-0 text-cafe text-justify text-flex">{{$devi->date_arrive}}</p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                 <h3 class="mb-0 text-bou-claire ">Nombre de personne</h3>
                                                  <p class="mt-0 text-cafe text-justify text-flex">{{$devi->nombre_pers}}</p>
                                                </div>

                                        </div>
                                </div>
                            </div>
<!-- =============================End Modal Part========================== -->
                @elseif($devi->type_service=="Evenementiel")
                <div class="modal fade" id="apercuModal{{$devi->id_devis_express}}" tabindex="-1"  aria-labelledby="apercuModal{{$devi->id_devis_express}}Label" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header pt-0">
                                            <h5 class="modal-title fs-2" id="apercuModal{{$devi->id_devis_express}}Label">{{$devi->nom}} (<span style="color:red">{{$devi->type_service}} </span>)</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body px-0 py-4">
                                            <div class="row">
                                              <div class="col-md-3">
                                                 <h3 class="mb-0 text-bou-claire ">Lieu</h3>
                                                  <p class="mt-0 text-cafe text-justify text-flex">{{$devi->lieu}}</p>
                                                </div>
                                                <div class="col-md-3">
                                                 <h3 class="mb-0 text-bou-claire ">Date de debut</h3>
                                                  <p class="mt-0 text-cafe text-justify text-flex">{{$devi->date_depart}}</p>
                                                </div>
                                                <div class="col-md-3">
                                                 <h3 class="mb-0 text-bou-claire ">Date fin</h3>
                                                  <p class="mt-0 text-cafe text-justify text-flex">{{$devi->date_arrive}}</p>
                                                </div>
                                                <div class="col-md-3">
                                                 <h3 class="mb-0 text-bou-claire ">Type evenement</h3>
                                                  <p class="mt-0 text-cafe text-justify text-flex">{{$devi->type_evenement}}</p>
                                                </div>
                                                
                                            </div>

                                        </div>
                                </div>
                            </div>
<!-- =============================End Modal Part========================== -->

            @elseif($devi->type_service=="Reservation")
                <div class="modal fade" id="apercuModal{{$devi->id_devis_express}}" tabindex="-1"  aria-labelledby="apercuModal{{$devi->id_devis_express}}Label" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header pt-0">
                                            <h5 class="modal-title fs-2" id="apercuModal{{$devi->id_devis_express}}Label">{{$devi->nom}} (<span style="color:red">{{$devi->type_service}} </span>)</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body px-0 py-4">
                                            <div class="row">
                                              <div class="col-md-3">
                                                 <h3 class="mb-0 text-bou-claire ">Lieu de depart</h3>
                                                  <p class="mt-0 text-cafe text-justify text-flex">{{$devi->lieu_depart}}</p>
                                                </div>
                                                <div class="col-md-3">
                                                 <h3 class="mb-0 text-bou-claire ">Lieu d'arrivé</h3>
                                                  <p class="mt-0 text-cafe text-justify text-flex">{{$devi->lieu_arrive}}</p>
                                                </div>
                                                <div class="col-md-3">
                                                 <h3 class="mb-0 text-bou-claire ">Date de depart</h3>
                                                  <p class="mt-0 text-cafe text-justify text-flex">{{$devi->date_depart}}</p>
                                                </div>
                                                <div class="col-md-3">
                                                 <h3 class="mb-0 text-bou-claire ">Date arrivé</h3>
                                                  <p class="mt-0 text-cafe text-justify text-flex">{{$devi->date_arrive}}</p>
                                                </div>
                                                
                                            </div>

                                            <div class="row">
                                              <div class="col-md-3">
                                                 <h3 class="mb-0 text-bou-claire ">Type de reservation</h3>
                                                  <p class="mt-0 text-cafe text-justify text-flex">{{$devi->type_reservation}}</p>
                                                </div>
                                                <div class="col-md-3">
                                                 <h3 class="mb-0 text-bou-claire ">Nombre de personne</h3>
                                                  <p class="mt-0 text-cafe text-justify text-flex">{{$devi->nombre_pers}}</p>
                                                </div>
                                            </div>

                                        </div>
                                </div>
                            </div>
<!-- =============================End Modal Part========================== -->

<!-- =============================End Modal Part========================== -->

              @elseif($devi->type_service=="Envoi colis")
                <div class="modal fade" id="apercuModal{{$devi->id_devis_express}}" tabindex="-1"  aria-labelledby="apercuModal{{$devi->id_devis_express}}Label" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header pt-0">
                                            <h5 class="modal-title fs-2" id="apercuModal{{$devi->id_devis_express}}Label">{{$devi->nom}} (<span style="color:red">{{$devi->type_service}} </span>)</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body px-0 py-4">
                                            <div class="row">
                                              <div class="col-md-3">
                                                 <h3 class="mb-0 text-bou-claire ">Lieu de depart</h3>
                                                  <p class="mt-0 text-cafe text-justify text-flex">{{$devi->lieu_depart}}</p>
                                                </div>
                                                <div class="col-md-3">
                                                 <h3 class="mb-0 text-bou-claire ">Lieu d'arrivé</h3>
                                                  <p class="mt-0 text-cafe text-justify text-flex">{{$devi->lieu_arrive}}</p>
                                                </div>
                                                <div class="col-md-3">
                                                 <h3 class="mb-0 text-bou-claire ">Date envoi</h3>
                                                  <p class="mt-0 text-cafe text-justify text-flex">{{$devi->date_envoi}}</p>
                                                </div>
                                                <div class="col-md-3">
                                                 <h3 class="mb-0 text-bou-claire ">Date arrivée</h3>
                                                  <p class="mt-0 text-cafe text-justify text-flex">{{$devi->date_arrive}}</p>
                                                </div>
                                                
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                 <h3 class="mb-0 text-bou-claire ">Poids</h3>
                                                  <p class="mt-0 text-cafe text-justify text-flex">{{$devi->poids}}</p>
                                                </div>
                                            </div>

                                        </div>
                                </div>
                            </div>
<!-- =============================End Modal Part========================== -->
                       @endif


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
    function deleteTemoignage(id){
   event.preventDefault();
     Swal.fire({
    title: 'Êtes vous sur de vouloir supprimer ce temoignage ?',
    text: "Cette action est irréversible",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#D63030',
    cancelButtonColor: '#797979E3',
    confirmButtonText: 'Oui, supprimer!',
    cancelButtonText: 'Annuler'
  }).then((result) => {
    if (result.isConfirmed) {
      var href = $('#temoignage-supp'+id).attr('href');
      window.location.href = href; 
      Swal.fire(
        'Temoignage supprimé!',
        'Suppression effectuée avec succès.',
        'success'
      )
    }

  })
}

</script>
@endsection