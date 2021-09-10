<?php

class ConcreteAusstattung1 extends Ausstattung {

    public function produce(){
        $this->droide->produce();
        echo 'Blaster operates!<br>';
    }
}
