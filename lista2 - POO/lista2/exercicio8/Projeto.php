<?php
class Projeto {
    public static $quantidade = 0;
    const REDUCAO_PADRAO = 10;

    private $nome;
    private $linguagem;
    private $orcamento;

    public function __construct($nome, $linguagem, $orcamento) {
        $this->nome = $nome;
        $this->linguagem = $linguagem;
        $this->orcamento = $orcamento;
        self::$quantidade++;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getLinguagem() {
        return $this->linguagem;
    }

    public function setLinguagem($linguagem) {
        $this->linguagem = $linguagem;
    }

    public function getOrcamento() {
        return $this->orcamento;
    }

    public function setOrcamento($orcamento) {
        if ($orcamento >= 0) {
            $this->orcamento = $orcamento;
        }
    }

    public function aplicarReducao() {
        $this->orcamento -= $this->orcamento * (self::REDUCAO_PADRAO / 100);
    }

    public function exibir() {
        echo $this->nome . " - " . $this->linguagem . " - R$ " . number_format($this->orcamento, 2, ',', '.') . "<br>";
    }
}
