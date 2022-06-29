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
        <div class="col p-3  text-center">
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
        <div class="col-12 p-0 d-md-block text-center">

            <img src="{{ asset('/img/banners/banner1.png') }}" class="d-block w-100" style="width: 100%"
                alt="...">
            <p>
                Tomas a domicilio
            </p>
        </div>
    </section>
    <section class="row d-flex">
        <div class="col p-3  text-center">
            <div class="text-center ">
                <H2>Paquetes</H2>
            </div>
            <div class="row justify-content-center">
                <div class="card mb-3">
                    <div class="row g-0 justify-content-center">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title">!Miercoles 15% de descuento¡</h4>
                                <p class="card-text">15 % de descuento a miembros del INAPAM y recetas medicas expedidas
                                    por organismos gubernamentales</p>
                                {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('img/promo/viejos.jpg') }}" class="img-fluid rounded-start"
                                alt="...">
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('img/promo/viejos.jpg') }}" class="img-fluid rounded-start"
                                alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title">!Miercoles 15% de descuento¡</h4>
                                <p class="card-text">15 % de descuento a miembros del INAPAM y recetas medicas expedidas
                                    por organismos gubernamentales</p>
                                {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                            </div>
                        </div>
                    </div>

                    {{-- <div class="row g-0 justify-content-center">
                        <div class="col-md-2">
                            <img src="{{ asset('img/promo/viejos.jpg') }}" class="img-fluid rounded-start"
                                alt="...">
                        </div>
                        <div class="col-md-4">
                            <div class="card-body">
                                <h4 class="card-title">!Miercoles 15% de descuento¡</h4>
                                <p class="card-text">15 % de descuento a miembros del INAPAM y recetas medicas expedidas
                                    por organismos gubernamentales</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-body">
                                <h4 class="card-title">!Miercoles 15% de descuento¡</h4>
                                <p class="card-text">15 % de descuento a miembros del INAPAM y recetas medicas expedidas
                                    por organismos gubernamentales</p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <img src="{{ asset('img/promo/viejos.jpg') }}" class="img-fluid rounded-start"
                                alt="...">
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <section class="row  d-flex">
        <div class="p-3 contenido text-center ">
            <div class="text-center ">
                <H2 class="promociones">Promociones</H2>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('img/promo/viejos.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">600$</h3>
                            <h4 class="card-title">Bodas</h4>
                            <p class="card-text">promocion para bodas, incluye:</p>
                            <ul>
                                <li>Biometria hematica</li>
                                <li>Quimica sanguinia de 30 elementos</li>
                                <li>Examen general de orina</li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Valida hasta 15 de octubre del 2022</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('img/promo/viejos.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">600$</h3>
                            <h4 class="card-title">Bodas</h4>
                            <p class="card-text">promocion para bodas, incluye:</p>
                            <ul>
                                <li>Biometria hematica</li>
                                <li>Quimica sanguinia de 30 elementos</li>
                                <li>Examen general de orina</li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Valida hasta 15 de octubre del 2022</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('img/promo/viejos.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">600$</h3>
                            <h4 class="card-title">Bodas</h4>
                            <p class="card-text">promocion para bodas, incluye:</p>
                            <ul>
                                <li>Biometria hematica</li>
                                <li>Quimica sanguinia de 30 elementos</li>
                                <li>Examen general de orina</li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Valida hasta 15 de octubre del 2022</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('img/promo/viejos.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">600$</h3>
                            <h4 class="card-title">Bodas</h4>
                            <p class="card-text">promocion para bodas, incluye:</p>
                            <ul>
                                <li>Biometria hematica</li>
                                <li>Quimica sanguinia de 30 elementos</li>
                                <li>Examen general de orina</li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Valida hasta 15 de octubre del 2022</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="row  d-flex">
        <div class="col p-3  text-center">
            <div class="text-center ">
                <H2>Nosotros</H2>
            </div>
        </div>
    </section>
@endsection

<script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
