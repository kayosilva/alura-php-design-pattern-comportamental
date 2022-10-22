<?php

namespace Alura\DesignPattern;

class GerarPedidoHandler
{
    public function __construct()
    {
    }

    public function execute(GerarPedido $gerarPedido)
    {
        $orcamento                  = new Orcamento();
        $pedido                     = new Pedido();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroItens();
        $orcamento->valor           = $gerarPedido->getValorOrcamento();

        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->cliente         = $gerarPedido->getNomeCliente();
        $pedido->orcamento       = $orcamento;

        echo 'Cria pedido no banco de dados' . PHP_EOL;
        echo 'Envia email para cliente' . PHP_EOL;
        echo 'Gerar log' . PHP_EOL;
    }

}
