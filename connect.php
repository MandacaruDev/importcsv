<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";

    $con = mysql_connect($servidor, $usuario, $senha)
            or die ("Não foi possível conectar ao Servidor de Banco de Dados");

    mysql_select_db("moodle", $con)
            or die ("Não foi possível se conectar ao banco de dados");

    mysql_query("SET NAMES 'utf8'");
    mysql_query('SET character_set_connection=utf8');
    mysql_query('SET character_set_client=utf8');
    mysql_query('SET character_set_results=utf8');
?>
