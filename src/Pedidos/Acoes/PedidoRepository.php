<?php

namespace William\DesignPattern\Pedidos\Acoes;

use William\DesignPattern\Pedido;

class PedidoRepository implements AcaoAposGerarPedido
{
    public function execute(Pedido $pedido): void
    {
        echo 'Criar pedido no banco de dados...' . PHP_EOL;
    }
}
