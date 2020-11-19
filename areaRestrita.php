<?php
    $acao="recuperar";
    require("controller/adm.controller.php");
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Area Restrita</title>
</head>
<body>
    <h1>Lista de Administradores</h1>

    <table>
    <tr>
    <td>Nome</td>
    <td>Acao</td>
    </tr>
<?php foreach($administrador as $indice => $adm){?>
<tr>
    <td><?= $adm->nomeAdm;?></td>
    <td> <a href="formCadAdm.php?metodo=alterar&id=<?= $adm->idAdm;?>">Alterar</a></td>
    <td><a href="formCadAdm.php?metodo=excluir&id=<?= $adm->idAdm;?>">Excluir</a></td>
</tr>
<?php } ?>
    </table>
</body>
</html>