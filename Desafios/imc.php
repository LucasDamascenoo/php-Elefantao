<?php


$peso = 89;
$altura = 1.70;
$imc = $peso / ($altura * $altura);

if($imc <= 18.5){
  echo "seu imc é de $imc e você está abaixo do peso";
} elseif($imc >= 25 and $imc <=29.9){
  echo "seu imc é de $imc e você está com sobrepeso";
} else{
  echo "seu imc é de $imc e você está com sobrepeso nivel elevado";
}