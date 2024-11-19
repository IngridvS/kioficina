<?php

class ServicoController extends Controller
{

    public function index()
    {
        $dados = array();
        $dados['titulo'] = 'Serviços - Ki Oficina';

        //Instanciar o modelo servico Two
        $servicoModel = new Servico();
        $servicoOrdem = $servicoModel->getServicosOrdem();  //busca
        
        $dados['servicos'] = $servicoOrdem;
        

        //var_dump($servicoOrdem);


        $this->carregarViews('servico', $dados);
    }

    public function detalhe($link){
       // var_dump($link);
       $dados = array();

       $servicoModel = new Servico();
       $detalheServico = $servicoModel->getServicoPorLink($link);


       // var_dump($detalheServico);

        if($detalheServico){
            $dados['titulo'] = $detalheServico['nome_servico'];
            $dados['detalhe'] = $detalheServico;
            $this->carregarViews('detalhes_servico', $dados);
        }else{
           $dados['titulo'] = 'Servico ki oficina';
            $this->carregarViews('servicos', $dados);
        }
    }
}
