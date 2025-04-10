<?php
require_once("animal.php");

class ape extends animal
{
    public $legs = 2;


    public function yell()
    {
        echo "Nama : " . $this->name . "<br>";
        echo "Legs : " . $this->legs . "<br>";
        echo "Cold_blooded : " . $this->cold_blooded . "<br>";
        echo "yell = AUOOOO! <br><br>";
    }
}
