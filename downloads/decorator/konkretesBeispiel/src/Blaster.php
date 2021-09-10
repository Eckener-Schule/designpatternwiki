<?php

class Blaster extends Ausstattung {

    public function produce(){
        $this->droide->produce();
        echo 'Blaster wurde hinzugefügt *pew pew*<br>';
    }
}
