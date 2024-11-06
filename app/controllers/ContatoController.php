<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exeception;

class ContatoController extends Controller{

    public function index(){
        $dados = array();
        $dados ['titulo'] = 'Contato - Ki Oficina';

        $this->carregarViews('contato',$dados);
    }

    public function enviarEmail(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $tel = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_NUMBER_INT);
            $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_SPECIAL_CHARS);
            $assunto = "CONTATO VIA SITE";


            // var_dump($nome);
            // var_dump($email);
            // var_dump($tel);
            // var_dump($mensagem);
            
            // estrutura para envio de email

            
            if($nome && $email && $tel && $mensagem){

                require_once("vendors/phpmailer/src/PHPMailer.php");
                require_once("vendors/phpmailer/src/SMTP.php");

               $phpmail = new PHPMailer(); // grande variavel de email t

               try{
                $phpmail->isSMTP(); 
                // envio por smtp
        
                $phpmail-> SMTPDebug = 2;
                $phpmail-> Host = DB_HOST; 
                // smtp servidor de email
        
                $phpmail-> Port = PORT_EMAIL; 
                // porta do servidor smtp
        
                $phpmail-> SMTPSecure = 'ssl'; 
                // Certificado / Autenticação SMTP
                $phpmail-> SMTPAuth = true;
                // Caso necessite ser autenticado
        
                $phpmail-> Username = USER_EMAIL;
                // email SMTP
                $phpmail-> Password= PASS_EMAIL;
                // senha SMTP
        


                $phpmail-> IsHTML(true);
                // trabalha com estrutura html
                $phpmail-> setFrom(USER_EMAIL, $nome);
                // email do remetente 
                $phpmail-> addAddress(USER_EMAIL, $assunto);
                // email do destinatário
        
                $phpmail-> Subject = $assunto;


                // Assunto enviado pelo método POst
        
                $phpmail->msgHTML("Nome: $nome <br>
                                    E-mail: $email <br>
                                    Telefone: $tel <br>
                                    Mensagem: $mensagem");
                // corpo DO EMAIL
        
                $phpmail-> AltBody=("Nome: $nome \n
                                    E-mail: $email \n
                                    Telefone: $tel \n
                                    Mensagem: $mensagem");
        
        
                $phpmail->send();
                $dados= array(
                    'mensagem' => 'Obrigado pelo seu contato, em breve respondo.',
                    'status' => 'sucesso'
                );

                $this->carregarViews('contato', $dados);
                
          
        
                // ***********E-MAIL DE RESPOSTA****************
                
                // fazer a validação do email de resposta do cliente 
                
                $phpmailResposta= new PHPMailer();
                $phpmailResposta->isSMTP();
                $phpmailResposta->SMTPDebug=0;
                $phpmailResposta->Host= DB_HOST;
                $phpmailResposta->Port= PORT_EMAIL;
                $phpmailResposta->SMTPSecure='ssl';
                // ssl dificulta que ele vai para o spam 
                $phpmailResposta->SMTPAuth=true;
                $phpmailResposta->Username=  USER_EMAIL; 
                // email SMTP
                $phpmailResposta->Password= PASS_EMAIL;
                // SENHA SMTP
                $phpmailResposta->IsHTML(true);
                $phpmailResposta->setFrom(USER_EMAIL, "INNOVA CLICK");
                // quem está enviando o email 
                $phpmailResposta->addAddress($email,$nome);
                // DESTINATÁRIO
                $phpmailResposta->Subject="Resposta - ".$assunto;
                
                
                // corpo do email
                
                $phpmailResposta->msgHTML("$nome <br>
                                            Em breve retornaremos seu contato. <br>
                                            Mensagem:$mensagem <br>
                                            Em caso de dúvida entre contato pelo número <br>
                                            (11)999999-6666");
                $phpmailResposta->AltBody= "$nome \n
                                            Em breve retornaremos seu contato. \n
                                            Mensagem:$mensagem \n
                                            Em caso de dúvida entre contato pelo número \n
                                            (11)999999-6666";
                    $phpmailResposta->send();


            }catch(Exception $e){
                $dados = array( 
                    'mensagem' => 'Não foi possivel o e-mail. Por favor, tente mais tarde',
                    'status' => 'erro',
                    'nome' => $nome,
                    'email' => $email,
                    'telefone' => $tel,
                    'mensagem_usuario' => $mensagem
                );
                error_log('Erro ao enviar o e-mail ' .$phpmail->ErrorInfo);
                $this->carregarViews('contato', $dados);
            }

        }
            
            
        }else{
            // exibir o form sem a mensagem
            $dados = array();
            $this->carregarViews('contato', $dados);
        }
    }
}