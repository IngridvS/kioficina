<?php

class HomeController extends Controller{
    // ele passa a usar tdo que está na controller
    // extends - consigo usar além 
    
    public function index(){

       $dados = array();
       
       $dados['mensagem'] = 'Bem vindo a KiOficina';
       $dados['nome'] = 'Ingrid';

       //var_dump($dados);

       $this -> carregarViews('home', $dados);
    //    faz referencia a algo interno, carregar dados 
    }
    
    
}