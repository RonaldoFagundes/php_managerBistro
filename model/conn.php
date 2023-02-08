<?php


  Class Conn
   {


     private $host;
     private $user;
     private $password;
     private $db;
     private $dsn;

    

  
      public function pdo()
      {
       $this->host="";
       $this->user="";
       $this->password="";
       $this->db="";
 
       $this->dsn = "mysql:host=$this->host;dbname=$this->db;charset=UTF8";


       try{
         $pdo = new PDO($this->dsn,$this->user,$this->password,  
         //$pdo = new PDO("mysql:host=$this->host;dbname=$this->db",$this->user,$this->password,
         array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
         );
          return $pdo;
       }catch (PDOException $e){
        //  var_dump ($e);
         echo 'erro de conexao com o banco de dados '.$e;
      }

     }




  }