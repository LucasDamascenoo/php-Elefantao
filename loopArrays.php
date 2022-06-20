<?php


$list = [12,14,15,17,18,120];

// para percorrer um loop num array precisamos saber o tamanho da nossa arrray
//enquanto o nosso $i for menor que a nossa array vai trazer o dado da array

for ($i = 0 ; $i < count($list) ; $i++){
            //passando o incrimental como indice            
  echo $list[$i] . PHP_EOL;
}