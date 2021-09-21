<?php
abstract class Decorator implements Droide {
    protected $component;

    public function __construct(Droide $component){
        $this->component = $component;
    }
}
?>
