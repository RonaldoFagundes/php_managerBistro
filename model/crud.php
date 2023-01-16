<?php



  require_once 'conn.php';



  class Crud extends Conn 
  {

    private $conn = "";
    private $pdo = "";


      function __construct()
      {
        $this->conn = new Conn();
        $this->pdo = $this->conn->pdo();
      }





    /* public function listarProdutos()
    {       
  
    $query = $this->pdo->query("SELECT * FROM `tb_produtos` ");
    $fetch = $query->fetchAll(PDO::FETCH_OBJ);
   
     if(count ($fetch) >0 ){
      $query = $this->pdo->query("SELECT * FROM `tb_produtos` ");
      return $query;
     }else{
      return false;
     } 

   } */






   public function selectProdutos()
   {    
   $query = $this->pdo->query("SELECT * FROM `tb_produtos` ");   
       return $query ;
   }


   public function insertProduto()
   {
    echo ' chegou no crud para o metodo insert ';
   }


   public function updateProduto($id)
   {
    echo ' chegou no crud o id nº '.$id.' para o metodo update ';
   }


   public function deleteProduto ($id)
   {
    echo ' chegou no crud o id nº '.$id.' para o metodo delete ';
   }





   /*
   public function restartSales($id, $value)
   {

    $query = $this->pdo->prepare("UPDATE `tb_produtos` SET nome= :valor  WHERE id= :id ");
 
 
    $query->bindValue(':id', $id);
    $query->bindValue(':valor', $value);    
    $query->execute();
   }
   */

   
     
  }