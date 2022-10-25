<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;

class CriarPedidoNoBanco implements AcoesAposGerarPedido
{

    public function executaAcao(Pedido $pedido)
    {
        echo 'Cria pedido no banco de dados' . PHP_EOL;
    }
}
