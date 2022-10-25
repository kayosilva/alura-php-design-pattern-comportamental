<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\AcoesAoGerarPedido\AcoesAposGerarPedido;
use Alura\DesignPattern\AcoesAoGerarPedido\CriarPedidoNoBanco;
use Alura\DesignPattern\AcoesAoGerarPedido\EnviarPedidoPorEmail;
use Alura\DesignPattern\AcoesAoGerarPedido\LogGerarPedido;

class GerarPedidoHandler
{

    /**
     * @var AcoesAposGerarPedido[]
     */
    private array $acoesAposGerarPedido = [];

    public function __construct()
    {
    }

    public function adicionarAcaoAoGerarPedido(AcoesAposGerarPedido $acao)
    {
        $this->acoesAposGerarPedido[] = $acao;
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

//        $pedidosRepository = new CriarPedidoNoBanco();
//        $logGerarPedido    = new LogGerarPedido();
//        $enviarPedidoEmail = new EnviarPedidoPorEmail();
//
//        $pedidosRepository->executaAcao($pedido);
//        $logGerarPedido->executaAcao($pedido);
//        $enviarPedidoEmail->executaAcao($pedido);

        foreach ($this->acoesAposGerarPedido as $acao) {
            $acao->executaAcao($pedido);
        }

    }

}
