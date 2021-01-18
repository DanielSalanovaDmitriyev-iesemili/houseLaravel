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
            <a class="nav-link" href="/houseLaravel/public/tuto">Home <span class="sr-only">(current)</span></a>
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
          <li>
            @yield('user')
          </li>
        </ul>
        <span id="menu-icons" class="navbar-text">
          <a href="/houseLaravel/public/login"><i class="far fa-envelope"></i></a>
          <i class="far fa-folder-open"></i>
          <i class="far fa-heart"></i>
          <i class="far fa-comment-alt"></i>
          <i class="fas fa-bars"></i>
        </span>
      </div>
    </nav>
</header>