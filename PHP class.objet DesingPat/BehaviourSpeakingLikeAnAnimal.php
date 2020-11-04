<?php
include_once "BehaviourSpeaking.php";

class BehaviourSpeakingLikeAnAnimal extends BehaviourSpeaking {
    public function speak(): string {
        return "....Grr.....";
    }
}