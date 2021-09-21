<?php
class Jetpack extends Ausstattung {

    public function produce(){
        $this->droide->produce();
        echo '<span id="jetpack">mit Jetpack </span>';
    }
}