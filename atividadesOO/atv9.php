<?php

class Animal2 {
    public function emitirSom() {
        echo "Som genérico de animal";
    }
}

class Cachorro2 extends Animal2 {
    public function emitirSom() {
        echo "Au Au!";
    }
}

class Gato extends Animal2 {
    public function emitirSom() {
        echo "Miau!";
    }
}

$cachorro = new Cachorro2();
$gato = new Gato();

echo "O cachorro faz: ";
$cachorro->emitirSom();
echo "<br>";
echo "O gato faz: ";
$gato->emitirSom();

?>