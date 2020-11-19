<?php
  class Adm{
   private $idAdm;
   private $nomeAdm;
   private $emailAdm;
   private $senhaAdm;
   
   public function __get($atributo){
    return $this -> $atributo;
 }
   public function __set($atributo, $valor){
   $this -> $atributo = $valor;
}

 }
?>