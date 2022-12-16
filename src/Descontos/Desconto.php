<?php

namespace William\DesignPattern\Descontos;

use William\DesignPattern\Orcamento;

abstract class Desconto
{
    protected ?Desconto $proximoDesconto;

    public function __construct(?Desconto $proximoDesconto)
    {
        $this->proximoDesconto = $proximoDesconto;
    }

    abstract function calculaDesconto(Orcamento $orcamento): float;
}
