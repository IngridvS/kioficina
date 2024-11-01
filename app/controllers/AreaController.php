<?php

class AreaController extends Controller{

    public function index(){
        $dados = array();
        $dados ['titulo'] = 'Area - Ki Oficina';

        $this->carregarViews('area',$dados);
    }
}