<!-- ● Creazione di una classe ‘Movie’
    ● Dichiarazione delle proprietà della classe
    ● Dichiarazione del costruttore
    ● Dichiarazione di almeno un metodo.
    ● Fare poi degli esempi di utilizzo della classe -->

<?php

class Movie {

    public $titolo;
    public $regista;
    public $genere;
    public $prezzo;
    public $sconto = 25;

    public function __construct($_titolo,$_regista,$_genere,$_prezzo){
        $this->titolo = $_titolo;
        $this->regista = $_regista;
        $this->genere = $_genere;
        $this->prezzo = $_prezzo;
    }

    public function setSconto($_sconto){
        if ($_genere = 'fantascienza') {
            $this->prezzo = $_prezzo - (($_prezzo / 100) * $_sconto);
        }
    }

    public function getSconto(){
        return $this->prezzo;
    }

}

$movie1 = new Movie('STAR WARS','George Lucas','fantascienza',8);
var_dump($movie1);

$movie2 = new Movie('THE HATEFUL EIGHT','Quentin Tarantino','storico',10);
var_dump($movie2);



?>