<?php
class Schild extends Ausstattung {

    public function produce(){
        $this->droide->produce();
        echo '<span id="schild">mit Schild </span>';
    }
}