<div >
    <?php //echo dd($aspirante); ?>
    <table class=" valign-middle table-responsive">
        <thead></thead>
        <tbody>
            <tr>
                <td><label class="form-label" for="numaspirante">Numero de Aspirante </label></td>
                <td><input class="input-group-text" type="text" name="numaspirante" value={{isset($aspirante->numaspirante)?$aspirante->numaspirante:''}} ><br>
                </td>
            </tr>
            <tr>
                <td><label class="form-label" for="nombre">Nombre </label></td>
                <td><input type="text" class="input-group-text" name="nombre" value={{isset($aspirante->nombre)?$aspirante->nombre:''}} ><br></td>
            </tr>
            <tr>
                <td><label class="form-label" for="Apellido">Apellido </label></td>
                <td><input type="text" class="input-group-text" name="apellido" value={{isset($aspirante->apellido)?$aspirante->apellido:''}} ><br>
                </td>
            </tr>
            <tr>
                <td><label class="form-label" for="e-mail">Correo Electronico </label></td>
                <td><input class="input-group-text" type="text" name="email" value={{isset($aspirante->email)?$aspirante->email:''}} ><br>
                </td>
            </tr>
            <tr>
                <td> <label class="form-label" for="carrera">Carrera </label></td>
                <td><input class="input-group-text" type="text" name="carrera" value={{isset($aspirante->carrera)?$aspirante->carrera:''}} ><br>
                </td>
            </tr>
            <tr>
                <td> <label class="form-label" for="anioegresob">Año de Egreso de Bachillerato </label></td>
                <td><input class="input-group-text" type="text" name="anioegresob" value={{isset($aspirante->anioegresob)?$aspirante->anioegresob:''}} ><br></td>
            </tr>
            <tr>
                <td><label class="form-label" for="anioingresoues">Año de Ingreso a la UES </label></td>
                <td><input class="input-group-text" type="text" name="anioingresoues" value={{isset($aspirante->anioingresoues)?$aspirante->anioingresoues:''}} ><br>
                </td>
            </tr>
            <tr>
                <td><label class="form-label" for="notapromb">Nota proemdio de bachillerato </label>
                </td>
                <td><input class="input-group-text" type="text" name="notapromb" value={{isset($aspirante->notapromb)?$aspirante->notapromb:''}} ><br></td>
            </tr>
            <tr>
                <td><label class="form-label" for="notaavanzo">Nota de prueba AVANZO </label></td>
                <td><input class="input-group-text" type="text" name="notaavanzo" value={{isset($aspirante->notaavanzo)?$aspirante->notaavanzo:''}} ><br></td>
            </tr>
            <tr>
                <td><label class="form-label" for="notapaes">Nota de prueba PAES </label></td>
                <td><input class="input-group-text" type="text" name="notapaes" value={{isset($aspirante->notapaes)?$aspirante->notapaes:''}} ><br>
                </td>
            </tr>
            <tr>
                <td><label class="form-label" for="pruebaling">Nota de prueba linguistica </label>
                </td>
                <td><input class="input-group-text" type="text" name="pruebaling" value={{isset($aspirante->pruebaling)?$aspirante->pruebaling:''}} ><br></td>
            </tr>
            <tr>
                <td><label class="form-label" for="pruebapsico">resultado de prueba psicologica </label></td>
                <td><input class="input-group-text" type="text" name="pruebapsico" value={{isset($aspirante->pruebapsico)?$aspirante->pruebapsico:''}} ><br></td>
            </tr>
            <tr>
                <td><input class="form-label" type="submit" class=" btn button-green" value="Guardar"><br></td>
                <td><a class=" url string" href="{{url('Aspirantes/')}}">Regresar</a></td>
            </tr>

        </tbody>

    </table>

    <br>

    </div>
