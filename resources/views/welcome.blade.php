<!DOCTYPE html>
<html lang="es">

<head>
    <title>Pre-Vida</title>

    <!-- Fonts -->
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
</head>

</head>

<body class="container-fluid">
    {{-- <!-- Navbar --> --}}
    <nav class="row navbar navbar-expand-lg  ">
        <div class="container-fluid">
            <div class="col">
                <div class="row d-flex">
                    <div class="col ">
                        <a class="navbar-brand" href="#">Navbar</a>
                    </div>
                    <div class="col alinia">
                        <button class="navbar-toggler float-end sinmarco " type="button" data-mdb-toggle="collapse"
                            data-mdb-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-bars sinmarco" style="color:white;"></i>
                        </button>
                    </div>
                </div>

            </div>
            <div class="col collapse navbar-collapse text-end " id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 float-end ">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                {{-- <form class="d-flex input-group w-auto">
                        <input type="search" class="form-control" placeholder="Type query" aria-label="Search" />
                        <button class="btn btn-outline-primary" type="button" data-mdb-ripple-color="dark">
                            Search
                        </button>
                    </form> --}}
            </div>
        </div>
    </nav>

    {{-- <!-- Navbar END --> --}}

    {{-- <!-- contenido  --> --}}

    <section class="row text-center text-lg-start contenido">
        <div class="d-flex align-items-start mb-3 " style="height: 100px;">
            <div class="col">Contenido</div>

        </div>
    </section>
    {{-- <!-- contenido END --> --}}

    {{-- <!-- footer  --> --}}
    <footer class="row text-center text-md-start ">
        <div class="col-12 col-md-6">
            <h3>¿Tienes Dudas?</h3>
            <div>
                <div class="">
                    <p class="titulo">
                        <i class="fas fa-phone-alt"></i> Teléfono:
                    </p>
                    <p>
                        <span class="textoD">
                            (33) 3693-5986
                        </span>
                    </p>
                </div>
                <div class="">
                    <p class="titulo">
                        <i class="far fa-clock"></i> Horarios:
                    </p>
                    <p>
                        <span class="textoD"> Lunes a Viernes 8 am a 6 pm <br>
                            Lunes a Viernes 8 am a 6 pm</span>
                    </p>
                </div>
                <div class="">
                    <p class="titulo">
                        <i class="far fa-envelope"></i> Correo:
                    </p>
                    <p>
                        <span class="textoD"> atencionaclientes@laboratorioprevida.com</span>
                    </p>
                </div>
                <div class="">
                    <p class="titulo">
                        <i class="fa-solid fa-globe"></i> Redes:
                    </p>
                    <p>
                        <a href="https://www.facebook.com/previda.laboratorio">
                            <img src="{{ asset('img/logos/faceBlanco.png') }}" alt="facebook" width="50">
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6">
            <h3>Sucursales</h3>
            <div class="">
                <p class="titulo">
                    <i class='fa-solid fa-location-dot'></i> Santa Maria
                </p>
                <p>
                    <span class="textoD">
                        Bahia de todos los Santos No. 2759, Col. Parques de Santa María, Tlaquepaque, Mexico
                    </span>
                    <br>
                    <a href="https://g.page/previda-laboratorio?share" class="linkF">Ver en mapa</a>
                </p>
            </div>
            <div class="">
                <p class="titulo">
                    <i class='fa-solid fa-location-dot'></i> Santa Maria
                </p>
                <p>
                    <span class="textoD">
                        Bahia de todos los Santos No. 2759, Col. Parques de Santa María, Tlaquepaque, Mexico
                    </span>
                    <br>
                    <a href="https://g.page/previda-laboratorio?share" class="linkF">Ver en mapa</a>
                </p>
            </div>
            <div class="">
                <p class="titulo">
                    <i class='fa-solid fa-location-dot'></i> Santa Maria
                </p>
                <p>
                    <span class="textoD">
                        Bahia de todos los Santos No. 2759, Col. Parques de Santa María, Tlaquepaque, Mexico
                    </span>
                    <br>
                    <a href="https://g.page/previda-laboratorio?share" class="linkF">Ver en mapa</a>
                </p>
            </div>

        </div>



        <div class="col-12 text-center p-4">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>


        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    {{-- <!-- footer END --> --}}


    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
        integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
    </script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"></script>
</body>

</html>
