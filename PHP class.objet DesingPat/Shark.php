<?php
include_once "Fish.php";

class Shark extends Fish {

    public function __construct(string $name, BehaviourSpeaking $behaviourSpeaking) {
        parent::__construct($name, $behaviourSpeaking);
        $this->setFood("poisson");
    }
}