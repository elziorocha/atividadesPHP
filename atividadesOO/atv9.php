<?php

class Animal2 {
    public function emitirSom() {
        echo "Som genérico de animal";
    }
}

class Cachorro extends Animal2 {
    public function emitirSom() {
        echo "Au Au!";
    }
}

class Gato extends Animal2 {
    public function emitirSom() {
        echo "Miau!";
    }
}

$cachorro = new Cachorro();
$gato = new Gato();

echo "O cachorro faz: ";
$cachorro->emitirSom();
echo "<br>";
echo "O gato faz: ";
$gato->emitirSom();

?>