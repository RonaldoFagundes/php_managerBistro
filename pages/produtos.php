<?php
require_once '../model/crud.php';

session_start();

$produtos = new Crud();
$list = $produtos->selectProdutos();

$successMsg = $_GET['msgOk'] ; 
$errorMsg   = $_GET['msgError'];



if(isset($_SESSION['login'])){          
   $user = ($_SESSION['login']) ;
}




?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     
    <link rel="stylesheet" href="../css//style.css">

    <title>Produtos</title>
</head>



<body>
  





<div>
   <h2>Bem vindo (a)! <?= $user ?></h2>
</div>



<div class="header">
   <h1>Gerenciador dos Produtos</h1>
</div>






  
 <section class="list-products">



  
   <h2>Lista de Produtos</h2>


    <button class="btn btn-primary btnInsert">Novo Produto</button> 

 


   <div class="container my-5">



    

      
       <!-- 
         <a class="btn btn-primary btnInsert"        
           href='index.php?msgError=&msgOk='  role="button">
           Novo Produto
        </a> 
      -->
      
		 
    

      

      

       <table class="table">
          <thead>
            <tr>
              <th >IMG</th>
              <th >ID</th>
              <th >Nome</th>
              <th >Descrição</th>
              <th >Preço</th>
              <th >Estoque</th>
              <th >Produção</th>
              <th >Vendas</th>
              <th >Disponivel para Vendas</th>
              <th >Valor das vendas</th>
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
                     <td>$produto[info]</td>            
                     <td>
                     "
                     .number_format($produto['preco'],2).                     
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
                     .number_format(intval($produto['preco'] * ($produto['vendas']))).
                     "
                     </td> 
                     
                     

                     <td>
                  
                                      

                     <a class='btn btn-primary' 

                       href='../controller/produtos.php?id=$produto[id]&action=update' >
                     
                       Editar

                     </a>  
                     

                  
                  </a> 

                    
                  



                     <a class='btn btn-primary' 

                       href='../controller/produtos.php?id=$produto[id]&action=delete'>
                     
                       Delete

                     </a>  
                     


                     
                     </td>                        
                   </tr>                      
                  ";
                  }
           
              ?>
              
            </tbody>
         </table>
        
    </div>


 </section>





 <section id="insert" class="container-modal">




  <div class="content-modal" >


     <h2>Cadastrar Produtos</h2>
    


    <form method="post" action="../controller/produtos.php">
	   

      <input type="hidden" name="insert" value="">


	    <div class="row mb-3">
		 
		    <label class="col-sm-3 col-form-label">Imagem</label>
			
			  <div class="col-sm-6">
			     <input type="text" class="form-control" name="img" value="">
			  </div>
		 
		 </div>
	   
	   
	   
	     <div class="row mb-3">
		 
		    <label class="col-sm-3 col-form-label">Nome</label>
			
			  <div class="col-sm-6">
			     <input type="text" class="form-control" name="nome" value="">
			  </div>
		 
		  </div>
		 
		 
		 
		 <div class="row mb-3">
		 
		    <label class="col-sm-3 col-form-label">Informações</label>
			
			  <div class="col-sm-6">
			     <input type="text" class="form-control" name="info" value="">
			  </div>
		 
		 </div>
		 
		 
		 
		 <div class="row mb-3">
		 
		    <label class="col-sm-3 col-form-label">Preço</label>
			
			  <div class="col-sm-6">
			     <input type="text" class="form-control" name="preco" value="">
			  </div>
		 
		 </div>
	   
	   
	   <div class="row mb-3">
		 
		    <label class="col-sm-3 col-form-label">Estoque</label>
			
			  <div class="col-sm-6">
			     <input type="text" class="form-control" name="estoque" value="">
			  </div>
		 
		 </div>
	   
	   
	   
	   
	   <div class="row mb-3">
		 
		    <label class="col-sm-3 col-form-label">Produção</label>
			
			  <div class="col-sm-6">
			     <input type="text" class="form-control" name="producao" value="">
			  </div>
		 
		 </div>
	   
	   	   
	   <div class="row mb-3">
		 
		    <div class="offset-sm-3  col-sm-3 d-grid">
			 
		 	     <button type="submit" class="btn btn-primary">Cadastrar</button>     
           
          <!-- <a class="btn btn-primary"        
              href='../controller/produtos.php?action=insert'  role="button">
               Novo Produto
             </a>  --> 
			  
		   </div>
			
         			 		 
      </div>
	   


	  </form>

       
      <div class="row mb-3">
      
         <div class="offset-sm-3  col-sm-3 d-grid">
			  
            <button class="btn btn-primary btnClose">Cancelar</button> 
                                
         </div>

      </div>



   


  <div class="msg">

  <?php

if ( !$successMsg == ""){      
   ?>

   <script>       
       openModal('insert'); 
       function openModal (modalName){       
       const modal = document.getElementById(modalName);    
       modal.classList.add('show');	
      }
   </script>


    <?php
echo"
  <div class='row mb-3'>
   <div class='offset-sm-3  col-sm-6'>

    <div class='alert alert-success alert-dismissible fade show' role='alert'>
       <strong> $successMsg </strong> 
       <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>

   </div>
  </div>
";
}   
elseif( !$errorMsg == "" ) { 
   ?>

   <script>       
       openModal('insert'); 
       function openModal (modalName){       
       const modal = document.getElementById(modalName);    
       modal.classList.add('show');	
      }
   </script>


    <?php

    echo"
    <div class='row mb-3'>
     <div class='offset-sm-3  col-sm-6'>
 
      <div class='alert alert-warning alert-dismissible fade show' role='alert'>
           <strong>$errorMsg</strong> 
           <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>

      </div>
     </div>
    ";
} 

?>
  </div>
 


 </div>


</section>






 <script src="../js/function.js"> </script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>

  

</body>
</html>