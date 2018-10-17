@extends("layout.social")

@section("content")
    <h2>Home - Social</h2>
    {{-- bcrypt/blowfish  
    
        password_verify()
        password_needs_rehash()
        {{ password_hash("123456",PASSWORD_DEFAULT,[
            "cost" => 16
        ]) }}

    --}}
    <form action="test" method="get">
        @csrf
        <input type="text" name="nombre" placeholder="Nombre" pattern="[A-Za-z\s]{2,50}" required >
        <input type="email" name="email" placeholder="Email" require>
        <input type="password" name="password" placeholder="Contraseña" required>
        <button>Crear Cuenta</button>
    </form>
@endsection