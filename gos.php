<?php
 declare(strict_types= 1);
require_once "Animal.php";
 class Gos extends Animal {
    public function makeSound() {
        return "guau guau";
    }
 }
 ?>