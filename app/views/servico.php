<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php BASE_URL ?>http://localhost/kioficina/public/assets/img/SVG/favicon.svg">

    <title><?php echo isset($titulo) ? $titulo : 'Serviços - Ki Oficina'; ?></title>
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

    <?php require_once('template/servico_two.php');?> 




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