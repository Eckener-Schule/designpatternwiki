<?php

class ConcreteDecorator1 extends Decorator {

    public function operate(){
        $this->component->operate();
        echo 'ConcreteDecorator1 operates!<br>';
    }
}
