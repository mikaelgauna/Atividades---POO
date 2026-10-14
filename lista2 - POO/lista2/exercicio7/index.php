<?php
require_once "Alerta.php";

$alerta1 = new Alerta("Risco de alagamento", Alerta::STATUS_PENDENTE);
$alerta2 = new Alerta("Abrigo aberto para moradores", Alerta::STATUS_ENVIADO);
$alerta3 = new Alerta("Rua liberada após a enchente", Alerta::STATUS_RESOLVIDO);

$alerta1->exibir();
$alerta2->exibir();
$alerta3->exibir();
