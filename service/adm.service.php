<?php
  class AdmService{
   private $conexao;
   private $administrador;

  public function __construct
      (Conexao $conexao, Adm $administrador) {
      $this->conexao = $conexao->conectar();
      $this->administrador = $administrador;
}

// Função INSERIR

  public function inserir(){
   $query = 'insert into administrador
            (nomeAdm, emailAdm, senhaAdm)
            values (:nomeAdm, :emailAdm, :senhaAdm);';
   $stmt = $this->conexao->prepare($query);
   $stmt->bindValue (':nomeAdm', $this->administrador->__get('nomeAdm'));
   $stmt->bindValue (':emailAdm', $this->administrador-> __get('emailAdm'));
   $stmt->bindValue (':senhaAdm', $this->administrador->__get('senhaAdm'));

   $stmt->execute();
}
public function recuperar(){
  $query = 'Select idAdm, nomeAdm, emailAdm, senhaAdm
  from Administrador;';
  $stmt = $this->conexao->prepare($query);
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_OBJ);
}

public function recuperarAdministrador($id){
  $query = 'Select idAdm, nomeAdm, emailAdm, senhaAdm
  from Administrador
  where :idAdm = idAdm;';
  $stmt = $this->conexao->prepare($query);
  $stmt->bindValue(':idAdm', $id);
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_OBJ);
}

}
?>
