<?php
require_once("ape.php");
require_once("frog.php");

class animal
{
    public $name;
    public $legs = 4;
    public $cold_blooded = "no";

    public function __construct($name)
    {
        $this->name = $name;
    }
}
