<?php
define ('BASEPATH', realpath(dirname(__FILE__)));
require_once ('autoload.php');

$compA = new ConcreteComponentA();
$compA->operate();
echo '<br>';
echo '<br>';
$compA = new ConcreteDecorator1($compA);
$compA->operate();
echo '<br>';
echo '<br>';
$compB = new ConcreteDecorator3(new ConcreteDecorator2(new ConcreteComponentB()));
$compB->operate();
echo '<br>';
