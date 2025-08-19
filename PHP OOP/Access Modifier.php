<?php 
echo "Access modifier: Public/Private/Protected\n";

// Class তৈরি করা হলো
class Man{
    public $name;       // public → যেকোনো জায়গা থেকে access করা যাবে
    private $age;       // private → শুধু এই class এর ভেতর থেকে access করা যাবে
    protected $addrs;   // protected → class এর ভেতর এবং child class থেকে access করা যাবে
    
    // Constructor method (object তৈরি করার সময় auto call হয়)
    public function __construct($n, $a, $addrs){
        $this->name = $n;     // এখানে public property set হচ্ছে
        $this->age = $a;      // এখানে private property set হচ্ছে
        $this->addrs = $addrs; // এখানে protected property set হচ্ছে
    }
    
    // Public method (class এর বাইরে থেকেও call করা যাবে)
    public function info(){
        // এখানে class এর ভেতর বলে আমরা private + protected property access করতে পারছি
        return $this->name. " " . $this->age . " ". $this->addrs;
    }
}
// Object তৈরি করা হলো (constructor call হলো)
$halim = new Man('Halim', 28, 'Dhaka');

// এখানে আমরা public method call করছি
// method এর ভেতরে private/protected data access হচ্ছে
echo $halim->info(); // Output: Halim 28 Dhaka

//  কিন্তু সরাসরি নিচের লাইন লিখলে error হবে:
echo $halim->age;    // ❌ Fatal error: Cannot access private property
echo $halim->addrs;  // ❌ Fatal error: Cannot access protected property
?>
