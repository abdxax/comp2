<?php
require "database.php";
class Admin  extends DBConnection{
    private $cons;
    function __construct() {
        parent:: __construct();
        $this->cons=$this->db;
        //echo "S";
        //$this->cons=$this->getConnection ;
    }

    public function AddNewService($name,$des,$path){
        $sql=$this->db->prepare("INSERT INTO gservec (name,descr,path) VALUES(?,?,?)");
        if($sql->execute(array($name,$des,$path))){
            header("location:serv.php?msg=done");
        }
    }

    public function getServiec(){
        $sql=$this->db->prepare("SELECT * FROM gservec");
        $sql->execute();
        return $sql;
    }

    public function deleteServic($id){
        $sql=$this->db->prepare("DELETE FROM gservec WHERE id=?");
        if($sql->execute(array($id))){
            header("location:serv.php");
        }
    }

    //proudect 
    public function AddNewpro($name,$price,$path,$form,$tos,$prc){
        $sql=$this->db->prepare("INSERT INTO proudect (name,parec,path,froms,tos,proc) VALUES(?,?,?,?,?,?)");
        if($sql->execute(array($name,$price,$path,$form,$tos,$prc))){
            header("location:proud.php?msg=done");
        }
    }

    //conta

    public function getConta(){
        $sql=$this->db->prepare("SELECT * FROM contact_phone");
        $sql->execute();
        return $sql;
    }


    public function updatecont($email,$phone){
        $sql=$this->db->prepare("UPDATE contact_phone SET phone=?,email=?");
        if($sql->execute(array($email,$phone))){
           return "done";
        }
    }

    public function getpro(){
        $sql=$this->db->prepare("SELECT * FROM proudect");
        $sql->execute();
        return $sql;
    }

    public function deletepro($id){
        $sql=$this->db->prepare("DELETE FROM proudect WHERE id=?");
        if($sql->execute(array($id))){
            header("location:proud.php");
        }
    }

    public function jobs(){
        $sql=$this->db->prepare("SELECT * FROM job");
        $sql->execute();
        return $sql;
    }

    public function contact(){
        $sql=$this->db->prepare("SELECT * FROM contact");
        $sql->execute();
        return $sql;
    }

    public function getSella(){
        $sql=$this->db->prepare("SELECT * FROM order_proc ");
        $sql->execute();
        return $sql;
    }

   
    public function getPoc($id){
        $sql=$this->db->prepare("SELECT * FROM proudect WHERE id=?");
        $sql->execute(array($id));
        $nam='';
        foreach($sql as $sq){
         $nam=$sq['name'];
        }
        return $nam;
    }

    public function getWork(){
        $sql=$this->db->prepare("SELECT * FROM worktime");
        $sql->execute();
        return $sql;
    }

    public function updateWork($start,$from,$end,$to){
        $sql=$this->db->prepare("UPDATE worktime SET start=?,end=?,froms=?,tos=?");
        if($sql->execute(array($start,$end,$from,$to))){
           return "done";
        }
    }

    public function getaboit(){
        $sql=$this->db->prepare("SELECT * FROM about");
        $sql->execute();
        return $sql;
    }

    public function updatabout($gol,$msg,$vis){
        $sql=$this->db->prepare("UPDATE about SET gols=?,msg=?,vis=?");
        if($sql->execute(array($gol,$msg,$vis))){
           return "done";
        }
    }

    


}