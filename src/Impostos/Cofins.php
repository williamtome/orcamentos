<?php

namespace William\DesignPattern\Impostos;

use William\DesignPattern\Orcamento;

class Cofins extends ImpostoCom2Aliquotas
{
    protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
    {
        return $orcamento->valor > 500 && $orcamento->quantidadeDeItens > 4;
    }

    protected function calculaTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.076;
    }

    public function calculaTaxaMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.03;
    }
}
