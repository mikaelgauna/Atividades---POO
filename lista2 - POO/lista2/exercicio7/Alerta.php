<?php
class Alerta {
    const STATUS_PENDENTE = "Pendente";
    const STATUS_ENVIADO = "Enviado";
    const STATUS_RESOLVIDO = "Resolvido";

    private $titulo;
    private $status;

    public function __construct($titulo, $status) {
        $this->titulo = $titulo;
        $this->status = $status;
    }

    public function exibir() {
        echo "Alerta: " . $this->titulo . " - Status: " . $this->status . "<br>";
    }
}
