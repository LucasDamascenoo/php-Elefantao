<?php

// array associativo é quando atribuimos valores dentro de um array (chave => valor)

$conta1 = [
  
  'titular' => 'Lucas',
  'saldo' => 198.76

];

$conta2 = [
  'titular' => 'Maria',
  'saldo' => 789.99


];

$conta3 = [
  'titular' => 'Tatiane',
  'saldo' => 1200

];

$teste = [$conta1,$conta2,$conta3];

//var_dump($teste);

for ($i = 0; $i < count($teste); $i++){
  echo $teste[$i]['titular'] . PHP_EOL;
}
