<?php
require_once("Class/Crud.php");

    #Edicao de Dados
    if(isset($_GET['id'])){
        $Acao="Editar";

        $Crud = new Crud();
        $BFetch = $Crud->Select("*","produtos","WHERE Id=?", array($_GET['id']));
        $Fetch = $BFetch->fetch(PDO::FETCH_ASSOC);
        $Id= $Fetch["Id"];
        $Nome = $Fetch['Nome'];
        $Preco = $Fetch['Preco'];
        $Descricao = $Fetch['Descricao'];
      

        
        
    }
    #Cadastro Novo
    else {
        $Acao = "Cadastrar";
        $Nome = "";
        $Preco = "";
        $Descricao = "";
        $Id= 0;
    }

    

?>

<div class="Resultado"></div>

<div class="Formulario">
    
    <h1 class="Center">Cadastro de Produto e Atualização dos Produtos</h1> 

    <form name="FormCadastro" id="FormCadastro" method="POST" action="Controllers/ControllerCadastro.php"> 

        <input type="hidden" id="Acao" name="Acao" value="<?php echo $Acao; ?>">
        <input type="hidden" id="id" name="id" value="<?php echo $Id; ?>">
        
         <div class="FormularioInput">
             Nome: <br>
             <input type="text" id="Nome" name="Nome" required value="<?php echo $Nome; ?>">
         </div>


         <div class="FormularioInput">
             Preço: <br>
             <input type="number" id="Preco" name="Preco" required value="<?php echo $Preco; ?>">
         </div>


         <div class="FormularioInput">
             Descrição: <br>
             <input type="text" id="Descricao" name="Descricao" required value="<?php echo $Descricao; ?>">
         </div>


         


         <div class="FormularioInput FormularioInput100 Center">
             <input type="submit" value="<?php echo $Acao; ?>">
         </div>

    </form>


</div>
