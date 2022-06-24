<div class=" row align-items-start" style="background-color:silver;">
    <?php //echo dd($aspirante); ?>
    
    <div class=" col-md-4" >
        <label class=" form-label" for="numaspirante">Numero de Aspirante </label>
        <input class=" input-group-text" type="text" name="numaspirante" required value={{isset($aspirante->numaspirante)?$aspirante->numaspirante:''}}  >
    </div>
    <div class="col-md-4">
        <label class="form-label" for="nombre">Nombre </label>
        <input type="text" class="input-group-text" name="nombre" value={{isset($aspirante->nombre)?$aspirante->nombre:''}} >
    </div>
    <div class="col-md-4">
        <label class="form-label" for="Apellido">Apellido </label>
        <input type="text" class="input-group-text" name="apellido" value={{isset($aspirante->apellido)?$aspirante->apellido:''}} >
    </div>

    <div  class="col-md-4">
        <label class="form-label" for="e-mail">Correo Electronico </label>
        <input class="input-group-text" type="text" name="email" value={{isset($aspirante->email)?$aspirante->email:''}} >
    </div>
    <div  class="col-md-4">
        <label class="form-label" for="carrera">Carrera </label>
        <input class="input-group-text" type="text" name="carrera" value={{isset($aspirante->carrera)?$aspirante->carrera:''}} >      
    </div>
    <div  class="col-md-4">
        <label class="form-label" for="anioegresob">Año de Egreso de Bachillerato </label></td>
        <input class="input-group-text" type="text" name="anioegresob" value={{isset($aspirante->anioegresob)?$aspirante->anioegresob:''}} >
    </div>
    <div  class="col-md-4">
        <label class="form-label" for="anioingresoues">Año de Ingreso a la UES </label>
        <input class="input-group-text" type="text" name="anioingresoues" value={{isset($aspirante->anioingresoues)?$aspirante->anioingresoues:''}} >
    </div>
    <div  class="col-md-4">
        <label class="form-label" for="notapromb">Nota proemdio de bachillerato </label>
        <input class="input-group-text" type="text" name="notapromb" value={{isset($aspirante->notapromb)?$aspirante->notapromb:''}} >
    </div>
    <div  class="col-md-4">
        <td><label class="form-label" for="notaavanzo">Nota de prueba AVANZO </label></td>
        <td><input class="input-group-text" type="text" name="notaavanzo" value={{isset($aspirante->notaavanzo)?$aspirante->notaavanzo:''}} >    
    </div>
    <div  class="col-md-4">
        <label class="form-label" for="notapaes">Nota de prueba PAES </label></td>
        <input class="input-group-text" type="text" name="notapaes" value={{isset($aspirante->notapaes)?$aspirante->notapaes:''}} >
    </div>
    <div  class="col-md-4">
        <label class="form-label" for="pruebaling">Nota de prueba linguistica </label>
        <input class="input-group-text" type="text" name="pruebaling" value={{isset($aspirante->pruebaling)?$aspirante->pruebaling:''}} >
    </div>
    <div  class="col-md-4">
        <label class="form-label" for="pruebapsico">resultado de prueba psicologica </label>
        <input class="input-group-text" type="text" name="pruebapsico" value={{isset($aspirante->pruebapsico)?$aspirante->pruebapsico:''}} ><br></td>
   
    </div>
    <div  class=" col-12 align-self-xl-center">
        <input class=" btn btn-success" type="submit" class=" btn button-green" value="Guardar">
        <a class=" btn btn-secondary" href="{{url('Aspirantes/')}}">Regresar</a>
   
    </div>


    
         
</div>

  
