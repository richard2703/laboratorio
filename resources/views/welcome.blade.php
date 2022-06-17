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

    <style>
        @import url('https://fonts.googleapis.com/css?family=Averia+Serif+Libre|Bubblegum+Sans|Caveat+Brush|Chewy|Lobster+Two');
    </style>


</head>

<body class="container-fluid">
    {{-- <!-- Navbar --> --}}
    <nav class="row navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="col">
                <div class="row d-flex">
                    <div class="col ">
                        <a class="navbar-brand" href="#">Navbar</a>
                    </div>
                    <div class="col alinia">
                        <button class="navbar-toggler float-end " type="button" data-mdb-toggle="collapse"
                            data-mdb-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-bars"></i>
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

    <section class="row text-center text-lg-start bg-light text-muted mt-3">
        <div class="d-flex align-items-start bg-light mb-3" style="height: 100px;">
            <div class="col">Contenido</div>

        </div>
    </section>
    {{-- <!-- contenido END --> --}}

    {{-- <!-- footer  --> --}}
    <footer class="row text-center text-lg-start text-muted">
        <div class="d-flex align-items-start mb-3" style="height: 100px;">
            <div class="col">One of three columns</div>
            <div class="col">One of three columns</div>
            <div class="col">One of three columns</div>
        </div>
        <div class="d-flex align-items-center mb-3" style="height: 100px;">
            <div class="col">One of three columns</div>
            <div class="col">One of three columns</div>
            <div class="col">One of three columns</div>
        </div>
        <div class="d-flex align-items-end  mb-3" style="height: 100px;">
            <div class="col">One of three columns</div>
            <div class="col">One of three columns</div>
            <div class="col">One of three columns</div>
        </div>
        <!-- Copyright -->
        <section>
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                © 2021 Copyright:
                <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
            </div>
        </section>

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
