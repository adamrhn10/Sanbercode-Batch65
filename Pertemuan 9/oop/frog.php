<?php
require_once("animal.php");

class frog extends animal {
    public $legs = 2;

    public function jump() {
        echo "Nama : " . $this->name . "<br>";
        echo "Legs : " . $this->legs . "<br>";
        echo "Cold_blooded : " . $this->cold_blooded . "<br>";
        echo "jump = HOP-HOP! <br><br>";
    }
}