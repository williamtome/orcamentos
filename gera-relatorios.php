<?php

use William\DesignPattern\Orcamento;
use William\DesignPattern\Pedido;
use William\DesignPattern\Relatorio\OrcamentoExportado;
use William\DesignPattern\Relatorio\PedidoExportado;
use William\DesignPattern\Relatorio\TiposDeArquivos\ArquivoXmlExportado;
use William\DesignPattern\Relatorio\TiposDeArquivos\ArquivoZipExportado;

require 'vendor/autoload.php';

$orcamento = new Orcamento();
$orcamento->setValor(200);
$orcamento->quantidadeDeItens = 1;
$orcamento->aprova();

$pedido = new Pedido();
$pedido->nomeCliente = 'William Tomé';
$pedido->dataFinalizacao = new DateTimeImmutable();

$orcamentoExportado = new OrcamentoExportado($orcamento);
$pedidoExportado = new PedidoExportado($pedido);

// Orçamento exportado para ZIP:
$orcamentoExportadoZip = new ArquivoZipExportado('orcamento.1');
echo $orcamentoExportadoZip->salvar($orcamentoExportado);

// Orçamento exportado para XML:
$orcamentoExportadoXml = new ArquivoXmlExportado('orcamento.2');
echo $orcamentoExportadoXml->salvar($orcamentoExportado);

// Pedido exportado para ZIP:
$pedidoExportadoZip = new ArquivoZipExportado('pedido.1');
echo $pedidoExportadoZip->salvar($pedidoExportado);

// Pedido exportado para XML:
$pedidoExportadoXml = new ArquivoXmlExportado('pedido.2');
echo $pedidoExportadoXml->salvar($pedidoExportado);
