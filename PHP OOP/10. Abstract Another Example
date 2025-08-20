<?php 
echo "Abtruct Classes & Method\n";

abstract class ParentClass{
    abstract protected function prefixName($name);
}

class ChildClass extends ParentClass{
    public function prefixName($name){
        $name=trim($name);
        if($name=='Halim Mallick'){
            $prefix='Mr.';
        }
        
        else if ($name=='Mansura Mallick'){
            $prefix='Mrs.';
        }
        else{
            $prefix=' ';
        }
        
        return $prefix." ". $name;
    }
}

$h=new ChildClass();
echo $h->prefixName(' Halim Mallick');
$m=new ChildClass();
echo"\n";
echo $m->prefixName(" Mansura Mallick");
?>
