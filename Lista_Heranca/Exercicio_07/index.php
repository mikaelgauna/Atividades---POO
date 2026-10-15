<?php

class Entrega {
    public $codigo;
    public $destino;
    public $distancia;

    public function __construct($codigo, $destino, $distancia) {
        $this->codigo = $codigo;
        $this->destino = $destino;
        $this->distancia = $distancia;
    }

    public function exibirDados() {
        echo "Código: " . $this->codigo . "<br>";
        echo "Destino: " . $this->destino . "<br>";
        echo "Distância: " . $this->distancia . " km<br>";
    }
}

class EntregaMoto extends Entrega {
    public $placa;
    public $nomeEntregador;

    public function __construct($codigo, $destino, $distancia, $placa, $nomeEntregador) {
        parent::__construct($codigo, $destino, $distancia);
        $this->placa = $placa;
        $this->nomeEntregador = $nomeEntregador;
    }

    public function realizarEntrega() {
        if ($this->distancia <= 0 || $this->distancia > 20) {
            echo "Entrega de moto inválida: distância deve ser maior que 0 e até 20 km.<br>";
            return;
        }

        echo "Entrega realizada por moto!<br>";
        echo "Entregador: " . $this->nomeEntregador . "<br>";
        echo "Placa: " . $this->placa . "<br>";
    }
}

class EntregaDrone extends Entrega {
    public $autonomia;
    public $altitude;

    public function __construct($codigo, $destino, $distancia, $autonomia, $altitude) {
        parent::__construct($codigo, $destino, $distancia);
        $this->autonomia = $autonomia;
        $this->altitude = $altitude;
    }

    public function realizarEntrega() {
        if ($this->distancia <= 0 || $this->distancia > 20) {
            echo "Entrega de drone inválida: distância deve ser maior que 0 e até 20 km.<br>";
            return;
        }

        if ($this->distancia > $this->autonomia) {
            echo "Entrega recusada: autonomia insuficiente.<br>";
            return;
        }

        echo "Entrega realizada por drone!<br>";
        echo "Autonomia: " . $this->autonomia . " km<br>";
        echo "Altitude: " . $this->altitude . " metros<br>";
    }
}

$moto = new EntregaMoto("001", "Centro", 20, "ABC1234", "Pedro");
$droneValido = new EntregaDrone("002", "Bairro", 8, 15, 100);
$droneInvalido = new EntregaDrone("003", "Zona rural", 25, 30, 120);

echo "<h2>Entrega por moto</h2>";
$moto->exibirDados();
$moto->realizarEntrega();

echo "<h2>Entrega por drone válida</h2>";
$droneValido->exibirDados();
$droneValido->realizarEntrega();

echo "<h2>Entrega por drone inválida</h2>";
$droneInvalido->exibirDados();
$droneInvalido->realizarEntrega();

?>
