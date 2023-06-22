<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro de Usuario</title>
        <link rel="stylesheet" href="../css/Configurar_Colores.min.css">
        <!-- style -->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <link href="{{ asset('css/styleRegister.css') }}" rel="stylesheet">
        
        <!-- /style -->
    </head>
    <body style='background-image: url("images/fondo.jpg"); background-repeat:no-repeat; background-size:cover'>
        <div class="bar bg-warning" id="barLogin"></div>
        <div class="container">
            <div class="row d-flex">
                <div class="col-4">
                    <div class="card">
                        <h3>Registro de Usuario</h3>
                        <form method="POST" action="{{ route('newArtista.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="username">Nombre de usuario</label>
                                <input type="text" id="username" name="username" required>
                            </div>
            
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" id="password" name="password" required>
                            </div>
            
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" id="nombre" name="nombre" required>
                            </div>
            
                            <div class="form-group">
                                <label for="apellido">Apellido</label>
                                <input type="text" id="apellido" name="apellido" required>
                            </div>
            
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-register">Registrarse</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <img name="img1"src="images/logo.png" alt="logo" width="26%" height="13%">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>