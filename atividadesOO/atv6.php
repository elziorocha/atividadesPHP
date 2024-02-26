<?php

class Veiculo {
    protected $marca;
    protected $modelo;

    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function exibirInformacoes() {
        echo "Marca: {$this->marca}, Modelo: {$this->modelo} ";
    }
}

class Carro extends Veiculo {
    private $numPortas;

    public function __construct($marca, $modelo, $numPortas) {
        parent::__construct($marca, $modelo);
        $this->numPortas = $numPortas;
    }

    public function exibirInformacoes() {
        parent::exibirInformacoes();
        echo "Número de Portas: {$this->numPortas}\n";
    }
}

class Moto extends Veiculo {
    private $cilindradas;

    public function __construct($marca, $modelo, $cilindradas) {
        parent::__construct($marca, $modelo);
        $this->cilindradas = $cilindradas;
    }

    public function exibirInformacoes() {
        parent::exibirInformacoes();
        echo "Cilindradas: {$this->cilindradas}\n";
    }
}

$carro = new Carro("Toyota", "Corolla /", 4);
$moto = new Moto("Honda", "CBR600RR /", 600);

$carro->exibirInformacoes();
echo "<br>";
$moto->exibirInformacoes();
