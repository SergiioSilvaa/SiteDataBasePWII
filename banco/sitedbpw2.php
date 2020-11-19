<?php

    $dns = 'mysql:host=localhost;dbname = sitedbpw2';
    $usuario = 'root';
    $senha = '';

    try{
        $conexao = new PDO ($dns, $usuario, $senha);
        //COMANDO UTILIZADO PARA CRIACAO DA TABELA ADMINISTRADOR
        /*$query = 'create table if not exists administrador(
            idAdm int not null auto_increment primary key,
            nomeAdm varchar (100) not null,
            emailAdm varchar (100) not null,
            senhaAdm varchar (20) not null);';
        $retorno = $conexao -> exec($query);
        echo $retorno;*/

        $query = 'insert into administrador (idAdm, nomeAdm, emailAdm, senhaAdm)
                  values (null, "SergioSilva", "sergiiosilvaa@live.com","12345678");';

        $retorno = $conexao -> exec ($query);
        echo $retorno;

        //UTILIZADO PARA INSETIR INFORMACOES A TABELA ADMINISTRADOR*/

        //$query = 'select * from administrador;';
        //$stmt = $conexao -> query ($query);
        //$lista = $stmt -> fetchAll (PDO :: FETCH_ASSOC);
        //$lista = $stmt -> fetchAll (PDO :: FETCH_NUM);
        //$lista = $stmt -> fetchAll (PDO :: FETCH_BOTH);
        //$lista = $stmt -> fetchAll (PDO :: FETCH_OBJ);
        
       // AS LINHAS ACIMA, SAO ALGUMAS DAS VARIADAS FORMAS DE APRESENTAR OS VALORES CONTIDOS DENTRO DA $QUERY
       // (INFORMACOES DA TABELA ADMINISTRADORES), APRESENTADO-AS COMO VETORES (ARRAY).*/

        //print_r ($lista); //Para esta linha funcionar, ative uma das variaveis acima.

        

    }catch (PDOException $e){
            echo $e -> getMessage();
        }
    
?>