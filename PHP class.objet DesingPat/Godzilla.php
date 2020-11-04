<?php
class Godzilla extends Reptile {

    public function __construct(string $name, BehaviourSpeaking $behaviourSpeaking) {
        parent::__construct($name, $behaviourSpeaking);
        $this->setFood("des villes");
    }

    public function eat() {
        print($this->getName() . " dévore et détruit " . $this->getFood() . "\n");
    }
}