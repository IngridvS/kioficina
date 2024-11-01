<?php

class ServicoController extends Controller{

    public function index(){
        $dados = array();
        $dados ['titulo'] = 'Serviços - Ki Oficina';

        $this->carregarViews('servico',$dados);
    }
}