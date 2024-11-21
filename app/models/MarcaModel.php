<?php

class MarcaModel extends Model
{
  public function getMarcaAleatorio()
  {
    $sql = "select nome_marca, logo_marca, alt_marca from tbl_marca;";
    $stmt = $this->db->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
    //fetchAll — Busca as linhas restantes de um conjunto de resultados
    //PDO::FETCH_ASSOC: retorna uma matriz indexada pelo nome da coluna conforme retornado no seu conjunto de resultados

  }
}
