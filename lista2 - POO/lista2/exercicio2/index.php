<?php
require_once "Atividade.php";

$atividade1 = new Atividade("Estudar programação PHP", 2);
$atividade2 = new Atividade("Praticar estruturas de dados", 3);
$atividade3 = new Atividade("Revisar engenharia de software", 1);

$atividade1->exibir();
$atividade2->exibir();
$atividade3->exibir();

echo "Total de horas de estudo: " . Atividade::$horasTotais;
