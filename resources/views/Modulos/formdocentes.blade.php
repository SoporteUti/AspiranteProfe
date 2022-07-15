<div class=" row align-items-start" style="background-color: beige;">
    <?php //echo dd($docente); ?>
    
    <div class="col-md-4">
        <label class="form-label" for="nombre">Nombre </label>
        <input type="text" class="input-group-text has-validation" name="nombre" value={{isset($docente->nombre)?$docente->nombre:''}} >
        <script>
            
        </script>
    </div>
    <div class="col-md-4">
        <label class="form-label" for="Apellido">Apellido </label>
        <input type="text" class=" form-text input-group-text" name="apellido" value={{isset($docente->apellido)?$docente->apellido:''}} >
    </div>

    <div  class="col-md-4">
        <label class="form-label" for="e-mail">Correo Electronico </label>
        <input class="input-group-text" type="text" name="email" value={{isset($docente->email)?$docente->email:''}} >
    </div>
    <div  class="col-md-4">
        <label class="form-label" for="especialidad">Especialidad </label>
        <input class="input-group-text" type="text" name="especialidad" value={{isset($docente->especialidad)?$docente->especialidad:''}} >      
    </div>
    <div  class=" col-12 align-content-center">
        <input class=" btn btn-success" type="submit" class=" btn button-green" value="Guardar">
        <a class=" btn btn-secondary" href="{{url('Docentes/')}}">Regresar</a>
   
    </div>
         
</div>

  
