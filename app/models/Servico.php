<?php

class Servico extends Model
{
    //METODO PARA PEGAR SOMENTE 3 SERVICOS DE FORMA ALEATORIA
    public function getServicoAleatorio($limite = 3)
    {
        $sql = "select s.id_servico, s.nome_servico, s.descricao_servico, g.foto_galeria, g.alt_galeria from tbl_servico s inner join tbl_galeria g on s.id_servico = g.id_servico where status_servico = 
        'Ativo' order by rand() limit :limite";
        $stmt = $this->db->prepare($sql);
        // PDO::prepare — Prepara uma instrução para execução e retorna um objeto de instrução
        $stmt->bindValue(':limite', (int)$limite, PDO::PARAM_INT);
        //PDOStatement::bindValue — Vincula um valor a um parâmetro
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

   
    //metodo listas tds os serviços ativos por ordem alfabetica 

    public function getTodosOrdem() {// () não recebe nenhum tipo de parametro como acima
   
        $sql = "select s.id_servico, s.nome_servico, s.descricao_servico, s.preco_base_servico, s.tempo_estimado_servico, s.id_especialidade, g.foto_galeria, g.alt_galeria from tbl_servico s inner join tbl_galeria g on s.id_servico = g.id_servico where status_servico = 'Ativo' ORDER BY nome_servico;";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        //fetchAll — Busca as linhas restantes de um conjunto de resultados
        //PDO::FETCH_ASSOC: retorna uma matriz indexada pelo nome da coluna conforme retornado no seu conjunto de resultados
    }


    
    public function getServicosOrdem() {
   
        $sql = "select nome_servico, descricao_servico, link_servico from tbl_servico where status_servico = 'Ativo' 
        ORDER BY nome_servico;";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        //fetchAll — Busca as linhas restantes de um conjunto de resultados
        //PDO::FETCH_ASSOC: retorna uma matriz indexada pelo nome da coluna conforme retornado no seu conjunto de resultados
    }


    // metodo para carregar o servico pelo link 
    public function getServicoPorLink($link){

        $sql = "SELECT tbl_servico.*, tbl_galeria. * FROM tbl_servico INNER JOIN tbl_galeria ON tbl_servico .id_servico = tbl_galeria.id_galeria WHERE  status_servico = 'Ativo' AND link_servico = :link";

        $stmt = $this->db->prepare($sql);
        // PDO::prepare — Prepara uma instrução para execução e retorna um objeto de instrução
        $stmt->bindValue(':link', $link);
        //PDOStatement::bindValue — Vincula um valor a um parâmetro
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
