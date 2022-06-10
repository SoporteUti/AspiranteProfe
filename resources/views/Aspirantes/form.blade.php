<div >
    <label for="numaspirante">Numero de Aspirante </label>
    <input type="text" name="numaspirante" value={{isset($aspirante->numaspirante)?$aspirante->numaspirante:''}} ><br>

     <label for="nombre">Nombre </label>
     <input type="text" name="nombre" value={{isset($aspirante->nombre)?$aspirante->nombre:''}} ><br>

     <label for="Apellido">Apellido </label>
     <input type="text" name="apellido" value={{isset($aspirante->apellido)?$aspirante->apellido:''}} ><br>

      <label for="e-mail">Correo Electronico </label>
      <input type="text" name="email" value={{isset($aspirante->email)?$aspirante->email:''}} ><br>

     <label for="carrera">Carrera </label>
     <input type="text" name="carrera" value={{isset($aspirante->carrera)?$aspirante->carrera:''}} ><br><br>

     <label for="anioegresob">Año de Egreso de Bachillerato </label>
     <input type="text" name="anioegresob" value={{isset($aspirante->anioegresob)?$aspirante->anioegresob:''}} ><br><br>

     <label for="anioingresoues">Año de Ingreso a la UES </label>
     <input type="text" name="anioingresoues" value={{isset($aspirante->anioingresoues)?$aspirante->anioingresoues:''}} ><br><br>

     <label for="notapromb">Nota proemdio de bachillerato </label>
     <input type="text" name="notapromb" value={{isset($aspirante->notapromb)?$aspirante->notapromb:''}} ><br><br>

     <label for="notaavanzo">Nota de prueba AVANZO </label>
     <input type="text" name="notaavanzo" value={{isset($aspirante->notaavanzo)?$aspirante->notaavanzo:''}} ><br><br>

     <label for="notapaes">Nota de prueba PAES </label>
     <input type="text" name="notapaes" value={{isset($aspirante->notapaes)?$aspirante->notapaes:''}} ><br><br>

     <label for="pruebaling">Nota de prueba linguistica </label>
     <input type="text" name="pruebaling" value={{isset($aspirante->pruebaling)?$aspirante->pruebaling:''}} ><br><br>

     <label for="pruebapsico">resultado de prueba psicologica </label>
     <input type="text" name="pruebapsico" value={{isset($aspirante->pruebapsico)?$aspirante->pruebapsico:''}} ><br><br>


    </div>

        <input type="submit" value="Guardar"><br>
        <a href="{{url('Aspirantes/')}}">Regresar</a>
