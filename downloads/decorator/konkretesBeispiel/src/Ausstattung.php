<?php
abstract class Ausstattung implements Droide {
    protected $droide;

    public function __construct(Droide $droide){
        $this->droide = $droide;
    }
}
?>
