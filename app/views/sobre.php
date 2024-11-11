<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo isset($titulo) ? $titulo : 'Sobre - Ki Oficina'; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="<?php BASE_URL ?>assets/style/reset.css" />
    <link rel="stylesheet" type="text/css" href="/style/slick.css" />
    <link rel="stylesheet" type="text/css" href="/style/slick-theme.css" />
    <link rel="stylesheet" href="assets/style/lity.css">
    <link rel="stylesheet" href="assets/style/style.css" />


</head>

<body>

    <!-- header -->
    <?php require_once('template/topo.php'); ?>

    <!-- Start common page title  -->

    
    <div class="pagSobre">
        <h3>About Us</h3>
        <p>home/ About Us</p>

    </div>

    <section class="pagSobre_valores">
        <article class="site">
            
            <ul>
                <li class="active-valores">Mission</li>
                <li>Vision</li>
                <li>History</li>
            </ul>

            <div class="tabs-content">
                <div class="list">
                    <div class="ak-section-heading ak-style-1 ak-type-1">
                        <div class="background-text">About Company</div>
                        <h3 class="desp">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's stan. Lorem Ipsum is simply dummy text of the
                            printing
                            and typesetting industry.</h3>
                    </div>
                </div>
                <div class="list">
                    <div class="ak-section-heading ak-style-1 ak-type-1">
                        <div class="background-text">About Company</div>
                        <h3 class="desp"> Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            been the industry's stanLorem Ipsum has.
                        </h3>
                    </div>
                </div>
                <div class="list">
                    <div class="ak-section-heading ak-style-1 ak-type-1">
                        <div class="background-text">About Company</div>
                        <h3 class="desp"> Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has
                            been the industry's stan.</h3>
                    </div>
                </div>
            </div>
        
        </article>
    </section>

    
    <div class="espaco"></div>


    <!-- escolha -->
    <?php require_once('template/escolha.php'); ?>
    

    <div class="espaco"></div>

    <!-- depoimento -->
    <?php require_once('template/depoimento.php'); ?>

    
    <div class="espaco"></div>

    <!-- equipe -->
    <?php require_once('template/equipe.php'); ?>

    <div class="espaco"></div>

    <!-- carrossel de marcas -->
    <?php require_once('template/marcas.php'); ?>


    <div class="espaco"></div>


    <!-- footer -->

    <?php require_once('template/final.php'); ?>


    <script type="text/javascript" src="//code.jquery.com/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <script type="text/javascript" src="assets/js/slick.min.js"></script>
    <script src="assets/js/lity.min.js"></script>
    <script src="https://kit.fontawesome.com/6a9aa14b39.js" crossorigin="anonymous"></script>
    <script src="assets/js/oficina.js"></script>
</body>

</html>