<?php

define('USUARIO', "root"); //constante
define('SENHA', "elaborata"); //constante
define('HOST', "127.0.0.1"); //constante
define('DATABASE', "catalogo"); //constante



$con = new PDO('mysql:host='.HOST.';dbname='.DATABASE, USUARIO, SENHA, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'')); //faz a conexão

$retorno = $con->query("SELECT * FROM filmes"); //envia a query

$vetor = $retorno->fetchAll(PDO::FETCH_OBJ); //retorna a conexão

var_dump($vetor);



