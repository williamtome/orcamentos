<?php

namespace William\DesignPattern\Pedidos\Acoes;

use William\DesignPattern\Pedido;

interface AcaoAposGerarPedido
{
    public function execute(Pedido $pedido): void;
}
