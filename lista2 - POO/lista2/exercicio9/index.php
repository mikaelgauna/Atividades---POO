<?php
require_once "Projeto.php";

new Projeto("Sistema de Gestão de Salas", "PHP", "Em andamento");
new Projeto("Site de notícias GreNal", "HTML, CSS e JavaScript", "Concluído");
new Projeto("Sistema de alertas de enchentes", "PHP", "Em planejamento");

Projeto::listarTodos();
