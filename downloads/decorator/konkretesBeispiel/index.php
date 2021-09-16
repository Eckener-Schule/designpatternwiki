<?php
define ('BASEPATH', realpath(dirname(__FILE__)));
require_once ('autoload.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Droiden-Fabrik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://allfont.de/allfont.css?fonts=star-jedi" rel="stylesheet" type="text/css" />
    <style>

        body{
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body>

<h1>Droiden-Fabrik</h1>
<p>Erstelle deinen eigenen Droiden!</p>

<form action="droidAssembly.php" method="post">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Wähle deinen Droiden:</label>
        </div>
        <select class="custom-select" id="inputGroupSelect01" name="droide">
            <option value="b1" selected>B1-Kampfdroide</option>
            <option value="b2">B2-Superkampfdroide</option>
            <option value="b3">B3-Ultrakampfdroide</option>
            <option value="bx">BX-Kommandodroide</option>
        </select>
    </div>
    <p>Welche Ausstattung soll der Droide haben?</p>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="blaster" name="blaster" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">
            Blaster
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="jetpack" name="jetpack" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">
            Jetpack
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="kommunikationsmodul" name="kommunikationsmodul" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">
            Kommunikationsmodul
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="schild" name="schild" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">
            Schild
        </label>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Modifizieren</button>
</form>
<script src="../prism.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>
