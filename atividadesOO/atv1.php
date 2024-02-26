<?php

class Livro {
    private $titulo;

    private $autor;

    public function __construct($titulo, $autor){
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }
}

$livro = new Livro('Pampa', 'Elzio Rocha');

echo "Título: " . $livro->getTitulo();
echo "<br>";
echo "Autor: " . $livro->getAutor();

?>