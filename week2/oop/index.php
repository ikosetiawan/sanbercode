<?php

include("animal.php");
include("Frog.php");
include("Ape.php");

$sheep = new Animal('shaun');

echo $sheep->name;
echo "<br>";
echo $sheep->legs;
echo $sheep->coldblooded;


$frog = new Frog('buduk');
echo "<br><br>";
echo $frog->name;
echo "<br>";
echo $frog->jump();

$sungokong = new Ape("Kera Sakti");
echo "<br><br>";
echo $sungokong->name;
echo "<br>";
$sungokong->yell();
