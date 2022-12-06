@extends('master.header_admin')
@php
$active ='listeTemoignage'
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
                <h6 class=" text-uppercase blockTitle" style="font-weight: bold;color: #fff;"> Liste des temoignages</h6>
            </div>
        </div>
        <div class="px-3 px-sm-5 py-4">


            <table class="table  table-bordered table-responsive">
                <thead>
                    <tr>
                        <th scope="col">Logo</th>
                        <th scope="col">Nom et Prénom</th>
                        <th scope="col">Fonction</th>
                        <th scope="col">Description</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-start">
                   @foreach($temoignages as $temoignage)
                    <tr class="">
                        <td><img src="/{{$temoignage->logo}}" alt="logo" width="100px" height="100px"></td>
                        <td>{{$temoignage->nom}}</td>
                        <td>{{$temoignage->fonction}}</td>
                        <td>
                        {!!$temoignage->description!!}</td>
                        <td>
                            <div class="d-flex mt-3 p-0 justify-content-end">
                                <!-- <a href="" class="btn btn-primary listbtn br" data-bs-toggle="modal" data-bs-target="">Aperçu</a> -->
                                <a href="{{route('modifier.temoignage.form',$temoignage->id_temoignage)}}" class="btn bg-warning mx-1 listbtn br">Modifier</a>
                                <a class="btn btn-danger listbtn br" id="temoignage-supp{{$temoignage->id_temoignage}}" onclick="return deleteTemoignage({{$temoignage->id_temoignage}})" href="{{route('delete.temoignage', $temoignage->id_temoignage)}}" type="button">Supprimer</a>
                            </div>
                           
                        </td>
                    </tr>
                   @endforeach
                </tbody>
            </table>

        </div>

    </div>
</div>

<!-- =============================Modal Part=============================================================== -->

<!-- =============================End Modal Part=============================================================== -->

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