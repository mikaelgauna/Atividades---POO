<?php
require_once "Projeto.php";

$projeto = new Projeto("Sistema de Gestão de Salas", 2000);
$projeto->aplicarReducao();

echo "Orçamento após a redução: R$ " . number_format($projeto->getOrcamento(), 2, ',', '.');
