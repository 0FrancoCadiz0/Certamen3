<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/Configurar_Colores.min.css">
    <!-- style -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <!-- /style -->
</head>
<body style='background-image: url("images/fondo.jpg"); background-repeat:no-repeat; background-size:cover'>
    

    <form method="POST" action="{{route('artista.update',$img->id)}}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <div>
                <h1>Titulo: {{$img->titulo}}</h1>
                <img src="{{Storage::url($img->archivo)}}" alt="{{$img->titulo}}" width="15%" height="15%">
            </div>
            <div class="form-group">
            <label for="titulo" class="form-label">titulo:</label>
            <input type="text" id="titulo" name="titulo" class="form-control" value="{{$img->titulo}}">
            </div>
            <div class="form-group">
                <label for="archivo">Archivo:</label>
                <input type="file" name="archivo" class="form-control-file" id="archivo" accept="image/*" value="{{$img->archivo}}">
                <small class="form-text text-muted">Formato permitido (jpg, jpeg, png).</small>
            </div>
            <button type ="submit" class="btn btn-secondary">Editar</button>
        </div>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>