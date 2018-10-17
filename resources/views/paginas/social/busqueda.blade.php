@extends("layout.social")

@section("content")
	<h3>Resultados: </h3>
	<ul>
	@foreach($usuario as $user)
		<li>{{$user->nombre}} {{$user->apellido}}</li>
	@endforeach
	</ul>
@endsection