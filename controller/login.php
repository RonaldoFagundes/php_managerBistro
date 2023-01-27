<?php

session_start();

require_once '../model/crud.php';


$crud = new Crud();



$msg = "";

     
if (isset($_POST['login'])){


   $email    = addslashes($_POST['email']);
   $password = addslashes($_POST['senha']);



    if( empty($email) || empty($password) ){

      $msg = "Preencha todos os campos !";
      $_SESSION['login'] = $msg;
      header("location:../index.php");
      exit;


    }else{

     $criptomd5 = md5($password);    

     $userName = $crud->selectUser ($email, $criptomd5);
     
    if ($userName != false){

       $_SESSION['login'] = $userName;
       header("location:../pages/produtos.php");
       exit;

    }else { 

      $msg = "Login ou senha incorretos !";
      $_SESSION['login'] = $msg; 
      header("location:../index.php");      
      exit;
    }
  

 }
   
   

}elseif( $_POST['cadName']  ){

  $name     = $_POST['cadName'] ;
  $email    = $_POST['cadEmail'] ;
  $password = $_POST['cadPassword'];

  $criptomd5 = md5($password);
 
  if ($crud->insertUser ($name, $email , $criptomd5) ) {
      
    $msg = "cadastrado com sucesso , faça login !".$name;
    $_SESSION['login'] = $msg;
    header("location:../index.php");
    exit;

  }else {

    $msg = " error ".$crud->getMsg()." entre em contato com suporte !";
    $_SESSION['login'] = $msg;
    header("location:../index.php");   
    exit;

  }
 

  
  
}elseif( $_GET['action']=='logout'  ){

  header("location:../index.php");
  session_destroy();
  exit;
  
}



 




 
  





 







 