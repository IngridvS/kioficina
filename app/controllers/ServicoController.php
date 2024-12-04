<?php

class ServicoController extends Controller
{
    private $servicoModel;

    public function __construct()
    {
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }

        $this->servicoModel = new Servico(); 
    }

    // front end - carregar as listas de serviços 
    public function index()
    {
        $dados = array();
        $dados['titulo'] = 'Serviços - Ki Oficina';

        //Instanciar o modelo servico Two
        
        $servicoOrdem = $this->servicoModel->getServicosOrdem();  //busca
        
        $dados['servicos'] = $servicoOrdem;
        

        //var_dump($servicoOrdem);


        $this->carregarViews('servico', $dados);
    }
    // detalhe do servico 
    public function detalhe($link){
       // var_dump($link);
       $dados = array();

      
       $detalheServico = $this->servicoModel->getServicoPorLink($link);


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

    // ***********************************************

    // Back end - DASHBOARD

    // ********************************************************************

    // 1- MTD LISTAR TODOS OS SERVIÇOS 

        public function listar(){

           

            if(!isset($_SESSION['userTipo']) || $_SESSION['userTipo'] !== 'funcionario'){
                header('Location: ' . BASE_URL);

                exit;
            }
            $dados = array();

            $dados['listaServico'] = $this->servicoModel->getTodosOrdem();
            // var_dump($dados['listaServico']);
            $dados['conteudo'] = 'dash/servico/listar';

            $this->carregarViews('dash/dashboard',$dados);
        }


        public function adicionar(){
            $dados = array();
            $dados['conteudo'] = 'dash/servico/adicionar';

            $this->carregarViews('dash/dashboard',$dados);
        }


        public function editar(){
            $dados = array();
            $dados['conteudo'] = 'dash/servico/editar';

            $this->carregarViews('dash/dashboard',$dados);
        }


        public function desativar(){
            $dados = array();
            $dados['conteudo'] = 'dash/servico/desativar';

            $this->carregarViews('dash/dashboard',$dados);
        }
   
   
    // 2- MTD PARA ADD SERVICOS

    // 3- MTD PARA EDITAR 

    // 4- MTD PARA DESATIVAR OS SERVICOS 



    



}
