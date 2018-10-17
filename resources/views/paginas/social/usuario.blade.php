@extends("layout.social")

@section("content")
	<section id="usuario">
	@if(!empty($usuario))
		<header>
			<h2>{{$usuario->usuario}}</h2>
		</header>
		<img src="http://picsum.photos/200x200?random">
		<p>{{$usuario->nombre}} {{$usuario->apellido}}</p>
		<p>{{$usuario->email}}</p>
		<p><span>Fecha de ingreso : </span>{{$usuario->created_at}}</p>
		<footer>
			<a href="usuarios/actualizar/{{$usuario->id}}" class="material-icons">create</a>
			<a href="usuarios/borrar/{{$usuario->id}}" class="material-icons">delete</a>
		</footer>
	@else
		<p>El usuario no existe</p>
	@endif
	</section>
@endsection