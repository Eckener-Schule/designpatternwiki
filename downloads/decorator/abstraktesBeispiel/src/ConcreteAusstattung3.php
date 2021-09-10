<?php
class ConcreteAusstattung3 extends Ausstattung {

    public function produce(){
        $this->droide->produce();
        echo 'Blaster operates with new Operation: '.$this->newOperation().'<br>';
    }

    public function newOperation(): int{
        return rand()*20;
    }
}