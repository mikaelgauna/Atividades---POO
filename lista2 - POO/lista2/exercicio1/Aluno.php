<?php
class Aluno {
    public static $quantidade = 0;
    private $nome;
    private $curso;
    private $semestre;

    public function __construct($nome, $curso, $semestre) {
        $this->nome = $nome;
        $this->curso = $curso;
        $this->semestre = $semestre;
        self::$quantidade++;
    }

    public function exibir() {
        echo "Nome: " . $this->nome . "<br>Curso: " . $this->curso . "<br>Semestre: " . $this->semestre . "º<br><br>";
    }
}
