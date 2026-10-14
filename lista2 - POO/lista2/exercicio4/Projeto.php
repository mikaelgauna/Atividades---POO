<?php
class Projeto {
    private $nome;
    private $linguagem;
    private $status;

    public function __construct($nome, $linguagem, $status) {
        $this->nome = $nome;
        $this->linguagem = $linguagem;
        $this->status = $status;
    }

    public static function criarPadrao() {
        return new self("Novo projeto", "PHP", "Em andamento");
    }

    public function exibir() {
        echo "Projeto: " . $this->nome . "<br>Linguagem: " . $this->linguagem . "<br>Status: " . $this->status;
    }
}
