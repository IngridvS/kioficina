<?php

class Servico extends Model
{
    //METODO PARA PEGAR SOMENTE 3 SERVICOS DE FORMA ALEATORIA
    public function getServicoAleatorio($limite = 3)
    {
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

    public function getServicosOrdem() {// () não recebe nenhum tipo de parametro como acima
   
        $sql = "select nome_servico, descricao_servico from tbl_servico where status_servico = 'Ativo' 
        ORDER BY nome_servico;";
         $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        //fetchAll — Busca as linhas restantes de um conjunto de resultados
        //PDO::FETCH_ASSOC: retorna uma matriz indexada pelo nome da coluna conforme retornado no seu conjunto de resultados
    }
}
