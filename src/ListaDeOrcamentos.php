<?php

namespace William\DesignPattern;

class ListaDeOrcamentos
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
}
