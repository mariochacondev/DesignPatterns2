<?php
abstract class Animal
{
    private string $name;
    private string $food;
    private BehaviourSpeaking $behaviourSpeaking;


    public function __construct(string $name, BehaviourSpeaking $behaviourSpeaking) {
        $this->setName($name);
        $this->setFood("");
        $this->setBehaviourSpeaking($behaviourSpeaking);
    }


    public function getBehaviourSpeaking(): BehaviourSpeaking{

        return $this->behaviourSpeaking;
    }


    public function setBehaviourSpeaking(BehaviourSpeaking $behaviourSpeaking): void {

        $this->behaviourSpeaking = $behaviourSpeaking;
    }


    public function getName(): string {
        return $this->name;
    }


    public function setName(string $name): void {
        $this->name = $name;
    }

    public function getFood(): string {
        return $this->food;
    }


    public function setFood(string $food): void {
        $this->food = $food;
    }

    public function speak(): void {
        print($this->getName() . " " . $this->getBehaviourSpeaking()->speak() . "\n");
    }


    public function eat() {
        print($this->getName() . " mange " . $this->getfood(). "\n");
    }

}
