<?php

namespace William\DesignPattern\Relatorio\TiposDeArquivos;

use William\DesignPattern\Relatorio\ArquivoExportado;
use William\DesignPattern\Relatorio\ConteudoExportado;

class ArquivoXmlExportado implements ArquivoExportado
{
    public function __construct(
        private string $nomeElementoPai
    ) {}

    public function salvar(ConteudoExportado $conteudoExportado): string
    {
        $elementoXml = new \SimpleXMLElement("<{$this->nomeElementoPai}/>");

        foreach ($conteudoExportado->conteudo() as $item => $valor) {
            $elementoXml->addChild($item, $valor);
        }

        $caminhoArquivo = tempnam(sys_get_temp_dir(), 'xml');
        $elementoXml->asXML($caminhoArquivo);

        return $caminhoArquivo . PHP_EOL;
    }
}
