<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio De Sesion</title>
    <link rel="stylesheet" href="../css/Configurar_Colores.min.css">
    <!-- style -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <!-- /style -->
    
</head>
<body style='background-image: url("images/fondo.jpg"); background-repeat:no-repeat; background-size:cover'>
    <div class="bar bg-warning" id="barLogin"></div>
    <div class="row">
        <div class="container bg-light" id="ContainerLogin">
            <h2>Iniciar sesión Artista </h2>
            <form>

                <input type="text" name="username" placeholder="Nombre de usuario" >
                <input type="password" name="password" placeholder="Contraseña" >
                <a href="">
                    <input type="submit" value="Iniciar sesión">
                </a>
                <br>
                <br>

                <a href="{{route('home.register')}}">
                    <button type="button"  class="bg-warning btn btn-outline-dark" disabled>Crear una Cuenta</button>
                </a>
            </form>
        </div>
        <div class="container bg-light" id="ContainerLogin">
            <h2>Iniciar sesión Administrador </h2>
            <form>

                <input type="text" name="username" placeholder="Nombre de usuario" >
                <input type="password" name="password" placeholder="Contraseña" >
                
                <a href="{{ route('administrador.admin') }}" class="button-link">
                    <input type="button" value="Iniciar sesión" class="custom-button">
                </a>

<style>
    .button-link {
        display: inline-block;
        background-color: #f9ca2d;
        color: #fff;
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 4px;
        font-weight: bold;
        cursor: pointer;
    }

    .custom-button {
        border: none;
        background: none;
        color: #fff;
        font-size: inherit;
        cursor: pointer;
    }
</style>

            </form>
        </div>
    </div>
    <img name="img1"src="images/logo.png" alt="logo" width="26%" height="13%">

    <button class="btn btn-light"></button>
    <button class="btn btn-dark"></button>
    <button class="btn btn-primary"></button>
    <button class="btn btn-secondary"></button>
    <button class="btn btn-info"></button>
    <button class="btn btn-success"></button>
    <button class="btn btn-warning"></button>
    <button class="btn btn-danger"></button>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>