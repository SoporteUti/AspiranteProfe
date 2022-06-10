@foreach ($aspirante as $aspirante)


<form action="{{url('/Aspirantes/'.$aspirante->id)}}" method="post">
    @csrf
    {{method_field('PATCH')}}
    @include('Aspirantes.form');

</form>
@endforeach
