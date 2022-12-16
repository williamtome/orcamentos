<?php

namespace William\DesignPattern\Impostos;

use William\DesignPattern\Orcamento;

class Csll extends ImpostoCom2Aliquotas
{
    protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
    {
        return $orcamento->valor > 4000;
    }

    protected function calculaTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.15;
    }

    public function calculaTaxaMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.09;
    }
}
