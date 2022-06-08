mostrar la lista de estudiantes
<a href="{{url('Aspirantes/create')}}">Registrar aspirantes</a>
<table class="table table-light">
    <thead class="thead-light">
    <tr>
        <th>#</th>
        <th>numero de aspirantes</th>
        <th>nombre</th>
        <th>apellido</th>
        <th>e-mail</th>
        <th>carrera</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody class="tbody text-body">


        @foreach ($asp as $aspirante)
    <tr>

        <td>{{$aspirante->id}}</td>
        <td>{{$aspirante->numaspirante}}</td>
        <td>{{$aspirante->nombre}}</td>
        <td>{{$aspirante->apellido}}</td>
        <td>{{$aspirante->email}}</td>
        <td>{{$aspirante->carrera}}</td>
        <td>
            <a href="{{url('/Aspirantes/'.$aspirante->id.'/edit')}}">Editar</a>


            |
                <form action={{url('/Aspirantes/'.$aspirante->id)}} method="POST">
                    @csrf
                    {{ method_field('DELETE')}}
                <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
                </form> Borrar</td>
    </tr>
    @endforeach
</tbody>
</table>
