<?php

namespace William\DesignPattern;

use ArrayIterator;
use IteratorAggregate;
use Traversable;

class ListaDeOrcamentos implements IteratorAggregate
{
    /** @var Orcamento[] */
    private array $listaOrcamentos;

    public function __construct()
    {
        $this->listaOrcamentos = [];
    }

    public function adicionaOrcamento(Orcamento $orcamento)
    {
        $this->listaOrcamentos[] = $orcamento;
    }

    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->listaOrcamentos);
    }
}
