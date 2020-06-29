<?php
require_once("../Class/Crud.php");

$Crud = new Crud();
$Id=filter_input(INPUT_GET,'id', FILTER_SANITIZE_SPECIAL_CHARS);

$Crud->Delete(
        "produtos",
        "Id=?",
        array(
            $Id
        )

    );

echo "Produto excluido com Sucesso!" . "<br>";

 



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <link> <a href="../selecao.php">Voltar</a></link>
    
</body>
</html>