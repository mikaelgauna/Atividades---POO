<?php

class Funcionario {
    public $nome;
    public $cpf;
    public $salario;

    public function __construct($nome, $cpf, $salario) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->salario = $salario;
    }

    public function exibirFuncionario() {
        echo "Nome: " . $this->nome . "<br>";
        echo "CPF: " . $this->cpf . "<br>";
        echo "Salário: R$ " . number_format($this->salario, 2, ",", ".") . "<br>";
    }
}

class Gerente extends Funcionario {
    public $setor;

    public function __construct($nome, $cpf, $salario, $setor) {
        parent::__construct($nome, $cpf, $salario);
        $this->setor = $setor;
    }

    public function realizarReuniao() {
        echo "O gerente está realizando uma reunião.<br>";
    }
}

class Desenvolvedor extends Funcionario {
    public $linguagem;

    public function __construct($nome, $cpf, $salario, $linguagem) {
        parent::__construct($nome, $cpf, $salario);
        $this->linguagem = $linguagem;
    }

    public function programar() {
        echo "O desenvolvedor está programando em " . $this->linguagem . ".<br>";
    }
}

$gerente = new Gerente("Carlos", "12345678900", 6000, "TI");
$desenvolvedor = new Desenvolvedor("Ana", "98765432100", 4500, "PHP");

echo "<h2>Gerente</h2>";
$gerente->exibirFuncionario();
echo "Setor: " . $gerente->setor . "<br>";
$gerente->realizarReuniao();

echo "<h2>Desenvolvedor</h2>";
$desenvolvedor->exibirFuncionario();
echo "Linguagem: " . $desenvolvedor->linguagem . "<br>";
$desenvolvedor->programar();

echo "<h2>Teste do método programar()</h2>";
if (method_exists($gerente, "programar")) {
    $gerente->programar();
} else {
    echo "O gerente não possui o método programar().";
}

?>
