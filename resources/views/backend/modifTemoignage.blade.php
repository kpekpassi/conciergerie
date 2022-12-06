@extends('master.header_admin')
@php
$active ='temoignageModif'
@endphp
@section('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
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
                <h6 class=" text-uppercase blockTitle" style="font-weight: bold;color: #fff;"> Modification</h6>
            </div>
        </div>
        <form  method="POST" action="{{route('edit.temoignage',$temoignage->id_temoignage)}}" enctype="multipart/form-data">
            @csrf
            <div class="container-fluid px-3 px-sm-5 py-2  text-left">

                <div class="row py-3 px-0 container-fluid mx-0">
                    <div class="col-12 mb-3 ">
                        <label for="nom" class="font-bold font-open mb-2">Nom & Presoms<span style="color: red;">*</span></label>
                        <input type="text"  required="" class="form-control br border-none" autocomplete="nom" name="nom" id="nom" value="{{$temoignage->nom}}" class="form-control">
                        @error('nom')
                        <div class="invalid-feedback text-left" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                    <div class="col-12 mb-3 ">
                        <label for="fonction" class="font-bold font-open mb-2">Fonction<span style="color: red;">*</span></label>
                        <input type="text" required="" class="form-control br border-none  @error('fonction') is-invalid @enderror" autocomplete="fonction" name="fonction" id="fonction" value="{{$temoignage->fonction}}" class="form-control">
                        @error('fonction')
                        <div class="invalid-feedback text-left" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                    
                    <div class="col-12 mb-3 ">
                        <label for="description" class="font-bold font-open mb-2">Description<span style="color: red;">*</span></label>
                        <textarea type="text" required="" placeholder="" class="form-control br border-none @error('description') is-invalid @enderror" autocomplete="description" name="description" id="contenu" cols="30" rows="2"> {{$temoignage->description}}</textarea>
                        @error('description')
                        <div class="invalid-feedback text-left" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="col-12 mb-3 ">
                        <label for="fonction" class="font-bold font-open mb-2">Logo</label>
                        <input type="file" class="form-control br border-none  @error('logo') is-invalid @enderror" autocomplete="file" name="file" id="fonction" value="{{old('logo') }}" class="form-control">
                        @error('fonction')
                        <div class="invalid-feedback text-left" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>


                </div>
            </div>
            <hr>
           
            <div class="d-flex justify-content-start px-5">
                <button type="reset" class="btn p-3 px-sm-4 px-md-5 ms-3 ms-sm-0 me-2 me-md-3 btn-secondary br">Annuler</button>
                <button type="submit" class="btn text-white bg-vert-claire p-3 px-sm-4 px-md-5  br" id="btnPublie">Enregistrer</button>
            </div>

        </form>
        <br><br>

    </div>
</div>
<style>
    .br {
        border-radius: 10px !important;
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

    .dropdown-toggle::after {
        display: none;
    }

    .note-editable {
        border-top: 1px solid silver !important;
    }

    .note-editable {
        background-color: #fff;
    }
</style>
@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })
 
      $(document).ready(function() {
            $('#contenu').summernote({
                height: 150,   //set editable area's height
            });
        });
</script>
@endsection