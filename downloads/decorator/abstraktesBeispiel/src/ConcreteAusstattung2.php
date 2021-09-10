<?php
class ConcreteAusstattung2 extends Ausstattung {
    public int $newState = 999;


    public function produce(){
        $this->droide->produce();
        echo 'Jetpack operates with a new State: '.$this->newState.'<br>';
    }
}