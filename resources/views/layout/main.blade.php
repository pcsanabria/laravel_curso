<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield("titulo")</title>
  
</head>
<body>
    {{-- 
    
    https://laravel.com/docs/5.7/blade
    BLADE JERARQUIA : 

    @show/@endsection : Terminan una seccion en un layout o plantilla respectivamente
    @extends : determina en donde se va a construir el contenido de una plantilla
    @section y @yield son directivas de blade para incluir codigo de la vista hija(plantilla) 
    @include()
    @component()

    @section() 
            <p>Hola Mundo</p>
    @show
    
    --}}
    
    @include("layout.header")
    @yield("contenido")
    @include("layout.footer")
</body>
</html>