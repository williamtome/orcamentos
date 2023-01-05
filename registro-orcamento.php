<?php

use William\DesignPattern\Http\CurlHttpAdapter;
use William\DesignPattern\Orcamento;
use William\DesignPattern\RegistroOrcamento;

require_once 'vendor/autoload.php';

$orcamento = new Orcamento();
$orcamento->setValor(1230);
$orcamento->quantidadeDeItens = 7;
$orcamento->aprova();
$orcamento->finaliza();

$registroOrcamento = new RegistroOrcamento(new CurlHttpAdapter());
$registroOrcamento->registrar($orcamento);
