<?php

class ContaBancaria {
    public $titular;
    protected $saldo;

    public function __construct($titular, $saldo) {
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function depositar($valor) {
        if ($valor <= 0) {
            echo "Valor de depósito inválido.<br>";
            return;
        }

        $this->saldo += $valor;
        echo "Depósito realizado.<br>";
    }

    public function sacar($valor) {
        if ($valor <= 0) {
            echo "Valor de saque inválido.<br>";
            return;
        }

        if ($valor > $this->saldo) {
            echo "Saque recusado: saldo insuficiente.<br>";
            return;
        }

        $this->saldo -= $valor;
        echo "Saque realizado.<br>";
    }

    public function consultarSaldo() {
        echo "Titular: " . $this->titular . "<br>";
        echo "Saldo: R$ " . number_format($this->saldo, 2, ",", ".") . "<br>";
    }
}

class ContaCorrente extends ContaBancaria {
    public $limite;

    public function __construct($titular, $saldo, $limite) {
        parent::__construct($titular, $saldo);
        $this->limite = $limite;
    }

    public function usarLimite($valor) {
        if ($valor <= 0) {
            echo "Valor inválido.<br>";
        } elseif ($valor > $this->limite) {
            echo "Operação recusada: limite excedido.<br>";
        } else {
            $this->limite -= $valor;
            echo "Limite utilizado: R$ " . number_format($valor, 2, ",", ".") . "<br>";
        }
    }
}

class ContaPoupanca extends ContaBancaria {
    public $taxaRendimento;

    public function __construct($titular, $saldo, $taxaRendimento) {
        parent::__construct($titular, $saldo);
        $this->taxaRendimento = $taxaRendimento;
    }

    public function aplicarRendimento() {
        $rendimento = $this->saldo * ($this->taxaRendimento / 100);
        $this->saldo += $rendimento;

        echo "Rendimento: R$ " . number_format($rendimento, 2, ",", ".") . "<br>";
    }
}

$conta = new ContaBancaria("Pedro", 1000);

echo "<h2>Conta bancária</h2>";
$conta->consultarSaldo();
$conta->depositar(500);
$conta->sacar(200);

echo "<h3>Saldo após operações</h3>";
$conta->consultarSaldo();

echo "<h3>Teste de saque inválido</h3>";
$conta->sacar(2000);

echo "<h3>Saldo final</h3>";
$conta->consultarSaldo();

echo "<h2>Conta corrente</h2>";
$corrente = new ContaCorrente("Ana", 1000, 500);
$corrente->usarLimite(200);
echo "Limite restante: R$ " . number_format($corrente->limite, 2, ",", ".") . "<br>";

echo "<h2>Conta poupança</h2>";
$poupanca = new ContaPoupanca("Carlos", 1000, 1);
$poupanca->aplicarRendimento();
$poupanca->consultarSaldo();

?>
