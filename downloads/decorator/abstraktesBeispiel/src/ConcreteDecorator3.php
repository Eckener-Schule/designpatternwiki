<?php
class ConcreteDecorator3 extends Decorator {

    public function operate(){
        $this->component->operate();
        echo 'ConcreteDecorator1 operates with new Operation: '.$this->newOperation().'<br>';
    }

    public function newOperation(): int{
        return rand()*20;
    }
}