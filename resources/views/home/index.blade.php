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
    <style>
        .login-link {
            font-size: 24px;
            text-decoration: none;
            color: #000;
            padding: 10px;
            background-color: #E1F2FB;
            border: 1px solid #3498DB;
            border-radius: 5px;
            display: inline-flex;
            align-items: center;
        }

        .login-link .arrow-icon {
            font-size: 30px;
            margin-left: 10px;
        }

        .bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #E6F0F3;
            padding: 10px;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body style='background-image: url("images/fondo.jpg"); background-repeat:no-repeat; background-size:cover'>
    
    <div class="bar bg-warning">
        <img src="images/logo.png" alt="logo" width="25%" height="100%">
        <a href="{{route('home.login')}}" class="login-link">Iniciar sesión <i class="fas fa-arrow-right arrow-icon"></i></a>
        <div class="form-group">
            <label for="categoria">Filtrar:</label>
            <select class="form-control" id="Filtrar" name="Filtrar" style="width: 200px;">
                <option value="">Selecciona Artista</option>
                @foreach ($u as $user)
                    @if($user->perfil_id==2)
                        <option value="{{ $user->user}}">{{$user->user}}</option>
                    @endif
                    
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-secondary">Filtar</button>
    </div>

    <div class="container-fluid">
        <div class="container">
            <div class="row d-flex">
                <div class="col-lg-8">
                    @foreach ($imagenes as $img)
                    <div class="col-lg-4">
                        <div class="card" style="width: 18rem; margin-left:500px">
                            <div class="card-body">
                                <h5 class="card-title">Titulo: {{$img->titulo}}</h5>
                                <h6>Artista: {{$img->cuenta_user}}</h6>
                                <img src="{{Storage::url($img->archivo)}}" class="card-img-top" alt="{{$img->titulo}}">
                            </div>
                        </div>
                    </div>
                    <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>
</html>
