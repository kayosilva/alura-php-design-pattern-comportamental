<?php
require 'vendor\autoload.php';

$orcamento = new \Alura\DesignPattern\Orcamento();
$orcamento->valor = 600;
$orcamento->quantidadeItens = 5;

$calculadoraDescontos = new \Alura\DesignPattern\CalculadoraDeDescontos();

echo $calculadoraDescontos->calculaDescontos($orcamento);


