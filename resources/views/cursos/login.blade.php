@include('layouts.head')
    <?php 
        session_start();
    ?>
    <div class="row" style="padding-left: 50px; padding-top: 70px;">
        @if (isset($_SESSION['user']))
            <p>Has iniciado sesion como {{$_SESSION['user'][0]->usr_name}}</p>
        @endif
        <div class="col-md-12"><h2>Registrarse!</h2></div>
        <form action="/houseLaravel/public/login/create" method="GET">
            <label>Usuario: <input type="text" name="usr_r"></label>
            <label> Contraseña <input type="text" name="pass_r"></label>
            <button type="submit">Registrarse</button>
        </form>
    </div>
    <div class="row" style="padding-left: 50px">
        <div class="col-md-12"><h2>Iniciar sesión!</h2></div>
        <form action="/houseLaravel/public/login/sign" method="GET">
            <label>Usuario: <input type="text" name="usr_l"></label>
            <label> Contraseña <input type="text" name="pass_l" id=""></label>
            <button type="submit">Login</button>
        </form>
    </div>
    <div class="row" style="padding-left: 50px">
        <div class="col-md-12"><h2>Cerrar sesión!</h2></div>
        <a href="{{route('login.out')}}">Cerrar sesion</a>
    </div>
@include('layouts.footer')

