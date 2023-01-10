<?php

namespace William\DesignPattern\Relatorio;

use William\DesignPattern\Pedido;

class PedidoExportado implements ConteudoExportado
{
    public function __construct(
        private Pedido $pedido
    ) {}

    public function conteudo(): array
    {
        return [
            'data_finalizacao' => $this->pedido->dataFinalizacao->format('d/m/Y H:i:s'),
        ];
    }
}
