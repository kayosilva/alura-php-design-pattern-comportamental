<?php

namespace Alura\DesignPattern;

class ListaOrcamentos implements \IteratorAggregate
{

    private $orcamentos = [];

    public function addOrcamento(Orcamento $orcamento)
    {
        $this->orcamentos[] = $orcamento;
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->orcamentos);
    }
}
