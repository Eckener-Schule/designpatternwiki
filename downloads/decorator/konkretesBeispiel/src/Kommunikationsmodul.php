<?php
class Kommunikationsmodul extends Ausstattung {

    public function produce(){
        $this->droide->produce();
        echo 'Kommunikationsmodul wurde hinzugefügt. <br>';
    }
}