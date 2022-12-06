<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MONO SERVICE :: ADMINISTRATION</title>
    <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.css" integrity="sha512-3icgkoIO5qm2D4bGSUkPqeQ96LS8+ukJC7Eqhl1H5B2OJMEnFqLmNDxXVmtV/eq5M65tTDkUYS/Q0P4gvZv+yA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('admin/css/app.min.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('admin/css/welcome.css')}}" type="text/css" media="all">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('styles')
</head>

<body>

    <div class="container-fluid m-0" style="background-color: white;text-align: center;margin-top:0.1rem;">
        <div class="row" style="min-height: 100vh;background-color:   #f7f7f9;white-space:nowrap;flex-wrap:nowrap;">
            <div class="col p-0 shadow bg-dark mt-n1 shadow-top-none d-none1 d-lg-block" id="sideBar" style="max-width:max-content;min-width:19rem;position:relative;z-index:10!important">
                <div class="py-4">
                    <!-- <div class="mb-0 mt-n5 text-left container-fluid">
                        <img src="{{asset('admin/images/logo_complet-ocre-white.png')}}" alt="logo" class="img" style="width:10rem">
                    </div> -->
                    <!-- <hr> -->
                    <div class="pb-3 text-left px-3 d-flex mt-4 media justify-content-center" style="cursor:pointer" onclick="afficheSubmenu()">
                        <div class="d-flex">
                            <img src="{{asset('admin/images/avatar.png') }}" alt="photo de profil" class="me-2 my-auto" style="height: 50px;border-radius:50%;border:5px solid#f7f7f9">
                            <div style="margin-top : -.8rem;">
                                <h5 class="text-uppercase text-orange" style="margin-bottom: -.5rem;">{{Cookie::get('nom_user')}} {{Cookie::get('prenom_user')}}</h5>
                                <span style="color:#CFCFCF;font-size:13px">
                                {{Cookie::get('email_user')}}
                                </span>
                            </div>
                        </div>
                        <div class="my-auto ps-3">
                            <i class="fas fa-angle-left dash"></i>
                        </div>
                    </div>
                    <div class="submenu subMedia text-left pb-0">
                        <ul class="px-0 pb-0">
                            <li class="first"> <a href="{{route('deconnection.user')}}">Déconnexion</a> </li>
                            <!-- <li class="mb-n3"> <a href=""> Changer de mot de passe</a></li> -->
                        </ul>
                        <div class="removeMenu" onclick="afficheSubmenu()"></div>
                    </div>
                    <!-- <hr> -->
                    <ul class="nav d-block nav-tabs nav-justified text-left" id="myTab" role="tablist" style="border: none;">
                        <li class="nav-item @if ($active=='dash' ) active @endif">

                            <a class="nav-link" href="{{route('index.dashboard')}}">
                                <i class="fas fa-columns dash"></i> Dashboard </a>
                        </li>
                        <!-- <li class="nav-item @if ($active=='profil' ) active @endif">

                            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#invitation">
                                <i class="fas fa-user-plus dash"></i> Inviter un administrateur
                            </a>
                        </li> -->
                        <li class="nav-item d-flex  justify-content-between " onclick="subDashMenu('subDashMenu1','fa-angle-left1')">
                            <a class="nav-link">
                                <i class="fas fa-newspaper dash"></i>Gestion des partenaires</a>
                            <i class="fas  @if($active == 'blogCreate' || $active == 'listePartenaire') fa-angle-down @else fa-angle-left @endif my-auto me-3" id="fa-angle-left1" style="--color:#A4A4A8;--top:0rem"></i>
                        </li>

                        <div class="subOnglet " id="subDashMenu1" style="display: none; @if($active == 'blogCreate' || $active == 'listePartenaire') display:block @endif">
                            <!-- <li class="nav-item @if($active == 'blogCreate') active @endif">
                                <a href="" class="nav-link">
                                    <i class="fas fa-dot-circle dash1 br" style="font-size:10px; --top:-0.1rem"></i> Ajouter un partenaire</a>
                            </li> -->
                            <li class="nav-item @if($active == 'listePartenaire') active @endif">
                                <a href="{{route('liste.partenaire')}}" class="nav-link">
                                    <i class="fas fa-dot-circle dash1 br" style="font-size:10px; --top:-0.1rem"></i> Liste des partenaires </a>
                            </li>
                            
                        </div>
                        <li class="nav-item d-flex  justify-content-between " onclick="subDashMenu('subDashMenuProp','fa-angle-left2')">
                            <a class="nav-link">
                                <i class="fas fa-pager dash"></i> Gestion des temoignages</a>
                            <i class="fas  @if($active == 'temoignageCreate' || $active == 'listeTemoignage') fa-angle-down @else fa-angle-left @endif my-auto me-3" id="fa-angle-left2" style="--color:#A4A4A8;--top:0rem"></i>
                        </li>
                        <div class="subOnglet " id="subDashMenuProp" style="display: none; @if($active == 'temoignageCreate' || $active == 'listeTemoignage' ) display:block @endif">
                            <li class="nav-item @if ($active=='temoignageCreate' ) active @endif">
                                <a href="{{route('ajouter.temoignage')}}" class="nav-link">
                                    <i class="fas fa-dot-circle dash1 br" style="font-size:10px; --top:-0.1rem"></i> Enregistrer un temoignage</a>
                            </li>
                            <li class="nav-item @if ($active=='listeTemoignage' ) active @endif">
                                <a href="{{route('liste.temoignage')}}" class="nav-link">
                                    <i class="fas fa-dot-circle dash1 br" style="font-size:10px; --top:-0.1rem"></i> Liste des temoignages </a>
                            </li>
                          </div>

                          <li class="nav-item d-flex  justify-content-between " onclick="subDashMenu('subDashMenu','fa-angle-left2')">
                            <a class="nav-link">
                                <i class="fas fa-pager dash"></i> Gestion des devis</a>
                            <i class="fas  @if($active == 'listeDevisExpress' || $active == 'listeDevis') fa-angle-down @else fa-angle-left @endif my-auto me-3" id="fa-angle-left2" style="--color:#A4A4A8;--top:0rem"></i>
                        </li>
                        <div class="subOnglet " id="subDashMenu" style="display: none; @if($active == 'listeDevisExpress' || $active == 'listeDevis' ) display:block @endif">
                            <li class="nav-item @if ($active=='listeDevis' ) active @endif">
                                <a href="{{route('liste.devis')}}" class="nav-link">
                                    <i class="fas fa-dot-circle dash1 br" style="font-size:10px; --top:-0.1rem"></i> Liste des devis </a>
                            </li>
                            <li class="nav-item @if ($active=='listeDevisExpress' ) active @endif">
                                <a href="{{route('liste.devis.express')}}" class="nav-link">
                                    <i class="fas fa-dot-circle dash1 br" style="font-size:10px; --top:-0.1rem"></i> Liste des devis express </a>
                            </li>
                          </div>

                          <li class="nav-item d-flex  justify-content-between " onclick="subDashMenu('subDashMenuTem','fa-angle-left2')">
                            <a class="nav-link">
                                <i class="fas fa-pager dash"></i> Gestion des utilisateurs</a>
                            <i class="fas  @if($active == 'createUser' || $active == 'listeUser') fa-angle-down @else fa-angle-left @endif my-auto me-3" id="fa-angle-left2" style="--color:#A4A4A8;--top:0rem"></i>
                        </li>
                        <div class="subOnglet " id="subDashMenuTem" style="display: none; @if($active == 'createUser' || $active == 'listeUser') display:block @endif">
                            <li class="nav-item @if ($active=='createUser') active @endif">
                                <a href="{{route('ajouter.utilisateur')}}" class="nav-link">
                                    <i class="fas fa-dot-circle dash1 br" style="font-size:10px; --top:-0.1rem"></i> Ajouter un utilisateur </a>
                            </li>
                            <li class="nav-item @if ($active=='listeUser' ) active @endif">
                                <a href="{{route('liste.user')}}" class="nav-link">
                                    <i class="fas fa-dot-circle dash1 br" style="font-size:10px; --top:-0.1rem"></i> Liste des utilisateurs </a>
                            </li>
                          </div>
                      </ul>
                </div>
            </div>
            <div class="col p-0">

                <div class="container-fluid shadow-sm py-3 px-4 text-left d-flex justify-content-between">
                    <div class="d-flex">
                        <i class="fas fa-bars my-auto me-3 text-cafe" onclick="sideBarToggle()" style="cursor: pointer;"></i>
                        <a href="/" class="btn px-3 py-1 text-white br50 me-2" style="font-size: 13px;box-shadow: 0 .35rem .5rem rgba(0,0,0,.095) !important; background-color:#1e2e42">
                            Retour sur MONO SERVICE</a>
                            <!-- <a href="" class="btn bg-bou-sombre px-3 py-1 text-white br50" style="font-size: 13px;box-shadow: 0 .35rem .5rem rgba(0,0,0,.095) !important;">
                            Accéder au BLOG</a> -->
                    </div>
                    <div class="my-auto d-flex text-right">
                        <h6 class="my-auto" style="font-size: 19px;color:#828283">
                            @if ($active == 'dash') Tableau de board @endif
                        </h6>
                    </div>
                </div>

                <div class="conatiner-fluid px-3 px-sm-5 py-3 py-sm-5">
                    @yield('contentAdmin')
                </div>
            </div>
        </div>
        <!-- Modal Invitation-->
        <div class="modal fade" id="invitation" tabindex="-1" aria-labelledby="invitationLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-none">
                        <!-- <h4 class="modal-title fw-bold" id="addPresentationLabel">N</h4> -->
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center pb-5">
                        <h3 style="font-weight:bold">Invitez votre ami par </h3>

                        <span>Veuillez choisir un moyen de partage</span>
                        <br>
                        <div class="d-flex  justify-content-center pt-4 pb-3">
                            <div class="px-2 py-1 me-3 my-auto" style="border-radius:50%;background-color:#646363;width:max-content">
                                <a onclick="copyAdminLink()" style="cursor: pointer;" title="Copier le lien">
                                    <i class="fas fa-copy my-auto " style="color:#fff;font-size:1.2em"></i>
                                </a>
                            </div>
                            <div class="px-2 py-1 me-3 my-auto" style="border-radius:50%;background-color:#CA0011;width:max-content">
                                <a href="" target="blank" title="Gmail">
                                    <i class="fas fa-envelope my-auto " style="color:#fff;font-size:1.2em"></i>
                                </a>
                            </div>
                            <div class="px-2  py-1 me-3 my-auto" style="border-radius:50%;background-color:#06047E;width:max-content">
                                <a href="" title="Facebook">
                                    <i class="fab fa-facebook-f my-auto " style="color:#fff;font-size:1.2em"></i>
                                </a>
                            </div>
                            <div class="px-2 py-1 me-3 my-auto" style="border-radius:50%;background-color:#068317;width:max-content">
                                <a href="" data-action="share/whatsapp/share" target="blank" title="Whatsapp">
                                    <i class="fab fa-whatsapp my-auto " style="color:#fff;font-size:1.2em"></i>
                                </a>
                            </div>
                            <div class="px-2 py-1 me-3 my-auto" style="border-radius:50%;background-color:#1E83C7;width:max-content">

                                <a href="" target="blank" title="Linkedin">
                                    <i class="fab fa-linkedin-in my-auto " style="color:#fff;font-size:1.2em"></i>
                                </a>
                            </div>

                        </div>
                        <a style="text-decoration: underline;color:#06047E">
                            {{-- <i class=" fas fa-link my-auto me-2" style="--color:#3A3A3A;font-size:0.8em"></i> --}}
                            <input class="form-control inviter-admin" type="text" value="" readonly>
                        </a>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
        <!-- End modal -->
        <style>
            .nav-link {
                text-align: left;
                color: #BEBEBE !important;
                font-size: 15px;
                padding-left: 2rem !important;
                white-space: nowrap;
            }

            .subOnglet {
                background-color: #FFEEDD;
            }

            .subOnglet a,
            .subOnglet i {
                color: #363636 !important;
            }

            .nav-link:hover {
                color: #FD7309 !important;
                border: none !important;
            }

            .nav-item:hover {
                border: none !important;
                color: #FD7309 !important;
            }

            .nav-item {
                padding: 1rem 0rem;
                white-space: nowrap;
                cursor: pointer;
            }

            .nav-item.active {
                padding: 1rem 0rem;
                background-color: #FFEEDD;
                border-right: 3px solid #FD7309;
                width: calc(100% + 3px);
            }

            .nav-item.active .nav-link {
                color: #363636 !important;
                font-weight: 700;
            }

            .nav-item.active i {
                color: #FD7309;
                font-size: 18px;
            }

            i.dash {
                color: #727380;
                font-size: 15px;
                --top: 0.3rem;
                margin-right: .5rem;
            }

            .enteteH1 {
                display: none !important;
            }

            .auth {
                display: flex !important;
            }

            h2.bienvenue {
                color: #FF2969;
                font-size: 2.5rem;
                font-weight: bold;
            }

            h6.bienvenue {
                color: #353333;
                font-size: 1rem;
            }

            .pied {
                display: none;
            }

            .br {
                border-radius: 10px;
            }

            #nav {
                /* box-shadow: none!important; */
                border: none !important;
                z-index: 100;
                position: sticky;
            }

            .subOnglet i {
                color: #DAAB65 !important;

            }

            .subOnglet a {
                color: #D8D8D8 !important;

            }

            .subOnglet {
                background-color: #363636 !important;

            }

            .dash1 {
                margin-right: .5rem;
            }

            .subOnglet li {
                padding-left: 1.5rem !important;
            }

            .removeMenu {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100vh;
                z-index: -3;
                /* border:3px solid lime */
            }

            /*======================= Subemenu Design ========================================*/
            .submenu {
                position: absolute;
                background-color: #041D3A;
                padding: 0;
                visibility: hidden;
                opacity: 0;
                transition: 0.3s all;
                z-index: 15
            }

            .subMedia.active {
                visibility: visible !important;
                opacity: 1 !important;
            }

            /* .submenu:hover{
            visibility: visible;
            opacity: 1;
        } */
            /* .media:hover + .subMedia{
            visibility: visible;
            opacity: 1;
        }

        .subMedia ul:hover + .subMedia{
            visibility: visible!important;
            opacity: 1!important;
        } */
            .submenu::before {
                content: "";
                position: absolute;
                margin-top: 2.5rem;
                margin-left: -1.1rem;
                transform: rotate(-90deg);
                width: 1.2rem;
                height: 1rem;
                background-color: #041D3A;
                padding: 0;
                clip-path: polygon(51% 0%, 0% 100%, 100% 100%);
            }

            .submenu li {
                list-style-type: none;
                color: #fff;
                padding: .6rem 1rem;
            }

            .submenu li.first {
                border-bottom: 1px solid #FFEBD483;
            }

            .submenu li:hover {
                background-color: #E95D00;
                border: none;
            }

            .submenu li a {
                color: #fff;
                width: 100% !important;
                height: 100%;
                padding: .6rem 1rem;
            }

            .subMedia {
                left: 18rem;
                margin-top: -5rem;
                visibility: hidden !important;
                opacity: 0 !important;
            }

            .darkmode-toggle {
                z-index: 5000 !important
            }
            *{
                white-space:normal!important
            }
            /*================================= Fin Subemenu Design ===============================*/
        </style>
        <!-- ========================Script======================= -->
        <script src="{{asset('admin/js/blogJs/jquery.min.js')}}"></script>
        <script src="{{asset('admin/js/blogJs/bootstrap.min.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>

        @yield('scripts')

        <!-- ======================End Script======================= -->
        <script>
            function addDarkmodeWidget() {
    new Darkmode().showWidget();
  }
  window.addEventListener('load', addDarkmodeWidget);
        </script>
        <script>
            import Darkmode from 'darkmode-js';

