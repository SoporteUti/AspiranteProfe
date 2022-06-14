<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Aspirantes a profesorado</title>
    <link href="../../../bootstrap/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            Control para aspirantes a Profesorado
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu"
            aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('Aspirantes/create') }}">
                        Agregar de aspirantes
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Docentes
                    </a>
                </li>
                <!--li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Expandir
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Enlace</a>
                <a class="dropdown-item" href="#">Otro enlace</a>
              </div>
            </li-->
            </ul>
        </div>
    </nav>

    <!--a href="{//{url('Aspirantes/create')}}">Registrar aspirantes</a-->
    <br><br><br>


@foreach ($aspirante as $aspirante)


<form action="{{url('/Aspirantes/'.$aspirante->numaspirante)}}" method="post">
    @csrf
    <?php
    
    ?>
    {{method_field('PATCH')}}
    @include('Aspirantes.form');

</form>
@endforeach

</body>
</html>
