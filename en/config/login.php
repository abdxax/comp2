<?php
require "database.php";
class Login  extends DBConnection{
    private $cons;
    function __construct() {
        parent:: __construct();
        $this->cons=$this->db;
        //echo "S";
        //$this->cons=$this->getConnection ;
    }

    public function login($email,$pass){
        
        $sql=$this->db->prepare("SELECT * FROM user WHERE email=? AND password=?");
        $sql->execute(array($email,$pass));
        if($sql->rowCount()>0){
           
           foreach($sql as $sq){
            $_SESSION['email']=$email;
            $_SESSION['pass']=$pass;
            $_SESSION['role']=$sq['role'];
            header("location:admin/index.php");
           }
        }
    }
}