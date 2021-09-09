<?php
class ConcreteDecorator2 extends Decorator {
    public int $newState = 999;


    public function operate(){
        $this->component->operate();
        echo 'ConcreteDecorator2 operates with a new State: '.$this->newState.'<br>';
    }
}