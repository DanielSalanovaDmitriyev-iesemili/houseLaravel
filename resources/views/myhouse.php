<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MyHouse</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
    crossorigin="anonymous" />
  <link rel="stylesheet" href="/houseLaravel/resources/views/styles.css" />
  <link rel="icon" href="#">
</head>

<body>
  <header>
    <!-- Navegación principal -->
    <nav class="navbar navbar-expand-lg shadow-sm mb-5 py-0 fixed-top" style="background-color: #ff6600; color: #ffff;">
      <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-house-door-fill mr-2" fill="currentColor"
        xmlns="http://www.w3.org/2000/svg">
        <path
          d="M6.5 10.995V14.5a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5V11c0-.25-.25-.5-.5-.5H7c-.25 0-.5.25-.5.495z" />
        <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
      </svg>
      <a class="navbar-brand" href="#">MyHouse</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Poblaciones
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Palma</a>
              <a class="dropdown-item" href="#">Marratxí</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Inca</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Índice de precios</a>
          </li>
        </ul>
        <span id="menu-icons" class="navbar-text">
          <i class="far fa-envelope"></i>
          <i class="far fa-folder-open"></i>
          <i class="far fa-heart"></i>
          <i class="far fa-comment-alt"></i>
          <i class="fas fa-bars"></i>
        </span>
      </div>
    </nav>
    <!-- Título principal jumbotron -->
    <div class="jumbotron">
      <h1 class="display-6 py-1">Viviendas en Marratxí</h1>
      <p class="lead">La mejor vivienda para tí.</p>
      <!-- Menú comprar / alquilar -->
      <div class="container row">
        <ul class="nav nav-tabs col-md-6" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" id="list-comprar-tab" data-toggle="tab" href="#list-comprar" role="tab"
              aria-controls="list-comprar" aria-selected="true">Comprar</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="list-alquilar-tab" data-toggle="tab" href="#list-alquilar" role="tab"
              aria-controls="list-alquilar" aria-selected="false">Alquilar</a>
          </li>
        </ul>
        <div class="col-md-6 text-right">
          <i class="fas fa-list" data-toggle="tooltip" data-placement="top" title="Listado"></i>
          <i class="fas fa-th" data-toggle="tooltip" data-placement="top" title="Fotos"></i>
        </div>
      </div>
    </div>
  </header>
  <!-- Parte central -->
  <main class="container-fluid">
    <div class="row">
      <!-- Filtro -->
      <section class="col-md-3 pt-5">
        <form id="form-filter">
          <hr class="my-4" />
          <div class="form-group">
            <label class="font-weight-bold">Tipo de inmueble:</label>
            <select class="custom-select" name="hou_inm">
              <option selected value="vivienda">Vivienda</option>
              <option value="obra nueva">Obra nueva</option>
              <option value="terrenos">Terrenos</option>
            </select>
          </div>
          <hr class="my-4" />
          <div class="form-group">
            <label class="font-weight-bold" style="display: block;">Precio</label>
            <select class="custom-select" style="width: 100px;" name="hou_min_price">
              <option selected>MIN</option>
              <option value="100.000" selected>100.000</option>
              <option value="150.000">150.000</option>
              <option value="200.000">200.000</option>
              <option value="250.000">250.000</option>
              <option value="300.000">300.000</option>
              <option value="350.000">350.000</option>
              <option value="400.000">400.000</option>
              <option value="450.000">450.000</option>
              <option value="500.000">500.000</option>
            </select>
            <select class="custom-select" style="width: 100px;" name="hou_max_price">
              <option selected>MAX</option>
              <option value="150.000">150.000</option>
              <option value="200.000">200.000</option>
              <option value="250.000">250.000</option>
              <option value="300.000">300.000</option>
              <option value="350.000">350.000</option>
              <option value="400.000">400.000</option>
              <option value="450.000">450.000</option>
              <option value="500.000">500.000</option>
            </select>
          </div>
          <hr class="my-4" />
          <div class="form-group">
            <label class="font-weight-bold">Tipo de vivienda</label>
            <div class="form-check">
              <input id="pisos" class="form-check-input-T" type="checkbox" value="piso" id="defaultCheck1" name="hou_viv" checked/>
              <label class="form-check-label" for="defaultCheck1">
                Pisos
              </label>
            </div>

            <div class="form-check">
              <input id="adosados" class="form-check-input-T" type="checkbox" value="adosado" id="defaultCheck2" name="hou_viv"/>
              <label class="form-check-label" for="defaultCheck2">
                Adosados
              </label>
            </div>
            <div class="form-check">
              <input id="chalets" class="form-check-input-T" type="checkbox" value="chalet" id="defaultCheck2" name="hou_viv"/>
              <label class="form-check-label" for="defaultCheck3">
                Chalets
              </label>
            </div>
            <div class="form-check">
              <input id="rusticas" class="form-check-input-T" type="checkbox" value="casas rustica" id="defaultCheck2" name="hou_viv"/>
              <label class="form-check-label" for="defaultCheck4">
                Casas rústicas
              </label>
            </div>
          </div>

          <div id="fecha-publicacion" class="form-group">
            <label class="font-weight-bold">Fecha de publicación</label>
            <div class="form-check">
              <input id="indiferente" class="form-check-input-F" type="radio" name="fecha_pub" value="-1" checked />
              <label class="form-check-label" for="exampleRadios1">
                Indiferente
              </label>
            </div>
            <div class="form-check">
              <input id="h48" class="form-check-input-F" type="radio" name="fecha_pub" value="24x2" />
              <label class="form-check-label" for="exampleRadios2">
                Últimas 48 horas
              </label>
            </div>
            <div class="form-check">
              <input id="sem1" class="form-check-input-F" type="radio" name="fecha_pub" value="24x7" />
              <label class="form-check-label" for="exampleRadios2">
                La última semana
              </label>
            </div>
            <div class="form-check">
              <input id="mes1" class="form-check-input-F" type="radio" name="fecha_pub" value="24x31" />
              <label class="form-check-label" for="exampleRadios2">
                El último mes
              </label>
            </div>
          </div>

          <div style="text-align: center;">
            <button id="filtro" type="button" class="btn btn-warning" style="width: 180px;" >
              Buscar
            </button>
          </div>
        </form>
      </section>
  
      <!-- Listado de casas -->
      <section class="col-md-9">
        <!-- breadcrumb -->
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Casas</a></li>
            <li class="breadcrumb-item"><a href="#">Mallorca</a></li>
            <li class="breadcrumb-item active" aria-current="page">
              Marratxí
            </li>
          </ol>
        </nav>
      
        <div class="tab-content" id="myTabContent">
          <!-- Listado Casas comprar -->
          <div class="tab-pane fade show active" id="list-comprar" role="tabpanel" aria-labelledby="home-tab">
            <!-- Campo ordenación -->
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Ordernado por:</label>
              <div class="col-sm-10">
                <select name="order" class="form-control mb-3 w-25" id="">
                  <option value="MR" selected="selected">Más recientes</option>
                  <option value="B">Precio más bajo</option>
                  <option value="A">Pecio más alto</option>
                  <option value="R">Relevancia</option>
                </select>
              </div>

            </div>
            <div id="house_container_comprar">
                 <!-- House 1 -->
            <div class="card house mb-3">
              <div class="row no-gutters">
                <div class="col-md-4"> <img src="/houseLaravel/resources/views/img/house-1.jpg" class="card-img" alt="..." /></div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Chalet en marratxí vista alegre.</h5>
                    <div class="row">
                      <p class="card-text col-md-8">
                        ESPECTACULAR CASA RUSTICA REFORMADA. EN MARRATXI Finca rustica en un terreno de 7.000 m2, una
                        encantadora casa de 170 m...
                      </p>
                      <p class="col-md-4 text-right">
                        <span class="price d-block">650.000€</span>
                        <span class="price-drop d-block py-1">Ha bajado 75.000€</span>
                        <button type="button" class="btn btn-secondary" style="font-size:14px">
                          <i class="fas fa-bell"></i>
                          Avísame si baja
                        </button>
                      </p>
                    </div>
                    <p class="card-text p-0 m-0">
                      <small class="text-muted">Anuncio premium+</small> |
                      <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- House 2 -->
            <div class="card house mb-3">
              <div class="row no-gutters">
                <div class="col-md-4"> <img src="/houseLaravel/resources/views/img/house-2.jpg" class="card-img" alt="..." /></div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">
                      Chalet en Pont D´Inca. Unifamiliar en marratxí
                    </h5>
                    <div class="row">
                      <p class="card-text col-md-8">
                        Vivienda unifamiliar en Marratxí de 238m2 en planta, en parcela de 2000m2. Salón comedor con
                        chimenea, 4 dormitorios dob..
                      </p>
                      <p class="col-md-4 text-right">
                        <span class="price d-block">750.000€</span>
                        <button type="button" class="btn btn-secondary" style="font-size:14px">
                          <i class="fas fa-bell"></i>
                          Avísame si baja
                        </button>
                        <img src="/houseLaravel/resources/views/img/agencia-1.gif" class="pt-3" alt="">
                      </p>
                    </div>
                    
                    <p class="card-text p-0 m-0">
                      <small class="text-muted">Anuncio premium+</small> |
                      <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- House 3 -->
            <div class="card house mb-3">
              <div class="row no-gutters">
                <div class="col-md-4"> <img src="/houseLaravel/resources/views/img/house-3.png" class="card-img" alt="..." /></div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">
                      Dúplex casa / chalet en venta de 551 m2 en Es Garrovers Marratxí
                    </h5>
                    <div class="row">
                      <p class="card-text col-md-8">
                        Esta casa se encuentra en la zona residencial de Sa Cabaneta. Cuenta con una entrada grande, un
                        gran salón / comedor, un...
                      </p>
                      <p class="col-md-4 text-right">
                        <span class="badge badge-pill badge-info p-2">Oportunidad</span>
                        <span class="price d-block">475.000€</span>
                        <button type="button" class="btn btn-secondary" style="font-size:14px">
                          <i class="fas fa-bell"></i>
                          Avísame si baja
                        </button>
                      </p>
                    </div>
                    <p class="card-text p-0 m-0">
                      <small class="text-muted">Anuncio premium+</small> |
                      <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- House 4 -->
            <div class="card house mb-3">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="/houseLaravel/resources/views/img/house-4.png" class="card-img" alt="..." />
                  <div class="num-fotos">32 fotos</div>
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">
                      Chalet en marratxí vista alegre.
                    </h5>
                    <div class="row">
                      <p class="card-text col-md-8">
                        Finca rústica en solar de 15.000m2 aprox con piscina, vivienda de 490m2 aprox, 45m2 aprox de
                        salón (2 salones), chimenea...
                      </p>
                      <p class="col-md-4 text-right">
                        <span class="price d-block">650.000€</span>
                        <button type="button" class="btn btn-secondary" style="font-size:14px">
                          <i class="fas fa-bell"></i>
                          Avísame si baja
                        </button>
                      </p>
                    </div>
                    <p class="card-text p-0 m-0">
                      <small class="text-muted">Anuncio premium+</small> |
                      <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>

          <!-- Lista de alquiler -->
          <div class="tab-pane fade" id="list-alquilar" role="tabpanel" aria-labelledby="profile-tab">
            <div id="house_container_alquilar">
                <!-- House alquiler -->
            <div class="card house mb-3">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="/houseLaravel/resources/views/img/house-4.png" class="card-img" alt="..." />
                  <div class="num-fotos">32 fotos</div>
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">
                      Chalet en marratxí vista alegre.
                    </h5>
                    <div class="row">
                      <p class="card-text col-md-8">
                        Finca rústica en solar de 15.000m2 aprox con piscina, vivienda de 490m2 aprox, 45m2 aprox de
                        salón (2 salones), chimenea...
                      </p>
                      <p class="col-md-4 text-right">
                        <span class="price d-block">650.000€</span>
                        <button type="button" class="btn btn-secondary" style="font-size:14px">
                          <i class="fas fa-bell"></i>
                          Avísame si baja
                        </button>
                      </p>
                    </div>
                    <p class="card-text p-0 m-0">
                      <small class="text-muted">Anuncio premium+</small> |
                      <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
          <!-- End Lista de alquiler -->
        </div>
      </section>
    </div>
  </main>

  <!-- Footer -->
  <footer class="container-fuid">
    <div class="row">
      <section class="col-md-3">
        <h3>Mucho más...</h3>
        <ul>
          <li><a href="">¿Quiénes somos?</a></li>
          <li><a href="">Preguntas frecuentes</a></li>
          <li><a href="">Noticias del sector</a></li>
          <li><a href="">Sala de prensa</a></li>
        </ul>
      </section>

      <section class="col-md-3">
        <h3>Financiación</h3>
        <ul>
          <li><a href="">Cálculo cuotas hipoteca</a></li>
          <li><a href="">Cálculo gastos</a></li>
          <li><a href="">Ahorro fiscal</a></li>
        </ul>
      </section>

      <section class="col-md-3">
        <h3>Usuario</h3>
        <ul>
          <li><a href="">Inicio de sesión</a></li>
          <li><a href="">Registrarse</a></li>
          <li><a href="">Anunciar gratis</a></li>
          <li><a href="">Alertas</a></li>
        </ul>
      </section>

      <section class="col-md-3">
        <h3>Contacto</h3>
        <div>
          <form class="" action="index.html" method="post">
            <input type="text" name="" value="" />
            <button type="button" name="button" class="btn btn-warning">
              Enviar consulta
            </button>
          </form>
        </div>

        <div id="barra-social-media">
          <!-- Navigation bar with social media icons -->
          <a href="#" class="social-media-button"><i class="fab fa-twitter-square"></i></a>
          <a href="#" class="social-media-button"><i class="fab fa-instagram-square"></i></a>
          <a href="#" class="social-media-button"><i class="fab fa-facebook-square"></i></a>
          <a href="#" class="social-media-button"><i class="fab fa-youtube-square"></i></a>
        </div>
      </section>
    </div>

    <div id="copyright" class="row">
      <p class="col-md-6">Copyright © 2020 - MyHouse</p>
      <p class="col-md-6">
        Aviso Legal - Política de privacidad - Política de cookies
      </p>
    </div>
  </footer>

  <!-- Box superior -->
  <div id="alerta" class="card" style="width: 12rem;">
    <div class="card-body">
      <h5 class="card-title">Alertas similares</h5>
      <h6 class="card-subtitle mb-2 text-muted">
        Recibir por email anuncios con ofertas similares
      </h6>
      <p class="card-text" style="text-align: center;">
        <input type="email" class="form-control w-100" placeholder="Escribe tu mail" />
        <button class="btn btn-warning mt-3">Guardar búsqueda</button>
      </p>
    </div>
  </div>

  <script src="/houseLaravel/resources/views/index.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>

  <script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip();
    });
  </script>
</body>

</html>