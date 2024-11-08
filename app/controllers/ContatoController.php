<?php


class ContatoController extends Controller{

    public function index(){
        $dados = array();
        $dados ['titulo'] = 'Contato - Ki Oficina';

        $this->carregarViews('contato',$dados);
    }


    public function enviarEmail(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            // se meu metodo ta via POST
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
            // tratar os dados 
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $tel = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_NUMBER_INT);
            $msg = filter_input(INPUT_POST, 'msg', FILTER_SANITIZE_SPECIAL_CHARS);
            $assunto = filter_input(INPUT_POST,'assunto', FILTER_SANITIZE_SPECIAL_CHARS);


            if($nome && $email && $tel && $msg){
                // verificar os campos

                require_once("vendors/phpmailer/PHPMailer.php");
                require_once("vendors/phpmailer/SMTP.php");
                require_once("vendors/phpmailer/Exception.php");

                $phpmail = new PHPMailer\PHPMailer\PHPMailer(); // Gerando variavél de email
                try {
                    $phpmail -> isSMTP (); // envio por SMTP
                    $phpmail -> SMTPDebug=2;

                    $phpmail-> Host = EMAIL_HOST; 
                    // smtp servidor de email

                    $phpmail-> Port = EMAIL_PORT; 
                    // porta do servidor smtp

                    $phpmail-> SMTPSecure = 'ssl'; 
                    // Certificado / Autenticação SMTP
                    $phpmail-> SMTPAuth = true;
                    // Caso necessite ser autenticado

                    $phpmail-> Username = EMAIL_USER;
                    // email SMTP
                    $phpmail-> Password= EMAIL_PASS;


                    $phpmail-> IsHTML(true);
                    // trabalha com estrutura html
                    $phpmail-> setFrom(EMAIL_USER, $nome);
                    // email do remetente 
                    $phpmail-> addAddress(EMAIL_USER, $assunto);
                    // email do destinatário
            
                    $phpmail-> Subject = $assunto;
                    // Assunto enviado pelo método POst
            
                    $phpmail->msgHTML("Nome: $nome <br>
                                        E-mail: $email <br>
                                        Telefone: $tel <br>
                                        Mensagem: $msg");
                    // corpo DO EMAIL
            
                    $phpmail-> AltBody= "Nome: $nome \n
                                        E-mail: $email \n
                                        Telefone: $tel \n
                                        Mensagem: $msg";


                    $phpmail->send();
                    $dados = array(
                        'mensagem' => 'Obrigado pelo seu contato, em breve responderei',
                        'status' => 'sucesso'
                    );

                    $this->carregarViews('contato',$dados);

                     $phpmailResposta= new PHPMAILER\PHPMAILER\PHPMailer();
                     $phpmailResposta->isSMTP();

                     $phpmailResposta->Host=EMAIL_HOST;
                     $phpmailResposta->Port= EMAIL_PORT;
                     $phpmailResposta->SMTPSecure='ssl';
                    //   ssl dificulta que ele vai para o spam 
                     $phpmailResposta->SMTPAuth=true;
                     $phpmailResposta->Username=EMAIL_USER; 
                    //   email SMTP
                     $phpmailResposta->Password=EMAIL_PASS;
                    //   SENHA SMTP
                     $phpmailResposta->IsHTML(true);
                     $phpmailResposta->setFrom(EMAIL_USER, "kioficina");
                    //   quem está enviando o email 
                     $phpmailResposta->addAddress($email,$nome);
                    //   DESTINATÁRIO
                     $phpmailResposta->Subject="Resposta - ".$assunto;


                    //   corpo do email

                     $phpmailResposta->msgHTML("$nome <br>
                                                 Em breve retornaremos seu contato. <br>
                                                 Mensagem:$msg <br>
                                                 Em caso de dúvida entre contato pelo número <br>
                                                 (11)999999-6666");
                     $phpmailResposta->AltBody= "$nome \n
                                                 Em breve retornaremos seu contato. \n
                                                 Mensagem:$msg \n
                                                 Em caso de dúvida entre contato pelo número \n
                                                 (11)999999-6666";
                         $phpmailResposta->send();
                        


                }catch (Exception $e) {

                    $dados = array(
                        'mensagem' => 'Não foi possivel enviar sua mensagem',
                        'status' => 'erro',
                        'nome' => $nome,
                        'email' => $email
                        
                    );
                    error_log('erro ao enviar o email' . $phpmail->ErrorInfo);

                    $this->carregarViews('contato', $dados);
                } // frim try
               
  
            }// fim do if que testa os campos estão preenchidos 
        
        
        }else{
            $dados = array();
            $this->carregarViews('contato', $dados);
        }

            
    }
}