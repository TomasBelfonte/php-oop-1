<?php
class Movie {
    public $titolo;
    private $genere;
    private $anno;


    function __construct($_genere, $_anno) {
        $this->setGenere($_genere);
        $this->setAnno($_anno);
    }

    public function setGenere($_genere) {
        $this->genere = $_genere;
    }

    public function getGenere() {
        return $this->genere;
    }

    public function setAnno($_anno) {
        $this->anno = $_anno;
    }

    public function getAnno () {
        return $this->anno;
    }
}
