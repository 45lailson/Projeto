<?php

require_once("../Includes/Variaveis.php");
require_once("../Class/Crud.php");

$Crud = new Crud();

if($Acao =='Cadastrar') {
    $Crud->Insert(
            "produtos",
            "?,?,?,?",
            array(
                $Id,
                $Nome,
                $Preco,
                $Descricao,
               
            )

    );

     echo "Cadastrado Realizado Com Sucesso";

} else {
    $Crud->Update(
        "produtos",
        "Nome=?,Preco=?,Descricao=?",
        "id=?",
        
        array(
         
            $Nome,
            $Preco,
            $Descricao,
            $Id
          
        )

    );

    echo "Dados Alterado Com Sucesso";

}


?>
