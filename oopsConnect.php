<?php

class CrudApp{
 private $root="root";
 private $localhost="localhost";
 private $password="";
 private $db="company";
 private $conn='';
public function __construct(){
   $this->conn=mysqli_connect($this->localhost,$this->root,$this->password,$this->db);
    try {
        
            if($this->conn)
            {
            echo 'connection created successfully';
             }
            else{
                throw new mysqli_sql_exception();
                echo 'connection not created';
             }
        
     } catch (mysqli_sql_exception $e)
        {
            echo'connection error';
            echo $e->mysqli_connect_error();
            exit();
        }
    }

    public function create($name,$pass){
        $insert="insert into `emp1` (name,pass) values('$name','$pass') ";
        $res=mysqli_query($this->conn,$insert);
        try{
            if($res){
                echo "inserted";
            }else{
                echo "check create fun";
            }
        }catch(Exception $e){
                echo $e->getMessage();
        }

    }

}


?>