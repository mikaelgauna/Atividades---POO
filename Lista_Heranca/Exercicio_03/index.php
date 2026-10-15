<?php

class Pessoa {
    public $nome;
    public $idade;
    public $email;

    public function __construct($nome, $idade, $email) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->email = $email;
    }

    public function apresentar() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Idade: " . $this->idade . "<br>";
        echo "E-mail: " . $this->email . "<br>";
    }
}

class Aluno extends Pessoa {
    public $matricula;
    public $curso;

    public function __construct($nome, $idade, $email, $matricula, $curso) {
        parent::__construct($nome, $idade, $email);
        $this->matricula = $matricula;
        $this->curso = $curso;
    }

    public function estudar() {
        echo $this->nome . " está estudando.<br>";
    }
}

class Professor extends Pessoa {
    public $especialidade;
    public $salario;

    public function __construct($nome, $idade, $email, $especialidade, $salario) {
        parent::__construct($nome, $idade, $email);
        $this->especialidade = $especialidade;
        $this->salario = $salario;
    }

    public function ministrarAula() {
        echo $this->nome . " está ministrando uma aula.<br>";
    }
}

$aluno1 = new Aluno("Pedro", 20, "pedro@email.com", "101", "Sistemas de Informação");
$aluno2 = new Aluno("Mariana", 22, "mariana@email.com", "102", "Informática");
$professor = new Professor("João", 40, "joao@email.com", "Programação", 5000);

echo "<h2>Aluno 1</h2>";
$aluno1->apresentar();
echo "Matrícula: " . $aluno1->matricula . "<br>";
echo "Curso: " . $aluno1->curso . "<br>";
$aluno1->estudar();

echo "<h2>Aluno 2</h2>";
$aluno2->apresentar();
echo "Matrícula: " . $aluno2->matricula . "<br>";
echo "Curso: " . $aluno2->curso . "<br>";
$aluno2->estudar();

echo "<h2>Professor</h2>";
$professor->apresentar();
echo "Especialidade: " . $professor->especialidade . "<br>";
echo "Salário: R$ " . number_format($professor->salario, 2, ",", ".") . "<br>";
$professor->ministrarAula();

?>
