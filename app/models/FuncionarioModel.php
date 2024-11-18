
<?php


class FuncionarioModel extends Model
{
  public function getFuncionarioAleatorio($limite = 3){
    $sql = "select nome_funcionario, foto_funcionario, alt_foto_funcionario, cargo_funcionario from tbl_funcionario where status_funcionario = 'Ativo' order by rand() limit :limite";
    $stmt = $this->db->prepare($sql);
    // PDO::prepare — Prepara uma instrução para execução e retorna um objeto de instrução
    $stmt->bindValue(':limite', (int)$limite, PDO::PARAM_INT);
    //PDOStatement::bindValue — Vincula um valor a um parâmetro
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
    
  }
}
