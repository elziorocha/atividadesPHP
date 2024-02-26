<?php

namespace Loja;

class Cliente {
    private $nome;
    private $email;

    public function __construct($nome, $email) {
        $this->nome = $nome;
        $this->email = $email;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }
}

class Pedido {
    private $id;
    private $cliente;
    private $valor;

    public function __construct($id, Cliente $cliente, $valor) {
        $this->id = $id;
        $this->cliente = $cliente;
        $this->valor = $valor;
    }

    public function getId() {
        return $this->id;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function getValor() {
        return $this->valor;
    }
}

namespace Financeiro;

use Loja\Pedido;

class Pagamento {
    private $pedido;
    private $valorPago;

    public function __construct(Pedido $pedido, $valorPago) {
        $this->pedido = $pedido;
        $this->valorPago = $valorPago;
    }

    public function getPedido() {
        return $this->pedido;
    }

    public function getValorPago() {
        return $this->valorPago;
    }
}

$cliente = new \Loja\Cliente("João", "joao@example.com");

$pedido = new \Loja\Pedido(1, $cliente, 100);

$pagamento = new \Financeiro\Pagamento($pedido, 80);

echo "Pagamento realizado para o pedido {$pagamento->getPedido()->getId()} no valor de {$pagamento->getValorPago()}.";
echo "<br>";
echo "Cliente: {$pagamento->getPedido()->getCliente()->getNome()} ({$pagamento->getPedido()->getCliente()->getEmail()}).";

?>