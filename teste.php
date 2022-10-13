<?php
require 'vendor\autoload.php';

$orcamento = new \Alura\DesignPattern\Orcamento();
$orcamento->valor = 600;

//$calculadora = new \Alura\DesignPattern\CalculadoraDeImpostos();
//$imposto = new \Alura\DesignPattern\Impostos\Icms();
//echo $calculadora->calcula($orcamento, $imposto);


$calculadoraDescontos = new \Alura\DesignPattern\CalculadoraDeDescontos();
$orcamento->quantidadeItens = 5;

echo $calculadoraDescontos->calculaDescontos($orcamento);


