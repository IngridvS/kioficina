<?php

class EspecialidadeModel extends Model
{
  public function getEspecialidadeAleatorio($limite = 4)
  {
    $sql = "select nome_especialidade from tbl_especialidade order by rand() limit :limite";
    $stmt = $this->db->prepare($sql);
    // PDO::prepare — Prepara uma instrução para execução e retorna um objeto de instrução
    $stmt->bindValue(':limite', (int)$limite, PDO::PARAM_INT);
    //PDOStatement::bindValue — Vincula um valor a um parâmetro
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);

  }
}