new Darkmode().showWidget();
const options = {
  bottom: '64px',
  right: 'unset',
  left: '32px',
  time: '0.5s',
  mixColor: '#fff',
  backgroundColor: '#fff',
  buttonColorDark: '#100f2c',
  buttonColorLight: '#fff',
  saveInCookies: false,
  label: '🌓 Passer en mode sombre',
  autoMatchOsTheme: true;
}

const darkmode = new Darkmode(options);
darkmode.showWidget();

        </script>
        <script>
            function subDashMenu(id, icone) {
                $('#'+id).slideToggle('slow')
                $('#'+icone).toggleClass('fa-angle-left','slow')
                $('#'+icone).toggleClass('fa-angle-down','slow')
            }
        </script>
        <script>
            var sideWidth =  $('#sideBar').width();
            if(screen.width < 900){
                $('#sideBar').css({'width': "0",'min-width':"0",'max-width':"0",'opacity':"0",'overflow':"hidden"})
            }
            $(window).resize(function(){
                if(screen.width < 900){
                $('#sideBar').css({'width': "0",'min-width':"0",'max-width':"0",'opacity':"0",'overflow':"hidden"})
            }
            });
            function sideBarToggle(){

                if( $('#sideBar').width() != 0){
                    sideWidth = $('#sideBar').width()
                    $('#sideBar').css('overflow','hidden')
                    $('#sideBar').animate({width: "0",minWidth:"0",maxWidth:"0",opacity:"0"})
                }
                else{
                    $('#sideBar').css('overflow','visible')
                    $('#sideBar').animate({width: sideWidth+"px",minWidth:sideWidth+"px",maxWidth: sideWidth+"px",opacity:"1"});
                }

            }
            function afficheSubmenu(){

                $('.subMedia').toggleClass('active')
                // $('.subMedia').toggle('active')


            }
        </script>
        <script>
            function copyAdminLink(){
        var dummy = $('.inviter-admin').val();
        $('.inviter-admin').select();
        document.execCommand('copy');
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Lien copié avec succès',
            showConfirmButton: false,
            timer: 1500
        });
    }

function createMessageError(element, message) {
    var span = document.createElement("span");
    span.setAttribute("class", "invalid-feedback");
    span.setAttribute("role", "alert");
    var strong = document.createElement("strong");
    strong.innerText = message;
    span.appendChild(strong);
    $(span).insertAfter(element);
}
</script>

</body>

</html>
