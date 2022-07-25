<div class=" row align-items-start" style="background-color: beige;">
    <?php //echo dd($docente); ?>
    
    <div class="col-md-4">
        <label class="form-label" for="id modulo">Id de Modulo </label>
        <input type="text" class="input-group-text has-validation" name="idmodulo" value={{isset($docente->nombre)?$docente->nombre:''}} >
        <script>
            
        </script>
    </div>
    <div class="col-md-4">
        <label class="form-label" for="Nombre">Módulo </label>
        <input type="text" class=" form-text input-group-text" name="nombremodulo" value={{isset($docente->apellido)?$docente->apellido:''}} >
    </div>
   
    <br>
    <div  class=" col-12 align-content-center">
        <input class=" btn btn-success" type="submit" class=" btn button-green" value="Guardar">
        <a class=" btn btn-secondary" href="{{url('Modulos/')}}">Regresar</a>
   
    </div>
         
</div>

  
