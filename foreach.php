<?php


// array associativo é quando atribuimos valores dentro de um array (chave => valor)

$contasCorrentes = [
  42567209875 => [  
  'titular' => 'Lucas',
  'saldo' => 198.76
],
  46657809645 =>[
  'titular' => 'Maria',
  'saldo' => 789.99
],
  45678909712 =>[
  'titular' => 'Tatiane',
  'saldo' => 1200
]];


//adicionando uma nova conta : para arrays associativos
// para adicionar um novo array é bom sempre informar o que é relacionado aquele valor, como no caso abaixo:
// estamos adicionando uma nova correntista com o cpf como referencia

$contasCorrentes[] = [
  'titular' => 'Claudia',
  'saldo' => 789.99
];


// com o foreach eu não preciso saber os indices para que ele percorra meu array


foreach ($contasCorrentes as $contas){
  echo $contas['titular']. PHP_EOL;
}


// tambem é possivel percorer atraves dos indices[chaves]
// estou associando o $cpf como nomes das minhas chaves
foreach($contasCorrentes as $cpf =>$contas){
  echo $cpf . " " . $contas['titular'] . PHP_EOL;

}

