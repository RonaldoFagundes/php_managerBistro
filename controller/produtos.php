<?php

 require_once '../model/crud.php';


 $crud = new Crud();





   if($_GET['action']=='insert'){  

      $crud->insertProduto();

    }




   elseif($_GET['action']=='update'){

         $id = $_GET['id'] ;

       $crud->updateProduto($id);
       //echo ' chegou no controller o id nº '.$_GET['id'].' para o metodo update ';

    }



    elseif($_GET['action']=='delete'){

        $id = $_GET['id'] ;

        $crud->deleteProduto($id);
      //  echo ' chegou no controller o id nº '.$_GET['id'].' para o metodo delete';
    }










  
   
    