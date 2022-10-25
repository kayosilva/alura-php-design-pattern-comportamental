<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\AcoesAoGerarPedido\AcoesAposGerarPedido;
use Alura\DesignPattern\AcoesAoGerarPedido\CriarPedidoNoBanco;
use Alura\DesignPattern\AcoesAoGerarPedido\EnviarPedidoPorEmail;
use Alura\DesignPattern\AcoesAoGerarPedido\LogGerarPedido;
use SplObserver;

class GerarPedidoHandler implements \SplSubject
{

    /**
     * @var SplObserver[]
     */
    private array $acoesAposGerarPedido = [];

    public Pedido $pedido;

    public function __construct()
    {
    }

//    public function adicionarAcaoAoGerarPedido(AcoesAposGerarPedido $acao)
//    {
//        $this->acoesAposGerarPedido[] = $acao;
//    }

    public function execute(GerarPedido $gerarPedido)
    {
        $orcamento                  = new Orcamento();
        $this->pedido               = new Pedido();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroItens();
        $orcamento->valor           = $gerarPedido->getValorOrcamento();

        $this->pedido->dataFinalizacao = new \DateTimeImmutable();
        $this->pedido->cliente         = $gerarPedido->getNomeCliente();
        $this->pedido->orcamento       = $orcamento;

        $this->notify();

//        $pedidosRepository = new CriarPedidoNoBanco();
//        $logGerarPedido    = new LogGerarPedido();
//        $enviarPedidoEmail = new EnviarPedidoPorEmail();
//
//        $pedidosRepository->executaAcao($pedido);
//        $logGerarPedido->executaAcao($pedido);
//        $enviarPedidoEmail->executaAcao($pedido);

//        foreach ($this->acoesAposGerarPedido as $acao) {
//            $acao->executaAcao($pedido);
//        }

    }

    public function attach(SplObserver $observer)
    {
        $this->acoesAposGerarPedido[] = $observer;
    }

    public function detach(SplObserver $observer)
    {
        // TODO: Implement detach() method.
    }

    public function notify()
    {
        foreach ($this->acoesAposGerarPedido as $acao) {
            $acao->update($this);
        }
    }
}
