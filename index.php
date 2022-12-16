<?php

use William\DesignPattern\CalculadoraDeImpostos;
use William\DesignPattern\CalculadoraDeDescontos;
use William\DesignPattern\Impostos\Icms;
use William\DesignPattern\Orcamento;

require_once 'vendor/autoload.php';

/*
$calculadora = new CalculadoraDeImpostos();
$orcamento = new Orcamento();

$orcamento->setValor(100);
echo $calculadora->calcula($orcamento, new Icms()) . PHP_EOL;
*/

$calculadoraDeDescontos = new CalculadoraDeDescontos();
$orcamento = new Orcamento();
$orcamento->setValor(0);
$orcamento->quantidadeDeItens = 0;

echo $calculadoraDeDescontos->calculaDesconto($orcamento);
