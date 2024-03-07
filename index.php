<?php

require_once("Animal.php");
require_once("Ape.php");
require_once("Frog.php");

$sheep = new Animal("shaun", 4, "no");
$ape = new Ape("kera  sakti", 2, "no");
$frog = new Frog("buduk", 4, "no");

echo $sheep->name . "<br>";
echo $sheep->legs . "<br>";
echo $sheep->cold_blooded . "<br>";
echo "<br>";

echo $frog->name . "<br>";
echo $frog->legs . "<br>";
echo $frog->cold_blooded . "<br>";
echo "Jump : " . $frog->jump() . "<br>";

echo "<br>";
echo $ape->name . "<br>";
echo $ape->legs . "<br>";
echo $ape->cold_blooded . "<br>";
echo "Yell : " . $ape->yell() . "<br>";



