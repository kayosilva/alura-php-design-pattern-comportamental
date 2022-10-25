<?php

require_once 'vendor/autoload.php';

$listaOrcamento = new \Alura\DesignPattern\ListaOrcamentos();

$orcamento1                  = new \Alura\DesignPattern\Orcamento();
$orcamento1->quantidadeItens = 3;
$orcamento1->valor           = 3232;
$orcamento1->aprova();
$listaOrcamento->addOrcamento($orcamento1);

$orcamento2                  = new \Alura\DesignPattern\Orcamento();
$orcamento2->quantidadeItens = 4;
$orcamento2->valor           = 122;
$orcamento2->aprova();
$orcamento2->finaliza();
$listaOrcamento->addOrcamento($orcamento2);

$orcamento3                  = new \Alura\DesignPattern\Orcamento();
$orcamento3->quantidadeItens = 1;
$orcamento3->valor           = 132;
$orcamento3->reprova();
$listaOrcamento->addOrcamento($orcamento3);

foreach ($listaOrcamento as $orcamento) {
    echo 'Valor: ' . $orcamento->valor . PHP_EOL;
    echo 'Qtd Itens: ' . $orcamento->quantidadeItens . PHP_EOL;
    echo 'Status: ' . get_class($orcamento->estadoAtual) . PHP_EOL;
    echo '-----------' . PHP_EOL;
}
