<!doctype html>
<html lang="es">

<head>
    <!-- Etiquetas <meta> obligatorias para Bootstrap -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Enlazando el CSS de Bootstrap -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link href="./css/carousel.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    <link href="./css/bootstrap-utilities.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <title>Camen.cl</title>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>
</head>

<body>
    <!--Menu-->
    <header>
        <nav class="navbar navbar-expand-lg navbar-black bg-white" aria-label="Ninth navbar example">
            <div class="container-xl">
                <a class="navbar-brand" href="#">
                    <img src="./img/logo/logo camen2.png" class="d-inline-block align-top img-logo" alt="">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarsExample07XL" aria-controls="navbarsExample07XL" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse " id="navbarsExample07XL">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 menu-espacio">
                        <li class="nav-item">
                            <a class="nav-link active texto-menu" aria-current="page" href="#">Portal Cliente</a>
                        </li>

                        <li class="nav-item espacio-responsive">
                            <a class="nav-link active texto-menu" aria-current="page" href="#">Empresa</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active texto-menu" aria-current="page" href="#">Cotiza con nosotros</a>
                        </li>

                    </ul>
                    <div class="d-flex align-items-center justify-content-center">
                        <i class="bi bi-instagram color-naranjo texto-menu me-4"></i>
                        <i class="bi bi-facebook color-naranjo texto-menu"></i>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!--Carrusel-->
    <div id="myCarousel" class="carousel slide carrusel-mode mx-auto" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="fondoBlanco"></div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 bd-placeholder-img" src="./img/slider/slider4.jpg">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Portal para Clientes</h1>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 bd-placeholder-img" src="./img/slider/slider2.jpg">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Entrega en 24 Horas</h1>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 bd-placeholder-img" src="./img/slider/slider1.jpg">

                <div class="container">
                    <div class="carousel-caption">
                        <h1>Transporte de carga pesada</h1>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 bd-placeholder-img" src="./img/slider/slider3.png">

                <div class="container">
                    <div class="carousel-caption">
                        <h1>Lógistica en Transporte</h1>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container">
        <!--Cotiza con nosotros-->
        <div class="text-center my-3">
            <button class="button orange">
                <div class="d-flex align-items-center action font-texto">
                    <div class="me-2">Cotiza con Nosotros </div>
                    <i class="bi bi-arrow-right-circle"></i>
                </div>
            </button>
        </div>
        <div class="texto-align-center action texto-align-infor">
            "Cumplimos con las espectativas de tu cliente y te ayudamos en la cadena de distribución de tu producto"
        </div>
        <!--servicios-->
        <div class="text-center my-4">
            <h1 class="texto-title">Servicios</h1>
        </div>
        <div class="card-group text-center mb-5">
            <div class="caja-servicios card pb-5">
                <img src="./img/servicios/mapa.png" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Logística</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                </div>
                <div class="boton-cotizar">
                    <div class="text-center">
                        <a class="btn orange text-white texto-menu mb-0 px-5" href="#">Cotiza</a>
                    </div>
                </div>
            </div>
            <div class="caja-servicios card pb-5 espacio-responsive">
                <img src="./img/servicios/camion.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Camiones</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
                    </p>
                </div>
                <div class="boton-cotizar">
                    <div class="text-center">
                        <a class="btn orange text-white texto-menu mb-0 px-5" href="#">Cotiza</a>
                    </div>
                </div>
            </div>
            <div class="caja-servicios card pb-5">
                <img src="./img/servicios/furgon.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Última Milla</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This card has even longer content than the first to show that equal height
                        action.</p>
                </div>
                <div class="boton-cotizar">
                    <div class="text-center">
                        <a class="btn orange text-white texto-menu mb-0 px-5" href="#">Cotiza</a>
                    </div>
                </div>
            </div>
        </div>
        <!--como lo hacemos-->
        <div class="text-center my-4">
            <h1 class="texto-title">Cómo lo hacemos</h1>
        </div>
        <div class="card-group text-center mb-5">
            <div class="caja-servicios2 card pb-5">
                <img src="./img/como/Log1.png" class="mx-auto">
                <div class="card-body">
                    <h5 class="card-title">1. Integración</h5>
                    <p class="card-text">Integra tu tienda a nuestro sistema, creando usuario en portal cliente e ingresando la información de tu marca.</p>
                </div>
            </div>
            <div class="caja-servicios2 card pb-5 espacio-responsive">
                <img src="./img/como/Log2.png" class="mx-auto">
                <div class="card-body">
                    <h5 class="card-title">2. Proceso retiro de producto</h5>
                    <p class="card-text">Envía tu stock para almacenarlo en nuestra bodega ubicada en San Miguel.</p>
                </div>
            </div>
            <div class="caja-servicios2 card pb-5 espacio-responsive2">
                <img src="./img/como/Log3.png" class="mx-auto">
                <div class="card-body">
                    <h5 class="card-title">3. Organización en Central de móviles</h5>
                    <p class="card-text">Organizamos sus productos, se distribuyen según ruta y se cargan los móviles para despachar sus productos.</p>
                </div>
            </div>
            <div class="caja-servicios2 card pb-5">
                <img src="./img/como/Log4.png" class="mx-auto">
                <div class="card-body">
                    <h5 class="card-title">4. Entregamos</h5>
                    <p class="card-text">Despachamos el pedido en 24 horas dentro de Stgo con logística de transporte. En regiones, el pedido es entregado al courier seleccionado para ser enviado.</p>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>