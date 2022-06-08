<div >
    <label for="numaspirante">Numero de Aspirante </label>
    <input type="text" name="numaspirante" value={{isset($aspirante->numaspirante)?$aspirante->numaspirante:''}} ><br>

     <label for="nombre">Nombre </label>
     <input type="text" name="nombre" value={{isset($aspirante->nombre)?$aspirante->numaspirante:''}} ><br>

     <label for="Apellido">Apellido </label>
     <input type="text" name="apellido" value={{isset($aspirante->apellido)?$aspirante->numaspirante:''}} ><br>

      <label for="e-mail">Correo Electronico </label>
      <input type="text" name="email" value={{isset($aspirante->email)?$aspirante->numaspirante:''}} ><br>

     <label for="carrera">Carrera </label>
     <input type="text" name="carrera" value={{isset($aspirante->carrera)?$aspirante->numaspirante:''}} ><br><br>

    </div>

        <input type="submit" value="Guardar"><br>
        <a href="{{url('Aspirantes/')}}">Regresar</a>
