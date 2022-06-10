<div >
    <table>
        <thead></thead>
        <tbody>
            <tr>
                <td><label for="numaspirante">Numero de Aspirante </label></td>
                <td><input type="text" name="numaspirante" value={{isset($aspirante->numaspirante)?$aspirante->numaspirante:''}} >
                </td>
            </tr>
            <tr>
                <td><label for="nombre">Nombre </label></td>
                <td><input type="text" name="nombre" value={{isset($aspirante->nombre)?$aspirante->nombre:''}} ><br></td>
            </tr>
            <tr>
                <td><label for="Apellido">Apellido </label></td>
                <td><input type="text" name="apellido" value={{isset($aspirante->apellido)?$aspirante->apellido:''}} ><br>
                </td>
            </tr>
            <tr>
                <td><label for="e-mail">Correo Electronico </label></td>
                <td><input type="text" name="email" value={{isset($aspirante->email)?$aspirante->email:''}} ><br>
                </td>
            </tr>
            <tr>
                <td> <label for="carrera">Carrera </label></td>
                <td><input type="text" name="carrera" value={{isset($aspirante->carrera)?$aspirante->carrera:''}} ><br><br>
                </td>
            </tr>
            <tr>
                <td> <label for="anioegresob">Año de Egreso de Bachillerato </label></td>
                <td><input type="text" name="anioegresob" value={{isset($aspirante->anioegresob)?$aspirante->anioegresob:''}} ><br><br></td>
            </tr>
            <tr>
                <td><label for="anioingresoues">Año de Ingreso a la UES </label></td>
                <td><input type="text" name="anioingresoues" value={{isset($aspirante->anioingresoues)?$aspirante->anioingresoues:''}} ><br><br>
                </td>
            </tr>
            <tr>
                <td><label for="notapromb">Nota proemdio de bachillerato </label>
                </td>
                <td><input type="text" name="notapromb" value={{isset($aspirante->notapromb)?$aspirante->notapromb:''}} ><br><br></td>
            </tr>
            <tr>
                <td><label for="notaavanzo">Nota de prueba AVANZO </label></td>
                <td><input type="text" name="notaavanzo" value={{isset($aspirante->notaavanzo)?$aspirante->notaavanzo:''}} ><br><br></td>
            </tr>
            <tr>
                <td><label for="notapaes">Nota de prueba PAES </label></td>
                <td><input type="text" name="notapaes" value={{isset($aspirante->notapaes)?$aspirante->notapaes:''}} ><br><br>
                </td>
            </tr>
            <tr>
                <td><label for="pruebaling">Nota de prueba linguistica </label>
                </td>
                <td><input type="text" name="pruebaling" value={{isset($aspirante->pruebaling)?$aspirante->pruebaling:''}} ><br><br></td>
            </tr>
            <tr>
                <td><label for="pruebapsico">resultado de prueba psicologica </label></td>
                <td><input type="text" name="pruebapsico" value={{isset($aspirante->pruebapsico)?$aspirante->pruebapsico:''}} ><br><br></td>
            </tr>
            <tr>
                <td><input type="submit" value="Guardar"><br></td>
                <td><a href="{{url('Aspirantes/')}}">Regresar</a></td>
            </tr>

        </tbody>

    </table>

    <br>

    </div>
