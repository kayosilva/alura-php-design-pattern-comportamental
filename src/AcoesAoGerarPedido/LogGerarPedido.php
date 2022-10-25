<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;
use SplSubject;

class LogGerarPedido implements \SplObserver
{

    public function update(SplSubject $subject)
    {
        echo 'Gerar log' . PHP_EOL;
    }
}
