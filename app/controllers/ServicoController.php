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
        
        // Selecionar um serviço aleatório
        $servicoodens = $servicoOrdem[array_rand($servicoOrdem)]; // Pega um serviço aleatório  
        $dados['servico'] = $servicoodens;
        

        //var_dump($servicoOrdem);


        $this->carregarViews('servico', $dados);
    }
}
