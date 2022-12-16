<?php

namespace William\DesignPattern;

class Orcamento
{
    public int $quantidadeDeItens;
    public float $valor;

    public function setValor(float $valor)
    {
        $this->valor = $valor;
    }
}
