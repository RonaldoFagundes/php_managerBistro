<?php
require_once '../model/crud.php';

$produtos = new Crud();
$list = $produtos->selectProdutos();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    

   <h1>Gerenciador dos Produtos</h1>

  




  <div class="container my-5">

       <h2>Lista de Produtos</h2>

       <a class="btn btn-primary"        
           href='../controller/produtos.php?action=insert'  role="button">
           Novo Produto
        </a>


      
       <br/>

       <table class="table">
          <thead>
            <tr>
              <th>IMG</th>
              <th>ID</th>
              <th>Nome</th>
              <th>Descrição</th>
              <th>Valor</th>
              <th>Estoque</th>
              <th>Produção</th>
              <th>Vendas</th>
              <th>Disponivel para Vendas</th>
              <th>Valor das vendas</th>
            </tr>
          </thead>

          <tbody>

            <?php      
              
              while( $produto = $list->fetch() ) {
              
                echo 
                  "
                   <tr>
                     <td><img src='../img/$produto[img].png'></td>  
                     <td>$produto[id]</td>            
                     <td>$produto[nome]</td>          
                     <td> $produto[info]</td>            
                     <td>
                     "
                     .number_format($produto['valor'],2).                     
                     "                 
                     </td>     
                     <td>$produto[estoque]</td>
                     <td> $produto[producao]</td>  
                     <td>$produto[vendas]</td>
                     <td>
                     "
                     .intval($produto['estoque'] - ($produto['vendas'])).
                     "
                     </td> 

                     <td>
                     "
                     .number_format(intval($produto['valor'] * ($produto['vendas']))).
                     "
                     </td> 
                     
                     
                     <td>

                      <a class='btn btn-primary' 
                      
                       href='../controller/produtos.php?action=update&id=$produto[id]'>Editar
                      
                      </a>


                     <a class='btn btn-primary' href='../controller/produtos.php?action=delete&id=$produto[id]'>Delete
                     </a>  
                     
                     
                     </td>                        
                   </tr>                      
                  ";
                  }
           
              ?>
              
            </tbody>
         </table>
        
    </div>






</body>
</html>