<?php

session_start();

require_once '../model/crud.php';


$crud = new Crud();



$msgError = "";



   if (isset($_POST['login'])){

      $email    = addslashes($_POST['email']);
      $password = addslashes($_POST['senha']);



      if( empty($email) || empty($password) ){

         $msgError = "Preencha todos os campos !";
          $_SESSION['login'] = $msgError;

           header("location:../index.php");
           exit;

      }else{



        if ($crud->logar ($email , $password) ) {

          $userName = $crud->getMsg();
     
          $_SESSION['login'] = $userName;
          header("location:../pages/produtos.php?msgError=&msgOk=");
          exit;

        }else {
         
        
           $msgError = "Login ou senha incorretos !";
           $_SESSION['login'] = $msgError;
          
                 
           header("location:../index.php");
          
           exit;
        }


    }
      
      

}




