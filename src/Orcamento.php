<?php

namespace William\DesignPattern;

use William\DesignPattern\Orcamento\Estados\EstadoOrcamento;
use William\DesignPattern\Orcamento\Estados\EmAprovacao;

class Orcamento
{
    public int $quantidadeDeItens;
    public float $valor;
    public EstadoOrcamento $estadoAtual;

    public function __construct()
    {
        $this->estadoAtual = new EmAprovacao();
    }

    public function setValor(float $valor): void
    {
        $this->valor = $valor;
    }

    public function aplicarDescontoExtra(): void
    {
        $this->valor -= $this->estadoAtual->calculaDescontoExtra($this);
    }

    public function aprova()
    {
        $this->estadoAtual->aprova($this);
    }

    public function reprova()
    {
        $this->estadoAtual->reprova($this);
    }

    public function finaliza()
    {
        $this->estadoAtual->finaliza($this);
    }
}
