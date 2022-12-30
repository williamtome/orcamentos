<?php

require_once 'vendor/autoload.php';

use William\DesignPattern\ListaDeOrcamentos;
use William\DesignPattern\Orcamento;

$orcamento1 = new Orcamento();
$orcamento1->setValor(1230);
$orcamento1->quantidadeDeItens = 7;
$orcamento1->aprova();

$orcamento2 = new Orcamento();
$orcamento2->setValor(250);
$orcamento2->quantidadeDeItens = 2;
$orcamento2->reprova();

$orcamento3 = new Orcamento();
$orcamento3->setValor(2540);
$orcamento3->quantidadeDeItens = 5;
$orcamento3->aprova();
$orcamento3->finaliza();

$listaOrcamentos = new ListaDeOrcamentos();
$listaOrcamentos->adicionaOrcamento($orcamento1);
$listaOrcamentos->adicionaOrcamento($orcamento2);
$listaOrcamentos->adicionaOrcamento($orcamento3);

foreach ($listaOrcamentos as $orcamento) {
    echo 'Valor: R$ ' . $orcamento->getValor() . PHP_EOL;
    echo 'Estado: ' . get_class($orcamento->estadoAtual) . PHP_EOL;
    echo 'Itens: ' . $orcamento->quantidadeDeItens . PHP_EOL;

    echo PHP_EOL;
}
