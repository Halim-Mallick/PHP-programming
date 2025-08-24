<?php
require_once 'Database.php';
 class user{
    private $db;

    function __construct(){
        $this->db=(new Database())->conn;
    }

    public function create($name, $email, $phn){
        $stmt=$this->db->prepare(
            "INSERT INTO student(name,email,phone) VALUES (?,?,?)"
        );
        $stmt->bind_param("sss",$name,$email,$phn);
        return $stmt->execute();
    }

    public function getAll(){
        $result=$this->db->query("SELECT * FROM student");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function update($name, $email, $phn, $id){
        $stmt=$this->db->prepare("UPDATE student SET name=?, email=?, phone=? where id=?");
        $stmt->bind_param("sssi", $name, $email, $phn, $id);
        return $stmt->execute();
    }

    public function delete($id){
        $stmt=$this->db->prepare("DELETE FROM student where id=?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        if ($stmt->affected_rows>0){
            echo  "Deleted Successfuly";
            return true;        
        }
        else{
            echo "No Data found";
            return false;
        }
    }
 }

?>
