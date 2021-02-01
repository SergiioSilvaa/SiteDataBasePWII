<?php
  require_once("model/adm.model.php");
  require_once("service/adm.service.php");  
  require_once("conexao/conexao.php");
  

  @$acao = isset($_GET['acao']) ? $_GET ['acao'] : $acao;
  @$id = isset($_GET['id']) ? $_GET ['id'] : $id;

  //Execucao - Inserir

  if($acao == 'inserir'){
   $administrador = new Adm(); //($conexao, $administrador)
   $administrador -> __set('nomeAdm', $_POST['nomeAdm']);
   $administrador -> __set('emailAdm', $_POST['emailAdm']);
   $administrador -> __set('senhaAdm', $_POST['senhaAdm']);

  $conexao = new Conexao();

  $administradorService = new AdmService($conexao, $administrador);
  $administradorService -> inserir();


  // Recuperacao de todos os administradores
}else if($acao == 'recuperar'){
  $administrador = new Adm();
  $conexao = new Conexao();

  $administradorService = new AdmService($conexao, $administrador);
  $administrador = $administradorService->recuperar();

}

//Recuperar um Administrador

else if($acao == 'recuperarAdministrador'){
  $administrador = new Adm();
  $conexao = new Conexao();

  $administradorService = new AdmService($conexao, $administrador);
  $administrador = $administradorService->recuperarAdministrador($id);


  //Atualizar dados do Administrador

}else if($acao == 'atualizar'){
  $administrador = new Adm();
  $administrador->__set('idAdm',$_POST['id']);
  $administrador->__set('nomeAdm',$_POST['nomeAdm']);
  $administrador->__set('emailAdm',$_POST['emailAdm']);
  $administrador->__set('senhaAdm',$_POST['senhaAdm']);

  $conexao = new Conexao();
  $administradorService = new AdmService($conexao, $administrador);
  $administradorService->atualizar();

}
?>
