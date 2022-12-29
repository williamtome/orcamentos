<?php

namespace William\DesignPattern\Pedidos\Acoes;

use William\DesignPattern\Pedido;

class EnviarEmail implements AcaoAposGerarPedido
{
    public function execute(Pedido $pedido): void
    {
        echo 'Enviar e-mail para o cliente ' . $pedido->pedido->nomeCliente . PHP_EOL;
    }
}
