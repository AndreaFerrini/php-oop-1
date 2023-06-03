<?php

class Film {

    public $titolo;
    public $anno;
    public $genere;
    public $durata;

    public function __construct($_titolo, $_anno, $_genere, $_durata){
        
        $this->titolo = $_titolo;
        $this->anno = $_anno;
        $this->genere = $_genere;
        $this->durata = $_durata;

    }

    public function get_movie_deails(){
        return "Film: $this->titolo, ha una durata di: $this-> durata";
    }
    

}



?>