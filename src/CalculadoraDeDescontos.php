<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Descontos\DescontoMaisDe500Reais;
use Alura\DesignPattern\Descontos\DescotosMaisDe5Itens;
use Alura\DesignPattern\Descontos\SemDesconto;

class CalculadoraDeDescontos
{

    public function calculaDescontos(Orcamento $orcamento): float
    {

        $cadeiaDeDescontos = new DescotosMaisDe5Itens(
            new DescontoMaisDe500Reais(new SemDesconto())
        );
        $desconto          = $cadeiaDeDescontos->calculaDesconto($orcamento);

        return $desconto;

    }

}
