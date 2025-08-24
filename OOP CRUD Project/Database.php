<?php
class Database{
    public $host='localhost';
    public $user='root';
    public $pass='';
    public $db_name='oop_crud';
    public $conn;

    public function __construct(){
        $this->conn=new mysqli($this->host, $this->user,$this->pass,$this->db_name);
        if ($this->conn->connect_error){
            die("connection Failed" .$this->conn->connect_error);
            }
    }
}
?>