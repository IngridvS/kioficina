<!-- 

// RECONHECER A ESTRUTURA PHPMAILER
require_once("phpmailer/src/PHPMailer.php");
require_once("phpmailer/src/SMTP.php");
$ok = 0;


// ESTRUTURA PARA O ENVIO DO EMAIL

try{
    if(isset($_POST["email"])){

        // $ é uma variavel 
        $nome = $_POST["nome"];
        $telefone =  $_POST["tel"];
        $email = $_POST["email"];
        $mensagem = $_POST["mensagem"];
        $assunto = "CONTATO VIA SITE";

        $phpmail= new PHPMailer\PHPMailer\PHPMailer();   // grande variavel de email t
        $phpmail->isSMTP(); 
        // envio por smtp

        $phpmail-> SMTPDebug = 0;
        $phpmail-> Host ="smtp.hostinger.com"; 
        // smtp servidor de email

        $phpmail-> Port = 465; 
        // porta do servidor smtp

        $phpmail-> SMTPSecure = 'ssl'; 
        // Certificado / Autenticação SMTP
        $phpmail-> SMTPAuth = true;
        // Caso necessite ser autenticado

        $phpmail-> Username = "tipitwo@tipi02.smpsistema.com.br";
        // email SMTP
        $phpmail-> Password= "Senac@tipitwo01";
        // senha SMTP

        $phpmail-> IsHTML(true);
        // trabalha com estrutura html
        $phpmail-> setFrom("tipitwo@tipi02.smpsistema.com.br", $nome);
        // email do remetente 
        $phpmail-> addAddress("tipitwo@tipi02.smpsistema.com.br", $assunto);
        // email do destinatário

        $phpmail-> Subject = $assunto;
        // Assunto enviado pelo método POst

        $phpmail->msgHTML("Nome: $nome <br>
                            E-mail: $email <br>
                            Telefone: $telefone <br>
                            Mensagem: $mensagem");
        // corpo DO EMAIL

        $phpmail-> AltBody=("Nome: $nome \n
                            E-mail: $email \n
                            Telefone: $telefone \n
                            Mensagem: $mensagem");




        if($phpmail->send()){
            $ok=1;
            echo"Mensagem enviada com sucesso!";
            require_once("index.php");

        } else{
            $ok=2;
            echo "Não foi possivel enviar a mensagem. Erro: " .$phpmail ->ErrorInfo;
        }
        
  

// ***********E-MAIL DE RESPOSTA****************

// fazer a validação do email de resposta do cliente 

$phpmailResposta= new PHPMAILER\PHPMAILER\PHPMailer();
$phpmailResposta->isSMTP();

$phpmailResposta->Host="smtp.hostinger.com";
$phpmailResposta->Port=465;
$phpmailResposta->SMTPSecure='ssl';
// ssl dificulta que ele vai para o spam 
$phpmailResposta->SMTPAuth=true;
$phpmailResposta->Username="tipitwo@tipi02.smpsistema.com.br"; 
// email SMTP
$phpmailResposta->Password="Senac@tipitwo01";
// SENHA SMTP
$phpmailResposta->IsHTML(true);
$phpmailResposta->setFrom("tipitwo@tipi02.smpsistema.com.br", "INNOVA CLICK");
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
    }

    }catch(Exception $e){
        // CASO DE ERRO AO ENVIAR O EMAIL
        require_once ("contato.php");

    }
 -->

