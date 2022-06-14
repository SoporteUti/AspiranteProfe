<?php

//include 'header.blade.php';
//require 'header.blade';

?>

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
<nav class=' bg-dark embed-responsive'>
<header class=" d-flex justify-content-center py-3 flex-wrap border-bottom">
<ul class="nav nav-pills">
    <li class="nav-item"><a class="nav-link link-light" aria-current="page" href="{{url('Aspirantes/')}}">Aspirantes</a></li>
    <li class="nav-item"><a class="nav-link link-light" aria-current="page" href="#">Docentes</a></li>
    <li class="nav-item"><a class="nav-link text-light" aria-current="page" href="#">Modulos</a></li>
    <li class="nav-item"><a class="nav-link text-light" aria-current="page" href="#">Notas</a></li>

</ul>
</header>
</nav>
    <!--nav role="navigation" class="navbar navbar-collapse navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            Control para aspirantes a Profesorado
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
          </span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-menu">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{url('Aspirantes/create')}}">
                    Agregar de aspirantes
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                  Docentes
                </a>
            </li>
            <li class="class dropdown nav-item dropdown">
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
      </nav-->

<!--a href="{//{url('Aspirantes/create')}}">Registrar aspirantes</a-->
<br><br>
<a class="nav-link" href="{{url('Aspirantes/create')}}">
    Agregar de aspirantes
</a>
<br>


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
            <a class='nav-link active' href="{{url('/Aspirantes/'.$aspirante->numaspirante.'/edit')}}">Editar</a>
           |
                <form action={{url('/Aspirantes/'.$aspirante->numaspirante)}} method="POST">
                    @csrf  {{ method_field('DELETE')}}
                <input type="submit" class="btn btn-outline-danger" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
                </form>
    </tr>
    @endforeach
</tbody>
</table>


</body>
</html>
