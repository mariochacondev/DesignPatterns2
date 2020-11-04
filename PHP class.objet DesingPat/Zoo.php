<?php
include_once "Animal.php";

class Zoo {
    private ArrayObject $animals;

    public function __construct () {
        $this->animals = new ArrayObject();
    }

    public function addAnimal (Animal $animal) {
        $this->animals->append($animal);
    }

    public function getAnimals(): ArrayObject
    {
        return $this->animals;
    }
}