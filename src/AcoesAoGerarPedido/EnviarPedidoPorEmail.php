<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;

class EnviarPedidoPorEmail implements AcoesAposGerarPedido
{
    public function executaAcao(Pedido $pedido)
    {
        echo 'Envia email para cliente' . PHP_EOL;
    }

}
