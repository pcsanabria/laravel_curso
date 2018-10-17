@extends("layout.social")

@section("content")

	@if(!empty($usuario))
		<p>{{$usuario->nombre}} {{$usuario->apellido}}</p>
	@else
		<p>El usuario no existe</p>
	@endif

@endsection