<?php
class Jetpack extends Ausstattung {

    public function produce(){
        $this->droide->produce();
        echo 'Jetpack wurde hinzugefügt. <br>';
    }
}