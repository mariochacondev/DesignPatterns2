<?php
include_once "BehaviourSpeaking.php";

class BehaviourSpeakingLikeAnApe extends BehaviourSpeaking {

    public function speak(): string {
        return "Hou Hou.";
    }
}