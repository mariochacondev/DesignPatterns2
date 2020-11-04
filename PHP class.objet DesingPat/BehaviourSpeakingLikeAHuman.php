<?php
include_once "BehaviourSpeaking.php";

class BehaviourSpeakingLikeAHuman extends BehaviourSpeaking {

    public function speak(): string {
        return "Je parle comme un humain.";
    }
}