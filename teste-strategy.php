<?php
require 'vendor\autoload.php';

$orcamento        = new \Alura\DesignPattern\Orcamento();
$orcamento->valor = 600;

$calculadora = new \Alura\DesignPattern\CalculadoraDeImpostos();
$imposto     = new \Alura\DesignPattern\Impostos\Icms();
echo $calculadora->calcula($orcamento, $imposto);



