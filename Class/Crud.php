<?php

require_once("{$_SERVER['DOCUMENT_ROOT']}/Projeto_Pratico/Class/Conexao.php"); #Usei o Server pois Não encontrava a localização correta do diretorio da conexão

class Crud extends Conexao {

    #Atributos
    private $Crud;
    private $Contador;

    #Preparação das Declarativas
    private function prepareStatements($Query, $Parameters)
    {
        $this->countParameters($Parameters);

        $this->Crud=$this->Sql()->prepare($Query);

        if($this->Contador > 0) {

            for($i=1 ; $i <= $this->Contador; $i++) {
                $this->Crud->bindValue($i, $Parameters[$i-1]); #-1 para comerçamos por 0

            }

        }

            $this->Crud->execute();
        
    }

        #Contador de Parameters
        private function countParameters($Parameters)
        {
            $this->Contador = count($Parameters);
        }

        #Inserção no Banco de Dados

        public function Insert($Table, $Condicao, $Parameters) 
        {
            $this->prepareStatements("INSERT INTO {$Table} VALUES ({$Condicao})" , $Parameters);
            return $this->Crud;
        }

         #Seleção no Banco de Dados

         public function Select($Campos, $Table, $Condicao, $Parameters) 
         {
             $this->prepareStatements("SELECT {$Campos} FROM {$Table} {$Condicao}" , $Parameters);
             return $this->Crud;
         }

         #Metodo Para Apagar um Produto do Banco

         public function Delete($Table , $Condicao , $Parameters)
         {
            $this->prepareStatements("DELETE FROM {$Table} WHERE {$Condicao}" , $Parameters);
            return $this->Crud;
         }

         #Metodo para atualizar no banco de dados

         public function Update($Table , $Set , $Condicao , $Parameters)
         {
            $this->prepareStatements("UPDATE {$Table} SET {$Set} WHERE {$Condicao}",$Parameters);
            return $this->Crud;
         }
        

}

?>