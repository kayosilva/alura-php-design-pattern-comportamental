<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Orcamento;

class DescotosMaisDe5Itens extends Desconto
{

    public function calculaDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->quantidadeItens > 5) {
            return $orcamento->valor * .1;
        }

        return $this->proximoDesconto->calculaDesconto($orcamento);
    }

}
