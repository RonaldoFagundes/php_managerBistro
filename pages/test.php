

 <?php
         
         if ($listar_produtos){

         while( $produto = $listar_produtos->fetch(PDO::FETCH_OBJ) ){
           
       ?>

       <tr>

        <td>
          <?= $produto->id; ?>
        </td>

        <td>
          <?= $produto->nome; ?>
        </td>


       <td>
         <?= $produto->info; ?>
       </td>

       <td>
        <?= number_format($produto->valor,2); $produto->valor; ?>
       </td>


       <td>
         <?= $produto->estoque; ?>
       </td>

       <td>
         <?= $produto->producao; ?>
       </td>


       <td>
         <?= $produto->vendas; ?>
       </td>

      <td>
        <?=$produto->estoque; - $produto->vendas; ?>
      </td>
  

   <?php
       }

    }

   ?>











<div>


<?php
   
     if ($listar_produtos){

         while( $produto = $listar_produtos->fetch(PDO::FETCH_OBJ) ){
              
 ?>

        <hr/>
         <p>Id : 
           <?= $produto->id; ?>
         </p>

         <p>Produto : 
           <?= $produto->nome; ?>
         </p>

         <p>Valor : 
           <?= number_format($produto->valor,2); $produto->valor; ?>
         </p>


         <p>Estoque : 
           <?= $produto->estoque; ?>
         </p>


         <p>Vendas :
           <?= $produto->vendas; ?>
         </p>

         <p>Disponivel para Vendas :
           <?=$produto->estoque; - $produto->vendas; ?>
         </p>

         <button>Editar</button>

      <?php
          }

       }



      ?>


   


</div>


<hr/>



<div>


<form action= "../controller/produtos.php" method= "post" >

  <label for= "nome"> Nome: <br/>
  <input type= "text" name="nome"><br/>

 <label for= "id"> Id: <br/>
 <input type= "text" name="id"><br/>

 <input type= "submit" value="Enviar">

</form>

</div>



