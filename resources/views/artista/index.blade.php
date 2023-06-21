<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/Configurar_Colores.min.css">
    <!-- style -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/stylesArtista.css') }}" rel="stylesheet">
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
                                    <th scope="col">Titulo</th>
                                    <th scope="col">Archivo</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Motivo baneo</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($imagenes as $img)
                                    @if ($img->baneada)
                                        <tr>
                                            <td class="align-middle">{{$img->titulo}}</td>
                                            <td class="align-middle">{{$img->archivo}}</td>
                                            <td class="align-middle">{{$img->baneada}}</td>
                                            <td class="align-middle">{{$img->motivo_ban}}</td>
                                        </tr>
                                    @endif
                                @endforeach
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
        <div class="row d-flex justify-content-end" style="margin-top: 15px">
            <div class="col-lg-3" >
                <div class="card" >
                    <div class="card-body">
                        <h5 class="card-title">Subir Imagen</h5>
                        <form method="POST" action="{{route('artista.store')}}" enctype="multipart/form-data" >
                            @csrf
                            <div class="form-group">
                                <label for="titulo">Título de la imagen:</label>
                                <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Ingrese el título">
                            </div>
                            <div class="form-group">
                                <label for="usuario">Nombre de usuario:</label>
                                <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Ingrese el nombre de usuario">
                            </div>
                            <div class="form-group">
                                <label for="archivo">Archivo:</label>
                                <input type="file" name="archivo" class="form-control-file" id="archivo" accept="image/*">
                                <small class="form-text text-muted">Formato permitido (jpg, jpeg, png).</small>
                            </div>
                            <button type="submit" class="btn btn-secondary">Publicar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>