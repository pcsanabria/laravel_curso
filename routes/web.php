<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::match(["hola","chau"],"")
/*
Route::any("/hola")->group(function(){
    Route::get("/","");
    Route::post("/","");
});
*/

Route::get("/","HomeController@index");

Route::get("/social","HomeSocialController@index");
Route::get("/test","HomeSocialController@formulario");

//Route::get("/usuarios","UsuariosController@index");
Route::get("/otra","UsuariosController@otro");
//Route::get("/buscar","UsuariosController@buscar");
//Route::get("/usuario/{id}","UsuariosController@usuario");

Route::get("/shop","HomeCommerceController@index");


Route::prefix("usuarios")->group(function(){

    Route::get("/","UsuariosController@index");
    Route::get("/{id}","UsuariosController@usuario")->where(["id"=>"[0-9]"]);
    Route::get("/buscar","UsuariosController@buscar");
    Route::get("/actualizar/{id}","UsuariosController@actualizar");
    Route::get("/borrar/{id}","UsuariosController@borrar");
    //->name("listado"); //usuarios.listado

});


/*
//Red Social
Route::get("/perfil","PerfilController@index");
Route::get("/chat","ChatController@index");

//E-Commerce
Route::get("/cuenta","CuentaController@index");
Route::get("/productos","ProductosController@index");
Route::get("/carrito","CarritoController@index");
*/

//Parametro dinmaico obligatorio
//Route::get('/{id}', "TestController@verHome");
//Parametro dinamico opcional
//Route::get('/{id?}', "TestController@verHome")
//Vadicacion por expresiones regulares en ruta
        //->where("id","[A-Za-z0-9]{}");

/*
Route::get("/",function(){

})->name("home");
*/

//Helper / Facades
//route(String nombre) : 
//redirect(String url?)->route(String nombre) : 

//redirect("/home")
//redirect()->route("home")

/*
Route::prefix("usuarios")->group(function(){
    //usuarios/ver/
    Route::get("ver")
    //usuarios/editar
    Route::get("editar")
    //usuarios/eliminar
    Route::get("eliminar")
});
*/

/*

https://laravel.com/docs/5.7/routing#fallback-routes
FALLBACK : Rutas que no coinciden con ninguna otra ruta definida en el programa y que no queremos mostrar un 404 : 

Route::fallback(function(){

});

*/

/*
caracter especial

    grupo: 
        [] : grupos
        X|Z|Y : ó X ó Y ó Z
        X-Z : rango de X a Z
        \w : caracteres alfanumericos(me parece que el guion bajo tambien)
        \W : Negacion de \w
        \d : digitos
        \D : ningun numero
        \. : cualquier caracter
        \s : espacios , tabulaciones y saltos de linea
        \S : ningun tipo de espacio


    cantidad:
        X? : 0 o 1 instancia de X
        x* : 0 o muchas instancias de x
        x+ : 1 o muchas instancias de x
        x{M,N} : x* === x{0,} = donde M es el minimo y N el maximo

    ubicacion:
        ^(caret) : El inicio de todo un string 
        $ : El final de todo un string
        \b(boundry) : El inicio o final de un string
        \B : Que no este ni al final ni al principio de un string

    \caracter

caracter literal
    Ej.: ab
        \caracter
*/