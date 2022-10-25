<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;
use SplSubject;

class EnviarPedidoPorEmail implements \SplObserver
{

    public function update(SplSubject $subject)
    {
        echo 'Envia email para cliente: '. $subject->pedido->cliente . PHP_EOL;
    }
}
