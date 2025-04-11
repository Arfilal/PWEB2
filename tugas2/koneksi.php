<?php
class connection{
private $servername = "localhost"; 
private $username = "root";         
private $password = "";             
private $dbname = "pwebtugas2";  

public function __construct(){
    $thos->db = new mysqli ($this->servername, $this->username, $this->password, $this->dbname);
    return $db;
}
}
?>
