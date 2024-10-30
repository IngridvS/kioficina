<?php 

// definir url base da aplicação 
define("BASE_URL","http://localhost/kioficina/");
// criar const

//config do data base 
define("DB_HOST","smpsistema.com.br");
define("DB_NOME","");
define("DB_USER","");
define("DB_PASS","");

// sistema de autoload das class
spl_autoload_register(function($classe){

        if(file_exists('../app/controllers/'. $classe .'.php' )){
            require_once '../app/controllers/' . $classe .'.php';
        }

        if(file_exists('../app/models/'. $classe . '.php')){
            require_once '../app/models/' . $classe . '.php';
        }
        if(file_exists('../core/'. $classe .'.php')){
            require_once '../core/' . $classe .'.php';
            // var_dump($classe);
            
        }
});