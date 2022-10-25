<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;

class LogGerarPedido implements AcoesAposGerarPedido
{
    public function executaAcao(Pedido $pedido)
    {
        echo 'Gerar log' . PHP_EOL;
    }

}
