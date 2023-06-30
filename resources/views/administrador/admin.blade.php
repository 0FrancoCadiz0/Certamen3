<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="../css/Configurar_Colores.min.css">
    <link href="{{ asset('css/administrador.css') }}" rel="stylesheet">
    <!-- style -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    
    <!-- /style -->
</head>
<body style='background-image: url("images/fondo.jpg"); background-repeat:no-repeat; background-size:cover'>
    <div class="bar bg-warning">
        <img src="images/logo.png" alt="logo" width="25%" height="100%">
    </div>
    <div class="container" id="containeradmin">
        <div class="sidebar" id="sidebar3">
            <h1 id="h11">Panel de Administrador</h1>
            <ul class="menu">
                <form method="GET" action="ruta_al_archivo_php_que_procesa_la_busqueda.php">
                    <input type="text" name="busqueda" placeholder="Ingrese el criterio de búsqueda">
                <button type="submit">Buscar perfiles</button>
                </form>  
                <br>
                <br>
                <li><a href="#">Gestionar Cuentas</a></li>
                <br>
                <br>
                <li><a href="#">Banear Fotografías</a></li>
            </ul>
        </div>
        <div class="content">
            <h2>Listar Perfiles</h2>
            <table class="table" id="table1">
                <tr>
                    <th id="th1">Nombre</th>
                    <th id="th1">Tipo de Cuenta</th>
                </tr>
                <tr>
                    <td id="td2">Usuario1</td>
                    <td id="td2">Administrador</td>
                </tr>
                <tr>
                    <td id="td2">Usuario2</td>
                    <td id="td2">Artista</td>
                </tr>
                <tr>
                    <td id="td2">Usuario3</td>
                    <td id="td2">Usuario Básico</td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>