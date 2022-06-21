<?php


// array associativo é quando atribuimos valores dentro de um array (chave => valor)

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];

function exibeMensagem($mensagem){

  echo $mensagem . PHP_EOL;

}


function sacar ($conta , $valorSacar){

  if($valorSacar > $conta['saldo']) {
    exibeMensagem( "você não pode sacar esse valor");
  } else {

    $conta['saldo'] -= $valorSacar;

  }

  return $conta;
}


$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'],500);
$contasCorrentes['123.456.689-11'] = sacar($contasCorrentes['123.456.689-11'],500);



// tambem é possivel percorer atraves dos indices[chaves]
// estou associando o $cpf como nomes das minhas chaves
foreach($contasCorrentes as $cpf =>$contas){
  exibeMensagem($cpf . " " . $contas['titular'] . " " . $contas['saldo']);

}



