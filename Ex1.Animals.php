<?php
declare(strict_types = 1);
echo "<h2>Sprint 1. Tema 5. Poo 2. Nivell 1.</h2>";
echo "<h3>Exercici 1. Interface animal amb métode abstracte makeSound()</h3>";

require_once "Animal.php";
require_once "Gos.php";
require_once "Gat.php";

$zoo = [];
$zoo[] = new Gos("Rumba");
$zoo[] = new Gat("Rasputin");
$zoo[] = new Gos("Lluna");

foreach($zoo as $ejemplar) {
    echo $ejemplar->makeSound(). "<br>";
}

?>