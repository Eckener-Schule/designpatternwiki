<?php

class Blaster extends Ausstattung {

    public function produce(){
        $this->droide->produce();
        echo '<span id="blaster">mit Blaster </span>';
    }
}
