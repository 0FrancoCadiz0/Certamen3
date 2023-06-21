<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/Configurar_Colores.min.css">
    <!-- style -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <!-- /style -->
</head>
<body style='background-image: url("images/fondo.jpg"); background-repeat:no-repeat; background-size:cover'>
    <div class="bar bg-warning">
        <img src="images/logo.png" alt="logo" width="25%" height="100%">
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="row d-flex">
                <div class="col-lg-8">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Encabezado 1</th>
                                    <th scope="col">Encabezado 2</th>
                                    <th scope="col">Encabezado 3</th>
                                    <th scope="col">Encabezado 4</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Dato 1</td>
                                    <td>Dato 2</td>
                                    <td>Dato 3</td>
                                    <td>Dato 4</td>
                                </tr>
                            </tbody>
                        </table>

                </div>
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem; margin-left:200px">
                        <img src="images/fondo.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Titulo</h5>
                            <input type="button" value="Editar" class="btn btn-secondary">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>