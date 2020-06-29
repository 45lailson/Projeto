<?php

  abstract class Conexao {

    #Realiza a conexão com o banco de dados
    protected function Sql()
    {
        try {
             $Conn = new PDO("mysql:host=localhost;dbname=projeto","root","");
             return $Conn;

        }catch (PDOException $Erro) {
            
            return $Erro->getMessage();

        }

    } 

    
}

?>