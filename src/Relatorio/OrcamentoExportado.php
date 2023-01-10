<?php

namespace William\DesignPattern\Relatorio;

use William\DesignPattern\Orcamento;

class OrcamentoExportado implements ConteudoExportado
{
    public function __construct(
        private Orcamento $orcamento
    ) {}

    public function conteudo(): array
    {
        return [
            'valor' => $this->orcamento->getValor(),
            'quantidade_itens' => $this->orcamento->quantidadeDeItens,
        ];
    }
}
