<?php
require_once "Aluno.php";

$aluno1 = new Aluno("Mikael Gaúna", "Sistemas de Informação", 3);
$aluno2 = new Aluno("Cauê Oliveira", "Sistemas de Informação", 3);
$aluno3 = new Aluno("Felipe Portela", "Sistemas de Informação", 3);

$aluno1->exibir();
$aluno2->exibir();
$aluno3->exibir();

echo "Total de alunos cadastrados: " . Aluno::$quantidade;
