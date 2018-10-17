<?php

namespace App\Http\Controllers;

class TestController extends Controller{
    
    public function verHome($pepito = null){
    	return "Hola Mundo $pepito";
    }

}
