<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{$title}} - Local Pet Me</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    </head>
    <body>
        <!-- NAVBAR -->
        <header>
            <nav class="navbar navbar-expand-md bg-light-subtle">
                <div class="container-fluid">
                    <div>
                        <a class="navbar-brand" href="/"><img src="/img/logo.png" class="logo" alt="Logo"></a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-3">
                            <li class="nav-item me-3">
                            <a class="nav-link" href="/anunciar">Como anunciar</a>
                            </li>
                            <li class="nav-item me-3">
                            <a class="nav-link" href="/blog">Blog</a>
                            </li>
                            <li class="nav-item"></li>
                            <a class="nav-link" href="/login">Login</a>
                            </li>
                            <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Categorias
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Negocios</a></li>
                                <li><a class="dropdown-item" href="vagas-1.html">Vagas</a></li>
                                <li><a class="dropdown-item" href="#">Candidatos</a></li>
                                <li><a class="dropdown-item" href="#">Cursos</a></li>
                            </ul>
                            </div>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/img-banner-1.jpg" class="d-block banner" alt="Banner">
                </div>
                <div class="carousel-item">
                    <img src="/img/img-banner-2.jpg" class="d-block banner" alt="Banner">
                </div>
                <div class="carousel-item">
                    <img src="/img/img-banner-3.jpg" class="d-block banner" alt="Banner">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- CARDS -->
        <section class="m-3 d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-4 mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body text-center pt-4">
                        <h5 class="card-title">FACIL E RÁPIDO DE <BR> ANÚNCIAR</BR></h5>
                        </div>
                    </div>
                    </div>
                    <div class="col-4 mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body text-center pt-4">
                        <h5 class="card-title">VAGAS PARA <BR> PET SHOP</BR></h5>
                        </div>
                    </div>
                    </div>
                    <div class="col-4 mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body text-center pt-4">
                        <h5 class="card-title">FORNECEDORES <br> E PRODUTOS</h5>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        {{ $slot }}
    <!-- FOOTER -->
        <footer>
            <div class="container container-personalizado mt-2 mb-5">
                <div class="row justify-content-center text-center pt-3">
                    <div class="col-5 col-md-3">
                    <h6>Local Pet Me</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none">Template</a></li>
                        <li><a href="#" class="text-decoration-none">Template</a></li>
                        <li><a href="#" class="text-decoration-none">Template</a></li>
                        <li><a href="#" class="text-decoration-none">Template</a></li>
                    </ul>
                    </div>
                    <div class="col-5 col-md-3">
                    <h6>Local Pet Me</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none">Template</a></li>
                        <li><a href="#" class="text-decoration-none">Template</a></li>
                        <li><a href="#" class="text-decoration-none">Template</a></li>
                        <li><a href="#" class="text-decoration-none">Template</a></li>
                    </ul>
                    </div>
                    <div class="col-5 col-md-3">
                    <h6>Local Pet Me</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none">Template</a></li>
                        <li><a href="#" class="text-decoration-none">Template</a></li>
                        <li><a href="#" class="text-decoration-none">Template</a></li>
                        <li><a href="#" class="text-decoration-none">Template</a></li>
                    </ul>
                    </div>
                    <div class="col-5 col-md-3">
                    <h6>Saiba mais</h6>
                    <ul class="list-unstyled">
                        <li><a href="/blog" class="text-decoration-none">Blog</a></li>
                        <hr>
                    </ul>
                    <ul class="list-inline-item">
                        <li class="list-inline"><i class="bi bi-facebook"></i></li>
                    </ul>
                    <ul class="list-inline-item">
                        <li class="list-inline"><i class="bi bi-instagram"></i></li>
                    </ul>
                    <ul class="list-inline-item">
                        <li class="list-inline"><i class="bi bi-twitter-x"></i></li>
                    </ul>
                    <ul class="list-inline-item">
                        <li class="list-inline"><i class="bi bi-youtube"></i></li>
                    </ul>
                    </div>
                </div>
            </div>
        </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    </body>
</html>