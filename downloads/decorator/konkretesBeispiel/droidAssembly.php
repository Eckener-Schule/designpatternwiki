<?php
define ('BASEPATH', realpath(dirname(__FILE__)));
require_once ('autoload.php');

$droid = 'Default Droid';

if($_POST['droide'] === 'b1') {
    $droid = new B1();
}
elseif($_POST['droide'] === 'b2') {
    $droid = new B2();
}
elseif($_POST['droide'] === 'b3') {
    $droid = new B3();
}
elseif($_POST['droide'] === 'bx') {
    $droid = new BX();
}
if(isset($_POST['blaster']) && $_POST['blaster'] === 'blaster'){
    $droid = new Blaster($droid);
}
if(isset($_POST['jetpack']) && $_POST['jetpack'] === 'jetpack'){
    $droid = new Jetpack($droid);
}
if(isset($_POST['kommunikationsmodul']) && $_POST['kommunikationsmodul'] === 'kommunikationsmodul'){
    $droid = new Kommunikationsmodul($droid);
}
if(isset($_POST['schild']) && $_POST['schild'] === 'schild'){
    $droid = new Schild($droid);
}

$droid = new Schild(new Kommunikationsmodul(new Jetpack(new BX())))
?>

<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
        body{
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body class="container text-center">

<h1>Droiden Fabrik</h1>
<p>Ihr Doide wurde erstellt. Bestaunen Sie ihren:</p>

<h2><?php $droid->produce(); ?></h2>

<p>Viel Spaß mit ihrer neuen Killer Maschine.</p>
<script src="../prism.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script>
    var roger = new Audio('../sounds/roger.mp3');
    var blaster = new Audio('../sounds/blaster.mp3');
    var jetpack = new Audio('../sounds/jetpack.mp3');
    var komm = new Audio('../sounds/komm.wav');
    var schild = new Audio('../sounds/schild.mp3');

    if (!!document.getElementById("d")){
        console.log('droid');
        roger.play();
    }
    if (!!document.getElementById("blaster")){
        console.log('blaster');
        blaster.play();
    }
    if (!!document.getElementById("jetpack")){
        console.log('jetpack');
        jetpack.play();
    }
    if (!!document.getElementById("kommunikationsmodul")){
        console.log('kommunikationsmodul');
        komm.play();
    }
    if (!!document.getElementById("schild")){
        console.log('schild');
        schild.play();
    }
</script>
</body>
</html>
