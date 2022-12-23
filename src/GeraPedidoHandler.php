<?php

namespace William\DesignPattern;

use DateTimeImmutable;

class GeraPedidoHandler
{
    public function __construct(/* PedidoRepository, MailService */)
    {
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

        /* PedidoRepository */
        echo 'Gerar pedido no banco de dados ' . PHP_EOL;
        /* MailService */
        echo 'Enviar e-mail para o cliente ' . PHP_EOL;
    }
}
