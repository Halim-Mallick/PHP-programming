<?php
echo"Abtract \n";

abstract class ParentClass{
    abstract protected function info($name);
}

class ChildClass extends ParentClass{
    public function info($name, $separator=' ', $greet='Dear'){
        $name=trim($name);
        
        if ($name=='Halim Mallick'){
            $prefix='Mr.';
        }
        else if ($name=='Mansura Mallick'){
            $prefix='Mrs.';
        }
        else{
            $prefix='';
        }
        return $greet.  $separator. $prefix.  $separator. $name;
    }
}
$h=new childClass;
echo $h->info('Halim Mallick');
$m=new childclass;
echo "\n";
echo $m->info('Mansura Mallick');
?>
