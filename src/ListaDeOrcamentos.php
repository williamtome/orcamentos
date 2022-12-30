<?php

namespace William\DesignPattern;

use ArrayIterator;
use IteratorAggregate;
use William\DesignPattern\Orcamento\Estados\Finalizado;

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

    public function orcamentosFinalizados(): array
    {
        return array_filter(
            $this->listaOrcamentos,
        fn($orcamento) => $orcamento->estadoAtual instanceof Finalizado
        );
    }

    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->listaOrcamentos);
    }
}
