<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Aspirantes a profesorado</title>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Control de requisitos para aspirantes a Profesorado</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-menu">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Inicio<span class="sr-only">(actual)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Enlace</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Expandir
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Enlace</a>
                <a class="dropdown-item" href="#">Otro enlace</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

<a href="{{url('Aspirantes/create')}}">Registrar aspirantes</a>
<table class="table table-light">
    <thead class="thead-light">
    <tr>
        <th></th>
        <th class="" colspan="6">NOMINA DE ASPIRANTES</th>
    </tr>
    <tr>
        <th>#</th>
        <th>numero de aspirantes</th>
        <th>nombre</th>
        <th>apellido</th>
        <th>e-mail</th>
        <th>carrera</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody class="tbody text-body">


        @foreach ($asp as $aspirante)
    <tr>

        <td>{{$aspirante->id}}</td>
        <td>{{$aspirante->numaspirante}}</td>
        <td>{{$aspirante->nombre}}</td>
        <td>{{$aspirante->apellido}}</td>
        <td>{{$aspirante->email}}</td>
        <td>{{$aspirante->carrera}}</td>
        <td>
            <a href="{{url('/Aspirantes/'.$aspirante->id.'/edit')}}">Editar</a>
           |
                <form action={{url('/Aspirantes/'.$aspirante->id)}} method="POST">
                    @csrf  {{ method_field('DELETE')}}
                <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
                </form>
    </tr>
    @endforeach
</tbody>
</table>


</body>
</html>
