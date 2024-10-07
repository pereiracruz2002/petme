<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="/css/style.css">
  <title>Local Pet Me</title>
</head>

<body>

  <!-- NAVBAR -->
  <header>
    <nav class="navbar navbar-expand-md bg-light-subtle">
      <div class="container-fluid">
        <div>
          <a class="navbar-brand"><img src="/img/logo.png" class="logo" alt="Logo"></a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-3">
            <li class="nav-item me-3">
              <a class="nav-link" href="#">Cadastre-se</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="#">Como anunciar</a>
            </li>
            <li class="nav-item"></li>
            <a class="nav-link" href="#">Login</a>
            </li>
            <div class="dropdown">
              <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categorias
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Negocios</a></li>
                <li><a class="dropdown-item" href="#">Vagas</a></li>
                <li><a class="dropdown-item" href="#">Candidatos</a></li>
                <li><a class="dropdown-item" href="#">Cursos</a></li>
              </ul>
            </div>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- CAROUSEL  -->
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

  <!-- CARD VAGAS -->
  <div class="container d-grid gap-2 mt-2 ">
    <div class="border border-1 border-primary rounded-3 bg-light">
      <div class="col-12 py-3 px-3">
        <h2>Buscando Banhista com experiência</h2>
        <p><i class="bi bi-building"></i> <a href="#"
            class="text-decoration-none">PET SHOP NOME</a> - <i class="bi bi-geo-alt-fill"></i> Campo Belo/ SP</p>
        <p> Habilidades em tosa higiênica, desembolo, remoção de sub pelo, hidratação e penteado. Deve ser pontual,
          colaborativo e comunicativo.</p>
        <a href="#" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop-1">Saiba mais</a>
        <!--https://acesse.one/localpetme-->
      </div>

      <div class="modal fade" id="staticBackdrop-1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <!--
                 <h1 class="modal-title fs-5" id="staticBackdropLabel">BANHISTA</h1>   
               -->
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
              <h3>BANHISTA - (Campo Belo/SP)</h3>
              <p><i class="bi bi-building"></i> <a href="https://www.instagram.com/doggie_academy_squad/"
                  class="text-decoration-none">PET SHOP NOME</a> - <i class="bi bi-calendar-check"></i> 04/10/2024
              </p>
              <p>Procuramos um perfil que tenha carinho pelos cães, que seja organizado, colaborativo e pontual.</p>
              <h5>Responsabilidades:</h5>
              <p>
                Tosa higiênica, desembolo, remoção de sub pelo, hidratação e penteado.
              </p>
              <h5>Exigências:</h5>
              <p>
                Experiência comprovada <br>
                Certificado de Curso
              </p>
              <h5>Salário:</h5>
              <p>
                A Combinar
              </p>
              <h5>Empresa:</h5>
              <p>
                PET SHOP NOME
                <br><br>
                Creche, Hotel, Banho & Tosa.
              </p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success"><a href="https://wa.me/5511914682547?text=Ol%C3%A1%2C%20tudo%20bem%3F%0A%0AVim%20atrav%C3%A9s%20do%20Local%20Pet%20Me%20e%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es."
                  class="text-decoration-none text-light">Contato</a></button>
              <!--
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="border border-1 border-primary rounded-3 bg-light">
      <div class="col-12 py-3 px-3">
        <h2>Contrata tosador(a) com experiência</h2>
        <p><i class="bi bi-building"></i> <a href="https://www.instagram.com/doggie_academy_squad/"
            class="text-decoration-none">PET SHOP NOME</a> - <i class="bi bi-geo-alt-fill"></i> Mooca/SP</p>
        <p>Corte de unha, limpeza de ouvidos, tosa higiênica e acabamento</p>
        <a href="#" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop-2">Saiba mais</a>
        <!--https://acesse.one/localpetme-->
      </div>

      <div class="modal fade" id="staticBackdrop-2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <!--
                 <h1 class="modal-title fs-5" id="staticBackdropLabel">BANHISTA</h1>   
               -->
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
              <h3>TOSADOR - (Mooca/SP)</h3>
              <p><i class="bi bi-building"></i> <a href="https://www.instagram.com/doggie_academy_squad/"
                  class="text-decoration-none">PET SHOP NOME</a> - <i class="bi bi-calendar-check"></i> 04/10/2024
              </p>
              <p>Procuramos um perfil que tenha carinho pelos cães, que seja organizado, colaborativo e pontual.</p>
              <h5>Responsabilidades:</h5>
              <p>
                Tosa higiênica, desembolo, remoção de sub pelo, hidratação e penteado.
              </p>
              <h5>Exigências:</h5>
              <p>
                Experiência comprovada 
                <br>
                Máquina e tesoura
              </p>
              <h5>Salário:</h5>
              <p>
                R$2.000,00 + R$300,00 de Gratificação <br>
                Vale Transporte <br>
                1 Folga extra mensal <br>
              </p>
              <h5>Empresa:</h5>
              <p>
                PET SHOP NOME
                <br><br>
                Banho & Tosa
              </p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success"><a href="https://wa.me/5511914682547?text=Ol%C3%A1%2C%20tudo%20bem%3F%0A%0AVim%20atrav%C3%A9s%20do%20Local%20Pet%20Me%20e%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es."
                  class="text-decoration-none text-light">Contato</a></button>
              <!--
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="border border-1 border-primary rounded-3 bg-light">
      <div class="col-12 py-3 px-3">
        <h2>Contrata Groomer</h2>
        <p><i class="bi bi-building"></i> <a href="https://www.instagram.com/doggie_academy_squad/"
            class="text-decoration-none">PET SHOP NOME</a> - <i class="bi bi-geo-alt-fill"></i> Osasco/SP</p>
        <p>Trabalho para profissional especializado</p>
        <a href="#" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop-3">Saiba mais</a>
        <!--https://acesse.one/localpetme-->
      </div>

      <div class="modal fade" id="staticBackdrop-3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <!--
                 <h1 class="modal-title fs-5" id="staticBackdropLabel">BANHISTA</h1>   
               -->
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
              <h3>GROOMER - (Osasco/SP)</h3>
              <p><i class="bi bi-building"></i> <a href="https://www.instagram.com/doggie_academy_squad/"
                  class="text-decoration-none">PET SHOP NOME</a> - <i class="bi bi-calendar-check"></i> 03/10/2024
              </p>
              <p>Procuramos um perfil totalmente capacitado para demandas espeficas</h5>
              <p>
                Procuramos um perfil totalmente capacitado para demandas espeficas
              </p>
              <h5>Exigências:</h5>
              <p>
                Experiência comprovada 
                <br>
                Especialista c/ tesouras.
              </p>
              <h5>Salário:</h5>
              <p>
               A combinar
              </p>
              <h5>Empresa:</h5>
              <p>
                PET SHOP NOME
                <br><br>
                Banho & Tosa
              </p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success"><a href="https://wa.me/5511914682547?text=Ol%C3%A1%2C%20tudo%20bem%3F%0A%0AVim%20atrav%C3%A9s%20do%20Local%20Pet%20Me%20e%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es."
                  class="text-decoration-none text-light">Contato</a></button>
              <!--
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              -->
            </div>
          </div>
        </div>
      </div>
    </div>



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
            <li><a href="#" class="text-decoration-none">Blog</a></li>
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