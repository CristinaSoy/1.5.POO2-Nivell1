<?php
declare(strict_types=1);

abstract class Animal {
    protected $nom;

    public function __construct($nom) {
        $this->nom = $nom;
    }

    abstract protected function makeSound() : string;
}
?>