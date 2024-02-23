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

    public function setTitulo($novoTitulo) {
        return $this->titulo = $novoTitulo;
    }

    public function setAutor($novoAutor) {
        return $this->autor = $novoAutor;
    }

}

$livro = new Livro('Pampa', 'Elzio Rocha');

echo "Título: " . $livro->getTitulo();
echo "<br>";
echo "Autor: " . $livro->getAutor();
echo "<br><br>";

$livro->setTitulo('Pampa 2');
$livro->setAutor('Jesus, ele mesmo');

echo 'Título atualizado: ' . $livro->getTitulo();
echo "<br>";
echo 'Autor atualizado: ' . $livro->getAutor();

?>