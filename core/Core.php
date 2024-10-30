<?php

class Core{

    // fazer mapamento de site (rotas)
    // Método iniciar rotas 
    public function executar(){

        $url = '/';
        //var_dump($url);
        // var_dump ele mostra na tela as infomações e o tipo que coloque dentro da função

        // Verificar se variavel url está definida na $_GET
        if(isset($_GET['url'])){
             // isset no PHP é usada para verificar se uma variável foi definida e se seu valor não é null. Ela retorna true se a variável existir e tiver algum valor (diferente de null), e false caso contrário. Essa função é muito útil para verificar a existência de variáveis antes de usá-las e evitar erros
            $url .= $_GET['url'];
            
        }
        // var_dump($url);


        // definindo um array para armazenar um parametro da URL 
        $parametro = array();
       
        
        //  verifica se url não está vazia "!" e não é apenas uma /
        //   // se ela não for vazia preciso saber oq tem dentro dela
        if(!empty($url) && $url != '/'){

            // empty verifica variável se está vazio

            // servicos/especialidade/nomeServico
            //controller/ação/parametro = id

            $url = explode('/', $url);
            // var_dump($url);

            // explode no php quero separação toda vez que encontra uma /

            // servicos[0]
            //especialidade [1]
            // nomeServicos [2]
            //transformou em um array 


            array_shift($url);

            // remover os comandos vazio da minha variável 

            // var_dump($url);

            // $url[0] obter o controller atual
            // ucfirst - coloca a primeia letra em maiúscula 
            // concatenar  'Controller' ao nome para seguir o padrão 
            $controladorAtual = ucfirst($url[0]) . 'Controller';
            // controladorAtual : ServicosController 

            //var_dump($controladorAtual);

            array_shift($url);
            //var_dump($url);
            // especialidade[0]
            // nomeservico = [1]

            // verificar se existe uma ação na url 

            if(isset($url[0]) && !empty ($url[0])){
                $acaoAtual = $url[0];
                // especialidade
                //var_dump("Nome da ação atual ".$acaoAtual);
                array_shift($url);
            }else{
                $acaoAtual = 'index';
                //var_dump($acaoAtual);

            }

            //os parametros

            if(count($url) > 0){
                // count conta todos os elementos de um array ou de um obketo Countable
            
                $parametro = $url;

            }
        }else{
            $controladorAtual = 'HomeController';
            $acaoAtual = 'index';
            //var_dump('Controlador Atual: ' . $controladorAtual);
            //var_dump('Ação atual: ' . $acaoAtual);
        }

        //var_dump('../app/controllers/' . $controladorAtual .'.php');

        // // verifica se o arquivo do controller existe e se o metodo existe  na class 
        if(!file_exists('../app/controllers/'. $controladorAtual .'.php') || !method_exists($controladorAtual,$acaoAtual)){

            // Se não exist defina o controller com o error 404
            $controladorAtual = 'ErroController';
            $acaoAtual = 'index';

            //var_dump('Controlador Atual: ' . $controladorAtual);
            //var_dump('Ação atual: ' . $acaoAtual);

        }
      

        // var_dump('Controlador Atual: ' . $controladorAtual);
        // var_dump('Ação atual: ' . $acaoAtual);



        // // instacia  do controller atual 
        $controller = new $controladorAtual();
        //var_dump($controller);
        
        // // chama uma função de retorno com um array de parâmetro 
         call_user_func_array(array($controller, $acaoAtual), $parametro);

    }
}
