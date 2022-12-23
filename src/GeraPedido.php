<?php

namespace William\DesignPattern;

class GeraPedido
{
    public function __construct(
        private string $nomeCliente,
        private int $quantidadeItens,
        private float $valorOrcamento
    ) {
    }

    public function getNomeCliente(): string
    {
        return $this->nomeCliente;
    }

    public function getQuantidadeItens(): int
    {
        return $this->quantidadeItens;
    }

    public function getValorOrcamento(): float
    {
        return $this->valorOrcamento;
    }
}
