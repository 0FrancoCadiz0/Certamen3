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
    @if($errors->any())
    <div class="alert alert-warning mt-2">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li> 
            @endforeach
        </ul>
    </div>
    @endif 
    <div class="row">
        <div class="container bg-light" id="ContainerLogin">
            <h2>Iniciar sesión Artista </h2>
            <form method="POST"  action="{{route('usuariosAr.login')}}">
                @csrf
                <input type="text" name="user" id="user"placeholder="Nombre de usuario" >
                <input type="password" name="password" id="password" placeholder="Contraseña" >
                    <input type="submit" value="Iniciar sesión">
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
                <input type="text" name="user" placeholder="Nombre de usuario" >
                <input type="password" name="password" placeholder="Contraseña" >
                    <input type="submit" value="Iniciar sesión">
            </form>
        </div>
    </div>
    <img name="img1"src="images/logo.png" alt="logo" width="26%" height="13%">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>