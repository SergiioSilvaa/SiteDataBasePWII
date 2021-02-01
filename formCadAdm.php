<!DOCTYPE HTML>
<?php
	if(isset($_GET["metodo"])){
		$metodo = $_GET["metodo"];
		$id = $_GET["id"];
		$acao = "recuperarAdministrador";
		require("controller/adm.controller.php");
		foreach($administrador as $indice => $administrador){
			$nomeAdm = $administrador->nomeAdm;
			$emailAdm = $administrador->emailAdm;
			$senhaAdm = $administrador->senhaAdm;
		}
	}
?>
<html>
<head>
<title>Cadastro Administrador</title>

<style>
  
  div.center-form {
    position: relative;
    min-height: 100vh;
	
  }

  div.center-form > form {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translateY(-50%) translateX(-50%);
	font-size: 22px;
	
  }

  div.center-form > form > input {
	font-size: 25px;
	background-color: white;

  }

  h1{
	  background-color: white;
  }

  div.fundo-branco{
	background-color: white;
	margin-left: 10px;
	margin-right: 10px;
	text-align: center;
  }

  input.input-size{
	width: 350px;
	text-align: center;
  }

  input.btn-send{
	  font-size: 22px;
	  margin-top: 10px;
  }
</style>

</head>

<body background="https://images.unsplash.com/photo-1497366811353-6870744d04b2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80">
	<div class="center-form">
	<form name="form1" method="post" action="adm.controller.php?acao=
	<?php if(!isset($metodo)){echo 'insetir';}
		else if($metodo == 'alterar'){ echo'atualizar';}
		else{echo'remover';}?>">

	<h1>Cadastro Administrador</h1>
<div class="fundo-branco">
	Nome:
	<input class="input-size" type="text" name="nomeAdm" value="
	<?php if(isset($nomeAdm)){echo $nomeAdm;}
		else{echo '';} ?>"></br>
	Email:
	<input class="input-size" type="text" name="emailAdm" value="
	<?php if(isset($emailAdm)){echo $emailAdm;}
		else{echo '';} ?>"></br>
	Senha:
	<input class="input-size" type="password" name="senhaAdm" value="
	<?php if(isset($senhaAdm)){echo $senhaAdm;}
		else{echo '';} ?>"></br>
	<input class="btn-send" type="submit" name="submit" value="
	<?php
		if(!isset($metodo)){echo'Inserir';}
		else if($metodo == 'alterar'){echo 'Alterar';}
		else{echo 'Excluir';}?>
	"></br>
</div>
  	<input type="hidden" name="id" value="
	  <?php
		 if(isset($id)){echo $id;}
		 else{echo'';} 
	  ?>
	  ">
	</form>
	</div>
</body>
</html>

<?php?>