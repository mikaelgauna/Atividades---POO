<?php
require_once "Projeto.php";
require_once "UtilitarioTexto.php";

$projeto = new Projeto("Sistema de Gestão de Salas", "PHP", 1500);
$projeto->aplicarReducao();
$projeto->exibir();

echo UtilitarioTexto::paraMaiusculas("total de projetos criados: ") . Projeto::$quantidade;
