<?php 
echo"Static Content of OPP"."<br>";
class student{
    public $name="Mallick";
    public $age=20;
    public $address="Bogura";

    function info (){
        return "All Are Student";
    }
}

$mallick=new student();
echo $mallick->name."<br>";
echo $mallick->age."<br>";
echo $mallick->address."<br>";
echo $mallick->info();
?>
