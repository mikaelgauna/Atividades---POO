<?php
class Projeto {
    const REDUCAO_PADRAO = 10;
    private $nome;
    private $orcamento;

    public function __construct($nome, $orcamento) {
        $this->nome = $nome;
        $this->orcamento = $orcamento;
    }

    public function aplicarReducao() {
        $reducao = $this->orcamento * (self::REDUCAO_PADRAO / 100);
        $this->orcamento -= $reducao;
    }

    public function getOrcamento() {
        return $this->orcamento;
    }
}
