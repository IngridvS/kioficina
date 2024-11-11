<?php 

// definir url base da aplicação 
define("BASE_URL","http://localhost/kioficina/");
// criar const

//Confinguração do Data Base
define("DB_HOST","smpsistema.com.br");
define("DB_NAME","u283879542_ingrid");
define("DB_USER","u283879542_ingrid");
define("DB_PASS","Ingrid@tipi02");
 
 
//Configuração do Email
define('EMAIL_HOST', 'smtp.hostinger.com');
define('EMAIL_PORT', '465');
define('EMAIL_USER', 'innovaclicktipi02@smpsistema.com.br');
define('EMAIL_PASS', 'Senac@tipi02');
 


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