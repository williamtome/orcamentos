<?php

namespace William\DesignPattern\Pedidos\Acoes;

use William\DesignPattern\Pedido;

class GerarLog implements AcaoAposGerarPedido
{
    public function execute(Pedido $pedido): void
    {
        echo 'Gerar log do pedido...' . PHP_EOL;
    }
}
