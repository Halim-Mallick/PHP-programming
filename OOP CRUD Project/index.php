<?php
require_once "User.php";

$user=new User();
// $user->create('Halim','halimk241@gmail.com','01757175971');
// $user->create("Akib", "akib@exaple.com", "01822222222");

// echo "\n All User: \n";
// print_r ($user->getAll());

// echo "\n Update Data: \n";
// $user->update("Halim Mallick", "halim.mallick@example.com", "01933333333",1);

$user->delete(1);

?>