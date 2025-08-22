<?php
namespace html;
echo "PHP NameSpace \n ";

class table{
    static $title="";
    static $rows=0;
    
    public function message(){
        return "Table Name: ".self:: $title. "\nRows:".self::$rows;
    }
}
table :: $title='Halim';
table :: $rows=' 5';
$obj=new table();

?>

<!DOCTYPE html>
<html>
<title>Table info</title>
<body>
<?php 
echo $obj->message() 
?>
</body>
</html>
