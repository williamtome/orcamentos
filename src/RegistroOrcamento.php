<?php

namespace William\DesignPattern;

use DomainException;
use William\DesignPattern\Http\HttpAdapter;
use William\DesignPattern\Orcamento\Estados\Finalizado;

class RegistroOrcamento
{
    public function __construct(
        private HttpAdapter $httpAdapter
    ) {}

    /**
     * @throws DomainException
     */
    public function registrar(Orcamento $orcamento): void
    {
        if (!$orcamento->estadoAtual instanceof Finalizado) {
            throw new DomainException("Apenas orçamentos finalizados podem ser registrados na API.");
        }

        $this->httpAdapter->post('http://api.registro.orcamento', [
            'valor' => $orcamento->getValor(),
            'quantidadeItens' => $orcamento->quantidadeDeItens,
        ]);
    }
}
