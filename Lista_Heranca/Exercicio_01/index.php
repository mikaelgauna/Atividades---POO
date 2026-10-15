<?php

class Veiculo {
    public $marca;
    public $modelo;
    public $ano;

    public function __construct($marca, $modelo, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function exibirDados() {
        echo "Marca: " . $this->marca . "<br>";
        echo "Modelo: " . $this->modelo . "<br>";
        echo "Ano: " . $this->ano . "<br>";
    }
}

class Carro extends Veiculo {
    public $quantidadePortas;

    public function __construct($marca, $modelo, $ano, $quantidadePortas) {
        parent::__construct($marca, $modelo, $ano);
        $this->quantidadePortas = $quantidadePortas;
    }

    public function exibirDados() {
        parent::exibirDados();
        echo "Quantidade de portas: " . $this->quantidadePortas . "<br>";
    }
}

class Moto extends Veiculo {
    public $cilindradas;

    public function __construct($marca, $modelo, $ano, $cilindradas) {
        parent::__construct($marca, $modelo, $ano);
        $this->cilindradas = $cilindradas;
    }

    public function exibirDados() {
        parent::exibirDados();
        echo "Cilindradas: " . $this->cilindradas . " cc<br>";
    }
}

$carro = new Carro("Toyota", "Corolla", 2022, 4);
$moto = new Moto("Honda", "CG Fan", 2015, 125);

echo "<h2>Carro</h2>";
$carro->exibirDados();

echo "<h2>Moto</h2>";
$moto->exibirDados();

?>
