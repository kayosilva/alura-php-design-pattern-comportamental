<?php

namespace Alura\DesignPattern\EstadosOrcamento;

use Alura\DesignPattern\Orcamento;

abstract class EstadoOrcamento
{
    /**
     * @return mixed
     * @throws \DomainException
     */
    abstract public function calculaDescontoExtra(Orcamento $orcamento);

    public function aprova(Orcamento $orcamento)
    {
        throw new \DomainException('Este orçamento não pode ser aprovado');
    }

    public function reprova(Orcamento $orcamento)
    {
        throw new \DomainException('Este orçamento não pode ser reprovado');
    }

    public function finaliza(Orcamento $orcamento)
    {
        throw new \DomainException('Este orçamento não pode ser finalizado');
    }
}
