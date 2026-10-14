<?php
class Atividade {
    public static $horasTotais = 0;
    private $nome;
    private $horas;

    public function __construct($nome, $horas) {
        $this->nome = $nome;
        $this->horas = $horas;
        self::$horasTotais += $horas;
    }

    public function exibir() {
        echo $this->nome . " - Carga horária: " . $this->horas . " horas<br>";
    }
}
