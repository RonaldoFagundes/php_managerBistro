<?php

require_once '../model/crud.php';

session_start();

$crud = new Crud();


$msgSuccess = "";
$msgError = "";
$product = "";



if ($_SERVER['REQUEST_METHOD'] == 'POST') {


  $img     = addslashes($_POST['img']);
  $name    = addslashes($_POST['nome']);
  $info    = addslashes($_POST['info']);
  $price   = addslashes($_POST['preco']);
  $storage = addslashes($_POST['estoque']);
  $make    = addslashes($_POST['producao']);


 
   if  (isset($_POST['insert'])) { 

    do{ 

      if( empty($img) || empty($name) || empty($info) || empty($price) || empty($storage) || empty($make)  ){
                 
          $msgError = "Preencha todos os campos !";
          $_SESSION['msgError'] = $msgError;

          break;                 
        
         }    


           if ($crud->insertProduto( $img, $name, $info, $price, $storage, $make)){
               
             $msgSuccess = "Produto  ".$name."  inserido com sucesso!";
             $_SESSION['msgSuccess'] = $msgSuccess ;
                        

            }else{         
             
              $msgError = ' erro " '.$crud->getMsg().' " entre em contato o suporte tecnico!'; 
              $_SESSION['msgError'] = $msgError;          
           
            }

    }while(false);     

         header("location:../pages/produtos.php");  
         exit;

     }elseif (isset($_POST['update'])) {
        
          $id     = $_POST['id'];   

          $img    = $_POST['img'];

          $nome   = $_POST['nome'];

          $info   = $_POST['info'];

          $price  = $_POST['preco'];

          $storage  = $_POST['estoque'];

          $make     = $_POST['producao'];

      if(  $update = $crud->updateProduto($id, $img, $name, $info, $price, $storage, $make) ){

        $msgSuccess = "Produto  ".$name."  Atualizado com sucesso!";        
        $_SESSION['msgSuccess'] = $msgSuccess ;
      

      }else {

        $msgError = ' erro " '.$crud->getMsg().' " entre em contato o suporte tecnico!';    
        $_SESSION['msgError'] = $msgError;

      }
      header("location:../pages/produtos.php");    
      exit;          
                      

    }elseif (isset($_POST['delete'])) {

         $id   = $_POST['id'];
 
         if(  $delete = $crud->deleteProduto($id) ){

          $msgSuccess = "Produto deletado com sucesso!";
          $_SESSION['msgSuccess'] = $msgSuccess ;

        }else {
  
          $msgError = ' erro " '.$crud->getMsg().' " entre em contato o suporte tecnico!';
           $_SESSION['msgError'] = $msgError;

        }
         
        header("location:../pages/produtos.php"); 
         exit;

    }


} elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {

   $action =  $_GET['action']; 

 
     if ($action == 'update'){

      $id =  $_GET['id'];
      $product = $crud->selectProdutosBy($id);  

        header("location:../pages/update.php?product=".urlencode(serialize($product)));
        exit;

     }
     elseif ($action == 'delete'){

      $id =  $_GET['id'];
      $product = $crud->selectProdutosBy($id); 
      header("location:../pages/delete.php?product=".urlencode(serialize($product)));
      exit;

    }elseif ($action == 'reset'){

      header("location:../pages/produtos.php");
      $_SESSION['msgSuccess'] = "" ;
      $_SESSION['msgError'] = "";
      exit;

    }

exit; 

 
} 
























 /*
  $img     = $_POST['img'];
  $name    = $_POST['name'];
  $info    = $_POST['info'];
  $price   = $_POST['preco'];

  $storage = $_POST['estoque'];
  $make    = $_POST['producao'];
 

    do{ 


    if( empty($img) || empty($name) || empty($info) || empty($price) || empty($storage) || empty($make)  ){

        $msg = "Preencha todos os campos !";
        $error = true;
        break;



      }
      else{


  if (isset($_POST['insert'])) {

    

   if (empty($img) || empty($name) || empty($info) || empty($price) || empty($storage) || empty($make)) {

        $msg = "Preencha todos os campos !";
        $error = true;
       
         }else{ 
          echo 'metodo cadastrra ';
      } 


   } elseif (isset($_POST['update'])) {


    $id   = $_POST['id'];
    //  $img  = addslashes($_POST['img']);
    // $id =  $_GET['id']; 
    echo ' metodo atualizar id n??  ' . $id;
  } else {
    $id   = $_POST['id'];

    echo ' metodo de??etar id n??  ' . $id;
  }
} elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {



  $id =  $_GET['id'];

  $product = $crud->selectProdutosBy($id);

  header("location:../pages/index.php?product=" . urlencode(serialize($product)));
} 


















 

  if($_SERVER['REQUEST_METHOD']=='POST'){  
          

     $img = $_POST['img'];
	   $name = $_POST['name'];
	   $info = $_POST['info'];
	   $price = $_POST['preco'];
	   $storage = $_POST['estoque'];
     $make = $_POST['producao'];
	   
        do{

          if( empty($img) || empty($name) || empty($info) || empty($price) || empty($storage) || empty($make)  ){

              $msg = "Preencha todos os campos !";
              $error = true;
              break;


           }else{

             
             if (isset($_POST['id'])){

                 $id = $_POST['id'];
        
        
             echo ' chamar metodo update  '.$id;
        
        
            }else{
        
        
        
               echo ' chamar metodo insert  ';
        




             //               
             if ($crud->insertProduto( $img, $name, $info, $price, $storage, $make)){
               
                $msg = "Produto  ".$name."  inserido com sucesso!";
                $error = false;
  
              }else{
               
  
                //$msg = " Produto j?? existe ,entre em contato com suporte ! ";
                $msg = ' erro " '.$crud->getErrorMsg().' " entre em contato o suporte tecnico!';
                $error = true;
                 
              }
            //

       
        
            }
             



           }




          
        }while(false);

       

       // header("location:../pages/index.php?msg=".$msg."&error=".$error);
        exit;
     }



    
   //  elseif($_GET['action']=='update'){
   
    elseif($_SERVER['REQUEST_METHOD']=='GET'){

                

                  $id =  $_GET['id']; 

                  $product = $crud->selectProdutosBy($id); 
                     
                  header ("location:../pages/index.php?product=".urlencode(serialize($product)) );



         
     }









  
     





     elseif($_GET['action']=='update'){

       $id = $_GET['id'];
       $img = $_GET['img'];
       $nome = $_GET['nome'];
       $info = $_GET['info'];
       $preco = $_GET['preco'];
       $estoque = $_GET['estoque'];
       $producao = $_GET['producao'];

       echo ' '.$id.' '.$img.' '.$nome.' '.$info.' '.$preco.' '.$estoque.' '.$producao;  
         echo 'ta foda';
     } 
     
   











       



   ?>

 


   <div>
     <h1><?php echo $product['id'];?></h1>
     <h1><?php echo $product['nome'];?></h1>
     <h1><?php echo $product['info'];?></h1>
     <h1><?php echo $product['preco'];?></h1>
   </div> 
   
   
   
   */
   
   
   

