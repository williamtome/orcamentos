<?php

namespace William\DesignPattern;

use William\DesignPattern\Descontos\DescontoParaMaisDe1000Reais;
use William\DesignPattern\Descontos\DescontoParaMaisDe500Reais;
use William\DesignPattern\Descontos\DescontoParaMaisDe5Itens;
use William\DesignPattern\Descontos\SemDesconto;
use William\DesignPattern\Orcamento;

class CalculadoraDeDescontos
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        // Chain of Responsability
        $cadeiaDeDescontos = new DescontoParaMaisDe5Itens(
            new DescontoParaMaisDe500Reais(
                new SemDesconto()
            )
        );

        return $cadeiaDeDescontos->calculaDesconto($orcamento);
    }
}
