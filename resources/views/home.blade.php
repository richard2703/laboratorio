@extends('layouts.layout')

@section('contenido')
    <section class="row d-flex ">
        <div class="col bannerSliders p-0  d-md-block ">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('/img/banners/banner1.png') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    {{-- <div class="carousel-item active">
                        <img src="{{ asset('/img/banners/hor1.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div> --}}
                    <div class="carousel-item">
                        <a href="{{ url('ayuda/subir') }}">
                            <img src="{{ asset('/img/banners/hor2.jpg') }}" class="d-block w-100" alt="...">
                        </a>
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/img/banners/hor3.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!--banners para movil-->
        {{-- <div class="col bannerSliders p-0 d-block d-md-none">
            <div id="carouselMovil" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselMovil" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselMovil" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselMovil" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>

                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('/img/banners/ver1.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <a href="{{ url('ayuda/subir') }}">
                            <img src="{{ asset('/img/banners/ver2.jpg') }}" class="d-block w-100" alt="...">
                        </a>
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    <div class="carousel-item">
                        <a href="{{ url('ayuda/subir') }}">
                            <img src="{{ asset('/img/banners/ver3.jpg') }}" class="d-block w-100" alt="...">
                        </a>
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselMovil" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselMovil" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div> --}}
    </section>
    <section class="row d-flex">
        <div class="col contenido p-3  text-center">
            <div class="text-center ">
                <H2>Servicios</H2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 card d-flex m-2 estilocard">
                    <img src="{{ asset('img/iconos/blood-test.png') }}" alt="sangre " width="150">
                    <div class="card-body ">
                        <h5 class="card-title" style="color:#013E7D">Hematología</h5>
                        <p class="card-text">Es el estudio científico de la sangre y de los tejidos hematopoyéticos que la
                            conforman. En ésta sección se efectúa la Citometría Hemática además de diversas pruebas para
                            evaluare los valores de los distintos componentes de la sangre.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 card d-flex m-2 estilocard">
                    <img src="{{ asset('img/iconos/blood-test.png') }}" alt="sangre " width="150">
                    <div class="card-body ">
                        <h5 class="card-title" style="color:#013E7D">Hematología</h5>
                        <p class="card-text">Es el estudio científico de la sangre y de los tejidos hematopoyéticos que la
                            conforman. En ésta sección se efectúa la Citometría Hemática además de diversas pruebas para
                            evaluare los valores de los distintos componentes de la sangre.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 card d-flex m-2 estilocard">
                    <img src="{{ asset('img/iconos/blood-test.png') }}" alt="sangre " width="150">
                    <div class="card-body ">
                        <h5 class="card-title" style="color:#013E7D">Hematología</h5>
                        <p class="card-text">Es el estudio científico de la sangre y de los tejidos hematopoyéticos que la
                            conforman. En ésta sección se efectúa la Citometría Hemática además de diversas pruebas para
                            evaluare los valores de los distintos componentes de la sangre.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 card d-flex m-2 estilocard">
                    <img src="{{ asset('img/iconos/blood-test.png') }}" alt="sangre " width="150">
                    <div class="card-body ">
                        <h5 class="card-title" style="color:#013E7D">Hematología</h5>
                        <p class="card-text">Es el estudio científico de la sangre y de los tejidos hematopoyéticos que la
                            conforman. En ésta sección se efectúa la Citometría Hemática además de diversas pruebas para
                            evaluare los valores de los distintos componentes de la sangre.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 card d-flex m-2 estilocard">
                    <img src="{{ asset('img/iconos/blood-test.png') }}" alt="sangre " width="150">
                    <div class="card-body ">
                        <h5 class="card-title" style="color:#013E7D">Hematología</h5>
                        <p class="card-text">Es el estudio científico de la sangre y de los tejidos hematopoyéticos que la
                            conforman. En ésta sección se efectúa la Citometría Hemática además de diversas pruebas para
                            evaluare los valores de los distintos componentes de la sangre.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 card d-flex m-2 estilocard">
                    <img src="{{ asset('img/iconos/blood-test.png') }}" alt="sangre " width="150">
                    <div class="card-body ">
                        <h5 class="card-title" style="color:#013E7D">Hematología</h5>
                        <p class="card-text">Es el estudio científico de la sangre y de los tejidos hematopoyéticos que la
                            conforman. En ésta sección se efectúa la Citometría Hemática además de diversas pruebas para
                            evaluare los valores de los distintos componentes de la sangre.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="row d-flex">
        <div class="col-12 p-0 contenido d-md-block text-center">

            <img src="{{ asset('/img/banners/banner1.png') }}" class="d-block w-100" style="width: 100%"
                alt="...">
            <p>
                Tomas a domicilio
            </p>
        </div>
    </section>
@endsection

<script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
