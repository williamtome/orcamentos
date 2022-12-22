<?php

namespace William\DesignPattern\Orcamento\Estados;

use DomainException;
use William\DesignPattern\Orcamento;

class Finalizado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw new DomainException('Um orçamento finalizado não pode receber desconto.');
    }
}
