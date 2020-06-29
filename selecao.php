<?php 
require_once("Includes/Header.php");
require_once("Class/Crud.php");

?>

<div class="Content">

      <table class="Tabela">
            <tr>
                <td>Nome</td>
                <td>Preço</td>   
                <td>Descrição</td>   
                <td>Ações</td> 
            </tr>

            <!-- Estrutura de loop -->
            <?php
                $Crud = new Crud();
                $BFetch=$Crud->Select(
                    "*" ,
                    "produtos",
                    "",
                    array()
                );

                     while($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {
            ?>

                    <tr>
                        <td><?php echo $Fetch['Nome'];?></td>
                        <td><?php echo $Fetch['Preco'];?></td> 
                        <td><?php echo $Fetch['Descricao'];?></td>   
                       
                        <td>
                                <a href="<?php echo "visualizar.php?id={$Fetch['Id']}";?>"><img src="Images/visualizar.png" alt="Visualizar"></a>
                                <a href="<?php echo "cadastro.php?id={$Fetch['Id']}";?>"><img src="Images/editar.png" alt="Excluir"></a>
                                <a class="Deletar" href="<?php echo "Controllers/ControllerDeletar.php?id={$Fetch['Id']}";?>"><img src="Images/excluir.png" alt="Excluir"></a>

                        </td> 
                    </tr>
            <?php    
                }
                
            ?>

        </table>

</div>

<?php require_once("Includes/Footer.php");?>
