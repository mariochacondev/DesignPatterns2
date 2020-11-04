<?php
include_once "Mammal.php";

abstract class Ape extends Mammal
{
    public function __construct(string $name, BehaviourSpeaking $behaviourSpeaking) {
        parent::__construct($name, $behaviourSpeaking);
        $this->setFood("banane");
    }
}