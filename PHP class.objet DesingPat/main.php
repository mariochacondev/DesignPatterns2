<?php
include_once "Animal.php";
include_once "Reptile.php";
include_once "Mammal.php";
include_once "Fish.php";
include_once "Ape.php";
include_once "Gorille.php";
include_once "Chimp.php";
include_once "Zoo.php";
include_once "Crocodile.php";
include_once "Godzilla.php";
include_once "Shark.php";
include_once "BehaviourSpeaking.php";
include_once "BehaviourSpeakingLikeAnAnimal.php";
include_once "BehaviourSpeakingLikeAHuman.php";
include_once "BehaviourSpeakingLikeAnApe.php";

$zoo = new Zoo();
$zoo->addAnimal(new Gorille("Kong", new BehaviourSpeakingLikeAnApe()));
$zoo->addAnimal(new Chimp("Chimppops", new BehaviourSpeakingLikeAnApe()));
$zoo->addAnimal(new Crocodile("Krok", new BehaviourSpeakingLikeAnAnimal()));
$zoo->addAnimal(new Crocodile("Krak", new BehaviourSpeakingLikeAnAnimal()));
$zoo->addAnimal(new GodZilla("GODZILLA", new BehaviourSpeakingLikeAnAnimal()));
$zoo->addAnimal(new Shark("Claw", new BehaviourSpeakingLikeAnAnimal()));


foreach ($zoo->getAnimals() as $animal) {
    $animal->speak();
    //$animal->eat();
}

print("\n");
foreach ($zoo->getAnimals() as $animal) {
    $animal->setBehaviourSpeaking(new BehaviourSpeakingLikeAHuman());
    $animal->speak();
}
print("\n");
foreach ($zoo->getAnimals() as $animal) {
    $animal->setBehaviourSpeaking(new BehaviourSpeakingLikeAnApe());
    $animal->speak();
}
