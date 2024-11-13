<?php

class Servico extends Model{
    //METODO PARA PEGAR SOMENTE 3 SERVICOS DE FORMA ALEATORIA
    public function getServicoAleatorio($limite = 3){
        $sql = "select * from tbl_servico where status_servico = 
        'Ativo' order by rand() limit :limite";
        $stmt = $this->db->prepare($sql);
        // PDO::prepare — Prepara uma instrução para execução e retorna um objeto de instrução
        $stmt->bindValue(':limite', (int)$limite, PDO::PARAM_INT);
        //PDOStatement::bindValue — Vincula um valor a um parâmetro
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        


    }
    //metodo listas tds os serviços ativos por ordem alfabetica 

    // public function getServicoAleatorio{
    //     $sql= "select * from "
    // }
}