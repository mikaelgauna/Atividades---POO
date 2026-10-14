<?php
class Projeto {
    private static $todos = [];
    private $nome;
    private $linguagem;
    private $status;

    public function __construct($nome, $linguagem, $status) {
        $this->nome = $nome;
        $this->linguagem = $linguagem;
        $this->status = $status;
        self::$todos[] = $this;
    }

    public function exibir() {
        echo "Projeto: " . $this->nome . "<br>Linguagem: " . $this->linguagem . "<br>Status: " . $this->status . "<br><br>";
    }

    public static function listarTodos() {
        foreach (self::$todos as $obj) {
            $obj->exibir();
        }
    }
}
