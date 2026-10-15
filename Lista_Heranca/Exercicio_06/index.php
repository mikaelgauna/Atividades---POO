<?php

class Pessoa {
    public $nome;
    public $email;

    public function __construct($nome, $email) {
        $this->nome = $nome;
        $this->email = $email;
    }

    public function apresentar() {
        echo "Nome: " . $this->nome . "<br>";
        echo "E-mail: " . $this->email . "<br>";
    }
}

class Funcionario extends Pessoa {
    public $salario;
    public $matricula;

    public function __construct($nome, $email, $salario, $matricula) {
        parent::__construct($nome, $email);
        $this->salario = $salario;
        $this->matricula = $matricula;
    }

    public function trabalhar() {
        echo $this->nome . " está trabalhando.<br>";
    }
}

class Programador extends Funcionario {
    public $linguagemPrincipal;

    public function __construct($nome, $email, $salario, $matricula, $linguagemPrincipal) {
        parent::__construct($nome, $email, $salario, $matricula);
        $this->linguagemPrincipal = $linguagemPrincipal;
    }

    public function programar() {
        echo $this->nome . " está programando em " . $this->linguagemPrincipal . ".<br>";
    }
}

class Designer extends Funcionario {
    public $ferramentaPrincipal;

    public function __construct($nome, $email, $salario, $matricula, $ferramentaPrincipal) {
        parent::__construct($nome, $email, $salario, $matricula);
        $this->ferramentaPrincipal = $ferramentaPrincipal;
    }

    public function criarLayout() {
        echo $this->nome . " está criando layouts com " . $this->ferramentaPrincipal . ".<br>";
    }
}

$programador = new Programador("Pedro", "pedro@email.com", 5000, "101", "PHP");
$designer = new Designer("Mariana", "mariana@email.com", 4500, "102", "Figma");

echo "<h2>Programador</h2>";
$programador->apresentar();
$programador->trabalhar();
$programador->programar();

echo "<h2>Designer</h2>";
$designer->apresentar();
$designer->trabalhar();
$designer->criarLayout();

?>
