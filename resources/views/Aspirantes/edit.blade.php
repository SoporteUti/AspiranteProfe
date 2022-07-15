<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Aspirantes a profesorado</title>
    <!--link href="../../../bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../../bootstrap/css/bootstrap.css">
    <link href="../../../bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <script src="../../../bootstrapjs/bootstrap.min.js"></script>
    <script src="../../../bootstrap/js/popper.min.js"></script>

    <script-- src="../../../bootstrap/js/bootstrap.bundle.min.js"></script-->
   

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
      <meta name="generator" content="Hugo 0.72.0">
      <title>Album example · Bootstrap</title>
    
      <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/album/">
    
    
    
      <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    
</head>

<body  beige;> 
    <nav class=' navbar justify-content-center embed-responsive' style="background-color: darkred;">

        <a class="nav-link " aria-current="page" href="{{url('Aspirantes/')}}"> 
            <input class="btn btn-outline-light" value="Aspirantes">
        </a>
        <a class="nav-link " aria-current="page" href="{{url('Docentes/')}}">
            <input class="btn btn-outline-light" value="Docentes">
        </a>
        <a class="nav-link " aria-current="page" href="{{url('Modulos/')}}">
            <input class="btn btn-outline-light" value="Modulos">
        </a>
        <a class="nav-link " aria-current="page" href="{{url('Notas/')}}">
            <input class="btn btn-outline-light" value="Notas">
        </a>
    
    
    </nav>
    

    <!--a href="{//{url('Aspirantes/create')}}">Registrar aspirantes</a-->
    <br><br><br>


@foreach ($aspirante as $aspirante)


<form id="actualizar" action="{{url('/Aspirantes/'.$aspirante->numaspirante)}}" method="post">
    @csrf
    {{method_field('PATCH')}}
    @include('Aspirantes.form');

</form>
@endforeach

</body>
</html>
<script>
$(document).ready(function() {
  $("#actualizar").validate({
    rules: {
        numaspirante:{
            required:true,
            number:treu,
            min:6
        }
        nombre : {
        required: true
        min:7
      },
      apellido: {
        required: true,
        
        min: 5
      },
      email: {
        required: true,
        email: true
      },
      carrera: {
        required:true,
        
      }
    }
  });
});
</script>
