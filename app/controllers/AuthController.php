<?php

class AuthController extends Controller{
    public function login(){
        $dados = array();

        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            $senha = filter_input(INPUT_POST, 'senha');
            $tipo_usuario = filter_input(INPUT_POST, 'tipo_usuario');

            // var_dump($email);
            // var_dump($senha);
            // var_dump($tipo_usuario);

            if($email && $senha && $tipo_usuario){

                if($tipo_usuario ==='Cliente'){
                    $usuarioModel = new ClienteModel();
                    
                }elseif($tipo_usuario === 'Funcionário'){

                }

            }else{
                // credenciais invalidas 
                if($tipo_usuario === ""){
                    $dados['msg'] = 'Tipo de usuario não informados';
                    $dados['tipo_msg'] = 'erro-tipo-_usuario';
                }else{
                    $dados['msg'] = 'Email e Senha incorretas';
                    $dados['tipo_msg'] = 'erro';
                }
               
            }
        }

        $this->carregarViews('home', $dados);
    }
}