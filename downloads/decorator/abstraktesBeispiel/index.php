<?php
define ('BASEPATH', realpath(dirname(__FILE__)));
require_once ('autoload.php');

$compA = new B1();
$compA->produce();
echo '<br>';
echo '<br>';
$compA = new Blaster($compA);
$compA->produce();
echo '<br>';
echo '<br>';
$compB = new Kommunikationsmodul(new Jetpack(new B2()));
$compB->produce();
echo '<br>';
