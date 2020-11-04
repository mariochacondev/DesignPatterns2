<?php
include_once "Animal.php";

abstract class Reptile extends Animal{
    
    public function __construct(string $name, BehaviourSpeaking $behaviourSpeaking) {
        parent::__construct($name, $behaviourSpeaking);
        $this->setFood("viande");
    }

}