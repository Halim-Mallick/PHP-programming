<?php 
echo"Dynamic Content of OPP"."<br>";
class student{
    public $name;
    public $age;
    public $address;

    function info ($fname, $age, $address){
        $this->name=$fname;
        $this->age=$age;
        $this->address=$address;
        return $fname. " ". $age. " ". $address;
    }
}

//Using class
$mallick=new student();
$rahim=new student();
$mallick->name="Mallick <br>";
echo $mallick->name;

$rahim->name="Rahim <br>";
$rahim->age="24 <br>";
echo $rahim->name;
echo $rahim->age;

//Using method
echo "------from Method------- <br>";
echo $mallick->info('mallick',12,'Dhaka'."<br>");
echo $rahim->info('rahim',18,'Dhaka');
?>
