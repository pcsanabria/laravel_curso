<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeSocialController extends Controller {
    
    public function index(){
        return view("paginas.social.home");
    }

    public function formulario(Request $request){

        //QUERY BUILDER Y ORM
        
        //DB::connection()
        //DB::connection()->pdoInstance()
        //DB::connection("sqlite")->
        
        /*
        DB::select("SELECT ...WHERE col = ?",[])
        DB::insert("INSERT ... VALUES(:nombre,:apellido)",[":nombre"=>"Horacio",":apellido"=>"Gutierrez"])
        DB::update("UPDATE ...")
        DB::delete("DELETE ...")
        DB::statement()
        */
        
        //$usuario = DB::table("usuarios")->get(); => Array
            //$usuario[0]->nombre;
            //SELECT * FROM usuarios;
            
        //DB::table("usuario")->first();
            //SELECT * FROM usuarios LIMIT 1;

        $usuarios = DB::table("usuarios")->first();
        //stdClass
        dd($usuarios->nombre);


        //$valores = $request->all();
        //$valores = $request->input("nombre");
        //$valores = $request->nombre;
        //$valores = $request->query();
        //$valores = $request->except("nombre");
        //$valores = $request->only("nombre","apellido");

        //Todos los datos recibidos vienen pre trimeados y en caso de vacios se pre castean a null
        //dd($valores);
        
        //$request->flash()
        //$request->flashOnly()
        //$request->flashExcept("password")

        //redirect()->withInputs($request->only());
        //redirect()->withInputs($request->except());
        //response()->json();
        //return []

        //CSRF : Cross Site Rresource Forgering 

        //dd($request->except("_token"));


    }
}
