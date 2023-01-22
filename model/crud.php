<?php



  require_once 'conn.php';



  class Crud extends Conn 
  {

    private $conn = "";
    private $pdo = "";


     private $msg = "";
   



      function __construct()
      {
        $this->conn = new Conn();
        $this->pdo = $this->conn->pdo();
      }






   public function selectProdutos()
   {    
   $query = $this->pdo->query("SELECT * FROM `tb_produtos` ");   
       return $query ;
   }




   public function selectProdutosBy($id)
   {    
   $query = $this->pdo->query("SELECT * FROM `tb_produtos` WHERE id=$id "); 
   $row = $query->fetch();

      return $row ; 
   }





  public function insertProduto(  $img, $name, $info, $price, $storage, $make)
   {

   $query = $this->pdo->prepare(" INSERT INTO tb_produtos (img, nome, info, preco, estoque, producao ) VALUES( '$img', '$name', '$info', '$price', '$storage', '$make') ");

        if ($query->execute()){
           return true;
            
        }else{

        $err = $query->errorInfo();
          $this->setMsg($err[2]);
            return false; 
      }        
     
   }






   public function updateProduto($id, $img, $name, $info, $price, $storage, $make)
   {
    $query = $this->pdo->prepare("UPDATE tb_produtos SET img='$img' , nome='$name',  info='$info' , preco='$price',  estoque='$storage',  producao='$make' WHERE id='$id' ");
 
         if ($query->execute()){
              return true;
         }else{
          $err = $query->errorInfo();
          $this->setMsg($err[2]);
             return false;
         }     
   
   }





   public function deleteProduto ($id)
   {
    $query = $this->pdo->prepare("DELETE from tb_produtos WHERE id='$id' ");

     if ($query->execute()){
        return true;
     }else{
       $err = $query->errorInfo();
       $this->setMsg($err[2]);
       return false;
      }   
   }





   public function logar ($email , $password){


         $e = 'bistro@gamil.com';
         $p = '123456';
         
         $user = 'Neyde';




        if ($e === $email && $p === $password ){
               $this->setMsg($user);
               return true;
          }else{
               return false ;
          }


          
          
   }






   
   public function setMsg ($msg){
       $this->msg = $msg;
   } 

   public function getMsg(){
      return $this->msg;
   } 



 


   
     
  }