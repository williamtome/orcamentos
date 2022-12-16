<?php

namespace William\DesignPattern\Descontos;

use William\DesignPattern\Orcamento;

class DescontoParaMaisDe1000Reais extends Desconto
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->valor > 1000) {
            return $orcamento->valor * 0.2;
        }

        return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}
