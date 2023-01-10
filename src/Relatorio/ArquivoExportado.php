<?php

namespace William\DesignPattern\Relatorio;

use William\DesignPattern\Relatorio\ConteudoExportado;

interface ArquivoExportado
{
    public function salvar(ConteudoExportado $conteudoExportado): string;
}
