<?php
require "database.php";
class Vist extends DBConnection{
    private $cons;
    function __construct() {
        parent:: __construct();
        $this->cons=$this->db;
        //echo "S";
        //$this->cons=$this->getConnection ;
    }

    public function addConatct($name,$title,$subje){
        $date=date("Y-m-d H:i:s");
        //"INSERT INTO contact (name,title,subject,data_send,status)VALUE(?,?,?,?)";
        $sql=$this->cons->prepare("INSERT INTO contact (name,email,subject,data_send,status)VALUES(?,?,?,?,?)");
        if($sql->execute(array($name,$title,$subje,$date,"new"))){
             header("location:../index.php?msg=don");
        }
        else{
  echo"oo";
        }
        
    }

    public function getService(){
        $sql=$this->cons->prepare("SELECT * FROM gservec");
        $sql->execute();
        return $sql ;
    }
    public function getServiceItem($id){
        $sql=$this->cons->prepare("SELECT * FROM gservec WHERE id=?");
        $sql->execute(array($id));
        return $sql ;
    }

    public function getProudect(){
        $sql=$this->cons->prepare("SELECT * FROM proudect");
        $sql->execute();
        return $sql ;
    }

    public function getProudectItem($id){
        $sql=$this->cons->prepare("SELECT * FROM proudect WHERE id=?");
        $sql->execute(array($id));
        return $sql ;
    }

   
    public function addMessg($name,$phone,$email,$txts){
        $sql=$this->cons->prepare("INSERT INTO contact(name,phone,email,contc)VALUES(?,?,?,?)");
        if($sql->execute(array($name,$phone,$email,$txts))){
            header("location:index.php?msg=done");
        }
    }

    public function addCV($arname,$enname,$emai,$phone,$majer,$path){
        $sql=$this->cons->prepare("INSERT INTO job (name,en_name,email,phone,majer,cv_path)VALUES(?,?,?,?,?,?)");
        if($sql->execute(array($arname,$enname,$emai,$phone,$majer,$path))){
             header("location:jobs.php?msg=done");
        }
    }

    public function insertorder($name,$phone,$email,$prod,$country,$mun){
        $dat=date("Y-m-d");
        $sql=$this->cons->prepare("INSERT INTO order_proc(name,phone,email,prod_id,country,mun,date_insert)VALUES(?,?,?,?,?,?,?)");
        if($sql->execute(array($name,$phone,$email,$prod,$country,$mun,$dat))){
            return "done";
        }
        else{
            return "Dd";
        }
    
    }

    public function getaboit(){
        $sql=$this->db->prepare("SELECT * FROM about");
        $sql->execute();
        return $sql;
    }

    public function getWork(){
        $sql=$this->db->prepare("SELECT * FROM worktime");
        $sql->execute();
        return $sql;
    }

    public function getConta(){
        $sql=$this->db->prepare("SELECT * FROM contact_phone");
        $sql->execute();
        return $sql;
    }




}


//$v->addConatct("kk","oo","oo");