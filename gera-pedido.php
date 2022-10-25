<?php
require_once 'vendor/autoload.php';

$valorOrcamento = $argv[1];
$numeroDeItens  = $argv[2];
$nomeCliente    = $argv[3];

//$orcamento = new \Alura\DesignPattern\Orcamento();
//$pedido    = new \Alura\DesignPattern\Pedido();
//
//
//$orcamento->quantidadeItens = $numeroDeItens;
//$orcamento->valor           = $valorOrcamento;
//
//$pedido->dataFinalizacao = new DateTimeImmutable();
//$pedido->cliente         = $nomeCliente;
//$pedido->orcamento       = $orcamento;
//
//echo 'Cria pedido no banco de dados' . PHP_EOL;
//echo 'Envia email para cliente'.PHP_EOL;


$gerarPedido = new \Alura\DesignPattern\GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);

$handler = new \Alura\DesignPattern\GerarPedidoHandler();
$handler->attach(new \Alura\DesignPattern\AcoesAoGerarPedido\CriarPedidoNoBanco());
$handler->attach(new \Alura\DesignPattern\AcoesAoGerarPedido\EnviarPedidoPorEmail());
$handler->attach(new \Alura\DesignPattern\AcoesAoGerarPedido\LogGerarPedido());
$handler->execute($gerarPedido);
