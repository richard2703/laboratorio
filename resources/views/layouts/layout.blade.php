<!DOCTYPE html>
<html lang="es">

<head>
    <title>Pre-Vida</title>

    <!-- Fonts -->
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">

    {{-- <link rel="stylesheet" href="{{ asset('css/reset.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

</head>

<body class="container-fluid">
    {{-- <!-- Navbar --> --}}
    <nav class="row navbar navbar-expand-lg  ">
        <div class="container-fluid">
            <div class="col">
                <div class="row d-flex">
                    <div class="col ">
                        <a class="navbar-brand" href="#">
                            <img src="{{ asset('img/logos/previdasf.png') }}" alt="previda">
                        </a>
                    </div>
                    <div class="col alinia">
                        <button class="navbar-toggler float-end sinmarco " type="button" data-mdb-toggle="collapse"
                            data-mdb-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-bars sinmarco" style="color:#013E7D;"></i>
                        </button>
                    </div>
                </div>

            </div>
            <div class="col collapse navbar-collapse text-end " id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 float-end ">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Paquetes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Promociones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nosotros</a>
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

    <section class="">
        @yield('contenido')

    </section>
    {{-- <!-- contenido END --> --}}

    {{-- <!-- footer  --> --}}
    <footer class="row text-center text-md-start ">
        <div class="row justify-content-end d-flex g-0 mt-1">
            <div class="contenedorwatsappdesktop">
                <a href="https://wa.me/523310242355/?text=¡Hola!%20He%20visto%20su%20página%20y%20quisiera%20saber%20más.%20¿Me%20pueden%20proporcionar%20más%20información?"
                    target="_blank">
                    <svg style="color: #ffffff "" class xmlns="http://www.w3.org/2000/svg" width="47" height="47"
                        fill="currentColor" class="bi bi-whatsapp whatsappContactanos" viewBox="0 0 16 16">
                        <path
                            d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                    </svg>
                </a>
            </div>
        </div>

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
            <p>©2022 Laboratorio Pre-vida</p>
            <p>Todos los Derechos Reservados </p>

            <a class="text-reset fw-bold" href="#"></a>
        </div>


        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    {{-- <!-- footer END --> --}}


    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
        integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>



</body>

</html>
