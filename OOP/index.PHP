<?php
 require_once"frog.php";
 require_once"ape.php";
require_once'animal.php';
 $sheep = new animal("shaun");
 echo "name : " . $sheep->get_name();
echo "<br/> Legs : ". $sheep ->get_legs();
echo "<br>/ cold blooded : " .  $sheep->get_blood();

$kodok = new frog("duduk");
$kodok -> getfrogname();
$kodok -> getfroglegs();
$kodok -> getfrogblood();
$kodok->getfrogjump();

$ape = new ape ("kera santay");
$ape->getapename();
$ape->getapelegs();
$ape->getapeblood();
$ape->getapeyell();


?>