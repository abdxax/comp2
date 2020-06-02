<?php
class DBConnection{
    protected $db;
   function __construct() {
       $this->db=new PDO("mysql:host=localhost;dbname=comp2","root","");
      // echo "S";
   }

   public function getConnection (){
       return $db;
   }
}

//$d=new DBConnection();