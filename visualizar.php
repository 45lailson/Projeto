<?php 
require_once("Includes/Header.php");
require_once("Class/Crud.php");

?>

<div class="Content">
   
       <?php 
            $Crud = new Crud();
            $Id =filter_input(INPUT_GET,'id', FILTER_SANITIZE_SPECIAL_CHARS);
            $BFetch = $Crud->Select(
                "*",
                "produtos",
                "WHERE Id=?",
                array($Id)

            );
            $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
       
       ?>

       <h2>Dados do Produto</h2>
       <hr class="hr">
       <strong>Nome:</strong> <?php echo $Fetch['Nome']; ?><br>
       <strong>Preço:</strong> <?php echo $Fetch['Preco']; ?></br>
       <strong>Descrição:</strong> <?php echo $Fetch['Descricao']; ?></br>
      

        
</div>

<?php require_once("Includes/Footer.php");?>

