<?php

use William\DesignPattern\CalculadoraDeImpostos;
use William\DesignPattern\CalculadoraDeDescontos;
use William\DesignPattern\Impostos\Cofins;
use William\DesignPattern\Impostos\Csll;
use William\DesignPattern\Impostos\Icms;
use William\DesignPattern\Orcamento;

require 'vendor/autoload.php';

$calculadora = new CalculadoraDeImpostos();
$orcamento = new Orcamento();

$orcamento->setValor(2000);
$orcamento->quantidadeDeItens = 4;

echo $calculadora->calcula($orcamento, new Csll()) . PHP_EOL;

/*
$calculadoraDeDescontos = new CalculadoraDeDescontos();
$orcamento = new Orcamento();
$orcamento->setValor(0);
$orcamento->quantidadeDeItens = 0;

echo $calculadoraDeDescontos->calculaDesconto($orcamento);
*/
