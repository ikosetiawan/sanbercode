<?php

class Animal
{
    public $name;
    public $legs = 2;
    public $coldblooded = false;

    public function __construct($name)
    {
        $this->name = $name;
    }
}
