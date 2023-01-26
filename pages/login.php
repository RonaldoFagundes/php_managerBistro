<?php
   /* 
   $successMsg = $_GET['msgOk'] ; 
   $errorMsg   = $_GET['msgError']; 
   */
   session_start();
   
   $msg = "" ; 
   //$successMsg = $_SESSION['login'] ;
    
   //$successMsg = "" ; 
  // $errorMsg   = "";
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     
    <link rel="stylesheet" href="./css//style.css">
</head>
<body>
   




 <div class="container-login">
     



    <h2>Tela de Login </h2>
     




    <div class="content-login">

     


    <form method="post" action="./controller/login.php">
	   

    


     <div class="row mb-3">
    
       <label class="col-sm-3 col-form-label">e-mail</label>
     
       <div class="col-sm-6">
          <input type="text" class="form-control" name="email" value="">
       </div>
    
     </div>
    
    
    
      <div class="row mb-3">
    
       <label class="col-sm-3 col-form-label">senha</label>
     
       <div class="col-sm-6">
          <input type="password" class="form-control" name="senha" value="">
       </div>
    
     </div>
    
    
    
     
      <div class="row mb-3">
		 
		    <div class="offset-sm-3  col-sm-3 d-grid">
       
       
          <button type="submit" class="btn btn-primary" name="login">Entrar</button>  
        <!--
          <a class="btn btn-outline-primary" href="" role="button">Cancelar</a>
        -->
                 
        </div>
        
      </div>

    </form>


    </div>



     <div>

      <?php     
          
          if(isset($_SESSION['login'])){
          
            $msg = ($_SESSION['login']) ;
        

        echo"
        <div class='row mb-3 msg '>
         
         <div class='offset-sm-3  col-sm-6'>

          <div class='alert alert-warning alert-dismissible fade show' role='alert'>
             <strong>$msg</strong> 
             <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>

        </div>
       </div>
        ";
        }else{
          echo"
          <div></div>
          "; 
        }     
        

       ?>

     </div>

     



  
   
    <button class="btnInsert">
       <p>Ainda não tem cadastro? cadastre-se!</p>
    </button> 
  

     
     


<section id="insert" class="container-modal">


  <div class="content-modal" >


    <h2>Cadastrar Usuario</h2>
  

   
   <!--  <form method="post" action="./controller/login.php" name="form-cad"> -->

   <form id="form_cad" action="./controller/login.php" method="post"  > 


    <div class="row mb-3">
   
       <label class="col-sm-3 col-form-label">Nome</label>
    
       <div class="col-sm-6">
         <input type="text" class="form-control" name="cadName" value="" id="name"  required>       
       </div>
   
    </div>


  <div class="row mb-3">
   
   <label class="col-sm-3 col-form-label">E-mail</label>

    <div class="col-sm-6">
     <input type="text" class="form-control" name="cadEmail" value="" id="email"  required>       
    </div>

  </div>
   
   
   
    <div class="row mb-3">
   
      <label class="col-sm-3 col-form-label">Senha</label>
    
      <div class="col-sm-6">
         <input type="password" class="form-control"  name="cadPassword" value="" id="password" required>
      </div>
   
   </div>
   
   
      
        
   <div class="row mb-3">
   
      <div class="offset-sm-3  col-sm-3 d-grid">
     
          <!-- 
            
           <button type="submit" class="btn btn-primary">Cadastrar</button>   

           <button class="btn btn-primary btn-cad-user">Cadastrar</button>  

        
           <button type="submit" class="btn btn-primary cad-user" name="cadastrar">Cadastrar</button>  
         

           <button  class="btn btn-primary cad-user" name="cadastrar">Cadastrar</button> 
       
       
           <input type="button" value="Cadastrar" class="btn btn-primary cad-user" name="cadastrar" >

           <input type="button" value="Cadastrar" name="cadastrar" class="btn btn-primary cad-user"> 
          
          -->
         
           <a class="btn btn-primary cad-user" name="cadastrar">Cadastrar</a>

      </div>    
                   
   </div>
   

   
  </form>


     
    <div class="row mb-3">
    
        <div class="offset-sm-3  col-sm-3 d-grid">
      
          <button class="btn btn-primary btnClose">Cancelar</button> 
                              
        </div>

    </div>

    <span role="alert" id="msgError"   aria-hidden="true"></span>


 </div>


</section>




        
 </div>




 <script src="./js/function.js"> </script>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

</body>
</html>