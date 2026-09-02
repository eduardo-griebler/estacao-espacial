<?php
require_once 'classes/estacao.php';

$estacao = new Estacao('Atlas', 100.0, 100.0, 100);

echo "NOME: $estacao->nome <br>";
echo "ENERGIA: $estacao->energia% <br>";
echo "OXIGÊNIO: $estacao->oxigenio% <br>";
echo "INTEGRIDADE: $estacao->integridade%<br><br>";

$estacao->ConsumirEnergia();
echo "Energia restante: $estacao->energia%";
