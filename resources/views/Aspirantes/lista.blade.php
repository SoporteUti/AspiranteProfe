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
    
    <link rel="stylesheet" href="../../../bootstrap/css/bootstrap.css">
    <link href="../../../bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <script src="../../../bootstrapjs/bootstrap.min.js"></script>
    <script src="../../../bootstrap/js/popper.min.js"></script>

    <script src="../../../bootstrap/js/bootstrap.bundle.min.js"></script>
   

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
      <meta name="generator" content="Hugo 0.72.0">
      <title>Album example · Bootstrap</title>
    
      <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/album/">
    
    
    
      <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="https://icono-49d6.kxcdn.com/icono.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    
      <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          -ms-user-select: none;
          user-select: none;
        }
    
        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
      </style>
    
   
</head>
<body style="background-color: silver;">
    <header></header>
<nav class=' navbar justify-content-center embed-responsive' style="background-color: darkred;">

    <a class="nav-link " aria-current="page" href="{{url('Aspirantes/')}}"> 
        <input class="btn btn-outline-light" value="Aspirantes">
    </a>
    <a class="nav-link " aria-current="page" href="{{url('Docentes/')}}">
        <input class="btn btn-outline-light" value="Aspirantes">
    </a>
    <a class="nav-link " aria-current="page" href="{{url('Modulos/')}}">
        <input class="btn btn-outline-light" value="Aspirantes">
    </a>
    <a class="nav-link " aria-current="page" href="{{url('Notas/')}}">
        <input class="btn btn-outline-light" value="Aspirantes">
    </a>


</nav>



<br>
<br>
<a  class=" action " href="{{url('Aspirantes/create')}}" >
   <input class=" btn btn-primary" value="Agregar aspriantes" <i class="fa fa-align-center" aria-hidden="true"></i>>
</a>
<br>
<br>

<table class="table table-bordered table-light embed-responsive w-75" align="center" >
    <thead class="thead-light">
    <tr>
        <th></th>
        <th class=" text-center" colspan="6">NOMINA DE ASPIRANTES</th>
    </tr>
    <tr class=" table-primary">
        <th >#</th>
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
    <tr class=" table-responsive-xl">

        <td>{{$aspirante->id}}</td>
        <td>{{$aspirante->numaspirante}}</td>
        <td>{{$aspirante->nombre}}</td>
        <td>{{$aspirante->apellido}}</td>
        <td>{{$aspirante->email}}</td>
        <td>{{$aspirante->carrera}}</td>
        <td>
            <a class=' nav-link' href="{{url('/Aspirantes/'.$aspirante->numaspirante.'/edit')}}">
            <input size="4" class=" btn btn-success" value="Editar" > <i class=""></i>
            </a><i class=" icon-open"></i>
                <form action={{url('/Aspirantes/'.$aspirante->numaspirante)}} method="POST">
                    @csrf  {{ method_field('DELETE')}}
                <input type="submit" class="btn btn-danger" size="4" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
                </form>
    </tr>
    @endforeach
</tbody>
</table>


</body>
</html>
