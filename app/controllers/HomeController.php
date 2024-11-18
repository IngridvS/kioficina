<?php

class HomeController extends Controller
{
    // ele passa a usar tdo que está na controller
    // extends - consigo usar além 

    public function index()
    {

        $dados = array();

        $dados['mensagem'] = 'Bem vindo a KiOficina';

        //Instanciar o modelo servico

        $servicoModel = new Servico();
        $servicoAleatorio = $servicoModel->getServicoAleatorio();
        //  var_dump($servicoAleatorio);

        $dados['servicos'] = $servicoAleatorio;

        //var_dump($dados);


        //Instanciar a equipe
        $funcionarioModel = new FuncionarioModel();
        $servicoFuncionario = $funcionarioModel->getFuncionarioAleatorio();  //busca

        $dados['funcionarios'] = $servicoFuncionario;






        $this->carregarViews('home', $dados);
        //    faz referencia a algo interno, carregar dados 
    }
}
