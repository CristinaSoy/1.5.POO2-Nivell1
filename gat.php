<?php
declare(strict_types = 1);
require_once "Animal.php";

 class Gat extends Animal {
    public function makeSound() : string {
        return "miau miau";
    }
 }
 ?>