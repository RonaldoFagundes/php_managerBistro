<?php 

$successMsg =   $_GET['msgOk'] ;         
$errorMsg = $_GET['msgError'];
$arrayProduct = unserialize(urldecode($_GET['product']));
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar
      <?php 
        echo $arrayProduct['nome']
       ?>
     </title>
     <link rel="icon" href="../img/<?php echo $arrayProduct['img']  ?>.png">

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	 
	 <link rel="stylesheet" href="../css//style.css">
</head>
<body>
    




<section class="container-update"> 




<div class="content-update">



   <h2>Deletar Produtos</h2>

   


 <div class="info-prod">


  <div>
    <img src="../img/<?php echo $arrayProduct['img']  ?>.png"/>
  </div>



 <div>    
   <span>
     <?php 
      echo $arrayProduct['nome']
     ?>
   </span>
 </div>


</div> 


  


 <form method="post" action="../controller/produtos.php">
   

   <input type="hidden" name="id" value="<?php echo $arrayProduct['id'] ?>">


    <input type="hidden" name="delete" value="">
          

     <div class="row mb-3">
     
        <label class="col-sm-3 col-form-label">Imagem</label>
        
          <div class="col-sm-6">
             <input type="text" class="form-control" name="img" 
            value="<?php  echo $arrayProduct['img'] ?>" readonly>
          </div>
     
     </div>
   
   
   
     <div class="row mb-3">
     
        <label class="col-sm-3 col-form-label">Nome</label>
        
          <div class="col-sm-6">
             <input type="text" class="form-control" name="nome" 
            value="<?php  echo $arrayProduct['nome'] ?>" readonly>
          </div>
     
     </div>
     
     
     
     <div class="row mb-3">
     
        <label class="col-sm-3 col-form-label">Informações</label>
        
          <div class="col-sm-6">
             <input type="text" class="form-control" name="info"
            value="<?php  echo $arrayProduct['info'] ?> " readonly>
          </div>
     
     </div>
     
     
     
     <div class="row mb-3">
     
        <label class="col-sm-3 col-form-label">Preço</label>
        
          <div class="col-sm-6">
             <input type="text" class="form-control" name="preco" 
          value="<?php  echo $arrayProduct['preco'] ?> " readonly>
          </div>
     
     </div>
   
   
   <input type="hidden" name="estoque" value="">

   <input type="hidden" name="producao" value="">
    

   
   
   
  


   
   <div class="row mb-3">		 

       <div class="offset-sm-3  col-sm-3 d-grid">
        

            <button type="submit" class="btn btn-primary">Deletar</button>  
                    

        <!--  <a class="btn btn-primary"        
          href='../controller/produtos.php?action=delete'  role="button">
           Deletar
         </a>   -->
          
        </div>
        

     
         <div class="col-sm-3 d-grid">
          
           <!-- <button class="btn btn-primary cancelar">Cancelar</button>  -->
             
            
              <!-- <a class="btn btn-outline-primary" href="" role="button">Cancelar</a> -->
             
             
             

              <a class="btn btn-primary btnInsert"        
                 href='produtos.php?msgError=&msgOk='  role="button">
                      Cancelar
              </a>
        </div>
     

    </div>
   






    <?php 
          
         
          if ( !$successMsg == ""){      
         
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
                          
    



         


   
if( !$errorMsg == "" ) {      
    echo"
      <div class='alert alert-warning alert-dismissible fade show' role='alert'>
           <strong>$errorMsg</strong> 
           <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>
    ";
} 

?>





 </form>






</div>




</section>



<!-- <script src="../js/function.js"> </script> -->


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>

  

</body>
</html>