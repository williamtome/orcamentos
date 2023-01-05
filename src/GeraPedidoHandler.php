<?php

namespace William\DesignPattern;

use DateTimeImmutable;
use William\DesignPattern\Pedidos\Acoes\AcaoAposGerarPedido;

class GeraPedidoHandler
{
    /** @var AcaoAposGerarPedido[] */
    private array $acoesAposGerarPedido = [];

    public function adicionarAcoesParaGerarPedido(AcaoAposGerarPedido $acao)
    {
        $this->acoesAposGerarPedido[] = $acao;
    }

    public function execute(GeraPedido $geraPedido): void
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeDeItens = $geraPedido->getQuantidadeItens();
        $orcamento->setValor($geraPedido->getValorOrcamento());

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new DateTimeImmutable();
        $pedido->nomeCliente = $geraPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;

        foreach ($this->acoesAposGerarPedido as $acao) {
            $acao->execute($pedido);
        }
    }
}
