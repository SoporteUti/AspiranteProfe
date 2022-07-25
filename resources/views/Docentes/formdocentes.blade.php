<div class=" form-group row align-items-start" style="background-color: beige;">
    <?php //echo dd($docente); ?>
    
    <div class="col-md-4">
        <label class="form-label" for="nombre">Nombre </label>
        <input type="text" class="form-control " name="nombre" value={{isset($docente->nombre)?$docente->nombre:''}} >
        <script>
            
        </script>
    </div>
    <div class="col-md-4">
        <label class="form-label" for="Apellido">Apellido </label>
        <input type="text" class=" form-control " name="apellido" value={{isset($docente->apellido)?$docente->apellido:''}} >
    </div>

    <div  class="col-md-4">
        <label class="form-label" for="e-mail">Correo Electronico </label>
        <input class="form-control" type="text" name="email" value={{isset($docente->email)?$docente->email:''}} >
    </div>
    <div  class="col-md-4">
        <label class="form-label" for="especialidad">Especialidad </label>
        <input class="form-control" type="text" name="especialidad" value={{isset($docente->especialidad)?$docente->especialidad:''}} >      
    </div>
    <div  class=" col-md-12 align-content-md-center">
        <input class=" btn btn-primary" type="submit" class=" btn button-green" value="Guardar">
        <a class=" btn btn-secondary" href="{{url('Docentes/')}}">Regresar</a>
   
    </div>
         
</div>

  
