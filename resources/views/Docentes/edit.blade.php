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
  
 <link rel="stylesheet" href="style.css">
  <script src="/bootstrap/js/popper.min.js"></script>
  
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
            <input class="btn btn-outline-light" value="Modulos">
        </a>
        <a class="nav-link " aria-current="page" href="{{url('Notas/')}}">
            <input class="btn btn-outline-light" value="Notas">
        </a>
    
    
    </nav>

    <!--a href="{//{url('Aspirantes/create')}}">Registrar aspirantes</a-->
    <br><br><br>
     

@foreach ($doc as $docente)


<form class=" " name="registro" action="{{url('/Docentes/'.$docente->id)}}" method="post">
    @csrf
    {{method_field('PATCH')}}
    @include('Docentes.formdocentes');

</form>
@endforeach

</body>
</html>
