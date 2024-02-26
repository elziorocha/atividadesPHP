<?php

class Livro {
    private $titulo;
    private $autor;

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($novoTitulo) {
        $this->titulo = $novoTitulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function setAutor($novoAutor) {
        $this->autor = $novoAutor;
    }
}

$livro = new Livro("Pampa", "Elzio Rocha");

$livro->setTitulo('ACABO O SOSSEGO');
$livro->setAutor("mc lan");

echo "Título: " . $livro->getTitulo() . "<br>";
echo "Autor: " . $livro->getAutor() . "<br>";

?>
