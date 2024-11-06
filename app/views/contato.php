<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo isset($titulo) ? $titulo : 'Contato - Ki Oficina'; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="<?php BASE_URL ?>assets/style/reset.css" />
    <link rel="stylesheet" type="text/css" href="/style/slick.css" />
    <link rel="stylesheet" type="text/css" href="/style/slick-theme.css" />
    <link rel="stylesheet" href="assets/style/lity.css">
    <link rel="stylesheet" href="assets/style/style.css" />


</head>

<body>
    
    <!-- header -->
    <?php require_once('template/topo.php');?>

    
    <section class="pagContato">
    <div class="espaco"></div>
        <article class="site">

            
            <div>
                <div class="titulo_contato">
                    <div>
                        <h2><span>Contato</span</h2>
                        <p>Home/Contato</p>
                    </div>

                </div>
               
            </div>

            <?php
                 if(isset($mensagem)&& isset($status)){
                    if($status == 'sucesso'){
                        echo '<div class="Alerta-sucesso"> ' . $mensagem . '</div>';

                    }elseif($status == 'erro'){
                        echo '<div class="Alerta-erro"> ' . $mensagem . '</div';
                    }
                 }
            ?>


            <div>
            
                <form action="contato/enviarEmail" method="post">

                    <h4>How can we help?</h4>
                    <p>There are many variations of passages of Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ad molestias sunt obcaecati</p>
                    <div  class="forms">

                        <div class="divisoes">
                            <div>
                                <label>Nome:</label><br>
                            <input type="text" name="nome" required><br>
                            </div>
                            
                            <div>
                                 <label>E-mail:</label><br>
                                <input type="email" name="email" required><br>
                            </div>
                           
                        </div>
                            
                    
                        <div  class="divisoes">
                            <div>
                                <label>WHICH TOPIC BEST MATCHES YOUR QUESTION?</label><br>
                                <input type="" name="" placeholder="" required><br>
                            </div>
                           <div>
                             <label>SUBJECT</label><br>
                                <input type="" name="" placeholder="" required><br>
                           </div>
                           
                        </div>

                        <div class="mensagem">
                            <label>Mensagem:</label><br>
                            <textarea name="mensagem" cols="50" rows="6" required></textarea><br>
                        
                        </div>
                    </div>
                   

                </form>
        
            </div>
            
    
            </article>
            

        </section>
        <div class="espaco"></div>

     <!-- footer -->
     
    <?php require_once('template/final.php');?>
    

    <script type="text/javascript" src="//code.jquery.com/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <script type="text/javascript" src="assets/js/slick.min.js"></script>
    <script src="assets/js/lity.min.js"></script>
    <script src="https://kit.fontawesome.com/6a9aa14b39.js" crossorigin="anonymous"></script>
    <script src="assets/js/oficina.js"></script>

    
</body>

</html>