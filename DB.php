<?php

class DB{
    public $con;
    function __construct(){
        
$this->con = mysqli_connect("localhost","root","","cab_service_system");
  if(!($this->con)){
     echo "error in connection"; 
      
  }      
    }
    
}

$obj=new DB();
?>