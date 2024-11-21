
<?php


class DepoimentoModel extends Model
{
  public function getDepoimentoAleatorio($limite = 2){
    $sql = "select c.id_cliente, c.nome_cliente, c.cidade_cliente, c.foto_cliente, c.alt_foto_cliente, d.descricao_depoimento  from tbl_cliente c  inner join tbl_depoimento d on d.id_cliente = c.id_cliente  
    where d.status_depoimento = 'Aprovado' limit :limite";
    $stmt = $this->db->prepare($sql);
    // PDO::prepare — Prepara uma instrução para execução e retorna um objeto de instrução
    $stmt->bindValue(':limite', (int)$limite, PDO::PARAM_INT);
    //PDOStatement::bindValue — Vincula um valor a um parâmetro
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
    
  }
}