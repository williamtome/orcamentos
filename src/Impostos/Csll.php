<?php

namespace William\DesignPattern\Impostos;

use William\DesignPattern\Orcamento;

class Csll extends ImpostoCom2Aliquotas
{
    protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
    {
        return $orcamento->getValor() > 4000;
    }

    protected function calculaTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->getValor() * 0.15;
    }

    public function calculaTaxaMinima(Orcamento $orcamento): float
    {
        return $orcamento->getValor() * 0.09;
    }
}
