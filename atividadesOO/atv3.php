<?php

class Animal {

    public $nome;
    public $idade;

    public function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($novoNome) {
        $this->nome = $novoNome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($novaIdade) {
        $this->idade = $novaIdade;
    }
}

class Cachorro extends Animal {
    public function getIdade() {
        return $this->idade;
    }
    public function getNome() {
        return $this->nome;
    }
}

$cachorro = new Cachorro('Olívia', 5);

echo "Nome: " . $cachorro->getNome() . "<br>";
echo "Idade: " . $cachorro->getIdade() . "<br>";

?>