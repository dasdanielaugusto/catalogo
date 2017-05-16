<?php

print_r($_POST);
require_once '../model/filmes.php';

if ($_FILES['capa']['name'] !="")
{
    $arq_temp = $_FILES['capa']['tmp_name'];
    $vetor = explode('.', $_FILES['capa']['name']);
    $extensao = array_pop($vetor);
    
    $imagem = uploadCapa($arq_temp,$extensao);
    
} else {
    $imagem = "";
}

$res = atualizaFilme($_POST["id"],
        $_POST["titulo"], 
        $imagem, 
        $_POST["descricao"], 
        $_POST["diretor"], 
        $_POST["atores"]);

if ($res !==true)      
    {
        echo "Ocorreu um problema ao cadastrar o filme.";
    }else{
    header("Location: ../admin.php");
    }

