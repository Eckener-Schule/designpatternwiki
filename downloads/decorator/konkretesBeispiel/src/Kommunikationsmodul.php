<?php
class Kommunikationsmodul extends Ausstattung {

    public function produce(){
        $this->droide->produce();
        echo '<span id="kommunikationsmodul">mit Kommunikationsmodul </span>';
    }
}