@extends("layout.social")

@section("content")
	<form action="buscar" method="get">
		<input type="text" name="nombre" placeholder="Busque por nombre...">
	</form>
	<ul>
	@foreach($usuarios as $usuario)
		<a href="usuario/{{$usuario->id}}">
			<li>{{$usuario->nombre}} {{$usuario->apellido}}</li>
		</a>
	@endforeach
	</ul>
@endsection