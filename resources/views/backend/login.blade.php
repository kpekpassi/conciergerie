<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion – Le Mono Services</title>
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('admin/css/app.min.css')}}" type="text/css" media="all">
</head>

<body>
    <div class="blur" style="background-image: url({{asset('admin/images/bg_partenaire.jpg')}});background-size:100%;background-repeat: no-repeat;background-size:cover;background-position:center;width:100%;height:100vh;position:absolute;z-index:-1"></div>

    <div class="p-3">
        <div class="bg-white py-5 px-3 px-sm-5 br container shadow-lg center" style="filter: blur(0px);position:absolute;z-index:100;overflow:hidden;">
            <div style="position: relative;width:100%">
                <section>
                    <!-- <div class="p-0 m-0 container-fluid">
                        <img src="{{asset('images/line2.svg')}}" width="100%" alt="" class="line1">
                    </div> -->
                </section>
                <!-- <div class="text-center">
                    <img src="{{asset('admin/images/logo_complet-ocre-dark.png')}}" alt="logo" class="img" style="width:10rem">
                </div> -->

                <div class="text text-center pb-5">
                    <h1 class="font-saira font-bold  mb-0" style="color:#1e2e42">Connexion</h1>
                    <div class="mt-5">
                        <form action="{{route('login.user')}}" method="post">
                            @csrf
                            @if (Session::has('error'))
                            <div class="alert alert-danger" style="text-align: center">
                                {{ Session::get('error') }}
                            </div>
                            @endif
                            <div class="row">
                                <div class="col-12 mb-3 ">
                                    <input type="email"  required="" class="form-control br50 border-none @error('email') is-invalid @enderror" placeholder="Votre email" autocomplete="email" name="email" id="email" value="{{old('email') }}">
                                    @error('email')
                                    <div class="invalid-feedback text-left" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-12 mb-3 ">
                                    <input type="password" required="" class="form-control br50 border-none @error('password') is-invalid @enderror" placeholder="Votre mot de passe" autocomplete="password" name="password" id="password">
                                    @error('password')
                                    <div class="invalid-feedback text-left" role="alert">
                                       <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>
                                <div class="container-fluid">
                                    <button class="btn br50 text-white container-fluid mt-4 font-bold text-uppercase" style="background-color:#1e2e42">Connexion</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<style>
    .br {
        border-radius: 10px;
    }

    .blur {
        filter: blur(0px);
        /* transition        : all 2s linear;
    -moz-transition   : all 2s linear;
    -webkit-transition: all 2s linear;
    -o-transition     : all 2s linear; */
    }

    .center {
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .line1 {
        position: absolute;
        margin-top: 5rem;
        z-index: -1;
        left: 0%;
        height: 20rem;
        width: 100%;
        top: 32%;
        left: 50%;
        transform: translate(-50%, -50%);
        /* transform: rotate(180deg); */
    }

    @media(max-width:767px) {
        h1 {
            font-size: 3rem !important;
        }

        p {
            font-size: 1.1rem !important;

        }

        .center {
            max-width: 95%;
        }
    }

    @media(min-width:510px) {

        .center {
            max-width: 500px;
        }
    }
</style>

</html>