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
    
   
   

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
      <meta name="generator" content="Hugo 0.72.0">
      <title>Album example · Bootstrap</title>
    
      <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/album/">
    
   
   
    
      <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="https://icono-49d6.kxcdn.com/icono.min.css">
      <script src="jquery-3.3.1.min.js"></script>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script language="javascript">
        const myModal = document.getElementById('#addmodulo')
       // const myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', () => { myInput.focus() })
    </script>
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

        .modal-dialog{
  background-color:aqua;
  width:300px;
  padding: 10px 20px;
  margin: 20% auto;
  position: relative;
}
.modal{
  background-color: rgba(0,0,0,.8);
  position:fixed;
  top:0;
  right:0;
  bottom:0;
  left:0;
  opacity:0;
  pointer-events:none;
  transition: all 1s;
}
#addmodulo:target{
  opacity:1;
  pointer-events:auto;
}
      </style>


   
</head>
<body style="background-color: beige;">
    <header></header>
    <nav class=' navbar justify-content-center embed-responsive' style="background-color: darkred;">

        <a class="nav-link " aria-current="page" href="{{url('Aspirantes/')}}"> 
            <input class="btn btn-outline-light" value="Aspirantes">
        </a>
        <a class="nav-link " aria-current="page" href="{{url('Docentes/')}}">
            <input class="btn btn-outline-light" value="Docentes">
        </a>
        <a class="nav-link " aria-current="page" href="{{url('Modulos/')}}">
            <input class="btn btn-outline-light" data-togle="modal" value="Modulos">
        </a>
        <a class="nav-link " aria-current="page" href="{{url('Notas/')}}">
            <input class="btn btn-outline-light" value="Notas">
        </a>
    
    
    </nav>

    <div id="addmodulo" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <p>Content</p>
                </div>
            </div>
        </div>
    </div>

<br>
<br>
<a  class=" action " href="{{url('Docentes/create')}}" >
   <input class=" btn btn-primary" value="Agregar docente" class="fa fa-align-center" aria-hidden="true"></i>
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
        <th>Nombre</th>
        <th>Apellido</th>
        <th>e-mail</th>
        <th>Especialidad</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody class="tbody text-body">


        @foreach ($docentes as $docente)
    <tr class=" table-responsive-xl">

        <td>{{$docente->id}}</td>
        <td>{{$docente->nombre}}</td>
        <td>{{$docente->apellido}}</td>
        <td>{{$docente->email}}</td>
        <td>{{$docente->especialidad}}</td>
        <td>
            <a class=' nav-link' href="{{url('/Docentes/'.$docente->id.'/edit')}}">
                <input size="4" class=" btn btn-success" value="Editar" >
                <i class=" icon-open"></i></a>
                <form class=" was-validated" action={{url('/Docentes/'.$docente->id)}} method="POST">
                    @csrf  {{ method_field('DELETE')}}
                    <input type="submit" class="btn btn-danger" size="4" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
                </form>
    </tr>
    @endforeach
</tbody>
</table>


</body>
</html>
