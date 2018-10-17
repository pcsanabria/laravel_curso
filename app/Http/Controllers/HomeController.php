<?php

namespace App\Http\Controllers;

class HomeController extends Controller {
    
    public function index(){
        
        //Por defecto uno puede retornar un String o Array el cual se parsea como JSON
        //response(valor,Int codigo)
        //Response->withHeaders(Array headers)
        //Response->header(String clave,String valor)
        //redirect()->route()
        //Parametro : Array
            //$arr = [[],[],[]]
            //("nombre"=>[[],[],[]])
            //(compact($arr))
        
        //View : Helper === view()
        //View : Facase === View::make()
        //Cada vez que mostramos una vista hija y todas las vistas tienen que terminar en .blade.php 
        //directorio.vista ó directorio/vista
        return view("paginas.home");
        //Blade : Motor de Plantillas(view engine)
    }

}
