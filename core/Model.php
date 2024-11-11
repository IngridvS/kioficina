<?php 

class Model{
    // public também é um jeito mais só por se tratar de dados que são "seguro", não seria ideal 
    // private $db; é um jeito 

    // outro jeito mais seguro
    protected $db;

    public function __construct()
    {
        try {
            // criar a conexão com o banco de dados 
                                // 'mysql:dbname=test;host=localhost', 'root',''
            $this->db = new PDO('mysql:dbname='. DB_NAME .';host='. DB_HOST, DB_USER, DB_PASS);  //PDO" significa "PHP Data Objects. Permite acesso seguro e orientado a objetos a bancos de dados. 
            
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Falha de conexão: " . $e->getMessage();
        }        
    }

}