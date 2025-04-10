<?php
require_once("animal.php");
require_once("ape.php");
require_once("frog.php");

$sheep = new animal("Shaun");

echo "Nama : " . $sheep->name . "<br>";
echo "Legs : " . $sheep->legs . "<br>";
echo "Cold_blooded : " . $sheep->cold_blooded . "<br> <br>";

$kodok = new frog("Buduk");
$kodok->jump();

$sungokong = new ape("Kera Sakti");
$sungokong->yell();
