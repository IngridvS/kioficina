<?php

class Controller{
    public function carregarViews ($view, $dados = array()){
        // carregar as views e os dados dessa pagina quando retorna vou extrair esses dados vou fazer um require da minha views 
    
        extract($dados);

        require '../app/views/'. $view .'.php';
        //        ../app/views/servico.php
    }

    
}