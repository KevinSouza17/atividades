<?php

  $nome = $_GET['nome'] ;

  echo "bem vindo, $nome";

$notas1 = $_GET ['n1'];
$notas2 = $_GET ['n2'];
$notas3 = $_GET ['n3'];

$media = $notas1 + $notas2 + $notas3 /3;

echo "sua média é , $media";



?>