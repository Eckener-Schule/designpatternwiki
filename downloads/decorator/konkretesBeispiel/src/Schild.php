<?php
class Schild extends Ausstattung {

    public function produce(){
        $this->droide->produce();
        echo 'Schild wurde hinzugefügt.<br>';
    }
}