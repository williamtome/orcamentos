<?php

namespace William\DesignPattern\Impostos;

use William\DesignPattern\Orcamento;

interface Imposto
{
    public function calculaImposto(Orcamento $orcamento): float;
}
