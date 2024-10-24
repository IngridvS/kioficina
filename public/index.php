<!-- começando por aqi o fechamento só preciso se ele tiver ligação com index.html-->
<!-- carregar as configurações iniciais -->
<?php 

// garante que não carrega dois arquivos iguais 
require_once('../config/config.php'); 

// núcleo da aplicação

$nucleo = new Core();
$nucleo->executar();
