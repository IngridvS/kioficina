<!-- ATENCÇÃO VOCÊ ESTA NA PASTA DE MODELS E ARQUIVO CONTATO -->

<?php

class ContatoModel extends Model{
    // Salva o email na base de dados 

    public function salvarEmail($assunto, $nome, $email, $tel, $msg){
        $sql = "INSERT INTO tbl_contato(assunto_contato, nome_contato, email_contato, tel_contato, mensagem_contato) 
        VALUES(:assunto_contato, :nome_contato, :email_contato, :tel_contato, :mensagem_contato)";

        $stmt = $this->db->prepare($sql);
        $stmt-> bindValue(':assunto_contato',$assunto);
        $stmt-> bindValue(':nome_contato',$nome);
        $stmt-> bindValue(':email_contato',$email);
        $stmt-> bindValue(':tel_contato',$tel);
        $stmt-> bindValue(':mensagem_contato',$msg);
      
        return $stmt->execute();
    }
}