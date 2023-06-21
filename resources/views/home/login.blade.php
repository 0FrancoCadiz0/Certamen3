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
    
    <div class="container bg-light" id="ContainerLogin">
        <h2>Iniciar sesión</h2>
        <form>

            <input type="text" name="username" placeholder="Nombre de usuario" >
            <input type="password" name="password" placeholder="Contraseña" >
            <a href="">
                <input type="submit" value="Iniciar sesión">
            </a>
        </form>
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