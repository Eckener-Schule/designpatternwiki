<?php
define ('BASEPATH', realpath(dirname(__FILE__)));
require_once ('autoload.php');

$B1Droide = new B1();
$B1Droide->produce();
echo '<br>';
echo '<br>';
$B1Droide = new Blaster($B1Droide);
$B1Droide->produce();
echo '<br>';
echo '<br>';
$B2Droide = new Blaster(new Jetpack(new B2()));
$B2Droide->produce();
echo '<br>';
echo '<br>';
$B3Droide = new Schild(new Blaster(new B3));
$B3Droide->produce();
echo '<br>';
echo '<br>';
$BXDroide = new Kommunikationsmodul(new Jetpack(new BX));
$BXDroide->produce();
