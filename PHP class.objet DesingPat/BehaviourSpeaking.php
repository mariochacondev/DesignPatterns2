<?php
include_once "Animal.php";

abstract class BehaviourSpeaking {
    public abstract function speak() : string;
}