@extends("layout.social")

@section("content")
	<form action="buscar" method="get">
		<input type="text" name="nombre" placeholder="Busque por nombre...">
	</form>
	<section id="card-section">
		@foreach($usuarios as $usuario)
		<div class="card">
			<img src="http://picsum.photos/200x200?random">
			<h3>{{$usuario->usuario}}</h3>
			<p>{{$usuario->nombre}} {{$usuario->apellido}}</p>
			<a href="usuarios/{{$usuario->id}}">
				ver mas ...
			</a>
			<a href="usuarios/actualizar/{{$usuario->id}}" class="material-icons">create</a>
			<a href="usuarios/borrar/{{$usuario->id}}" class="material-icons">delete</a>
		</div>
		@endforeach
	</section>
@endsection