<?php

require_once 'vendor/autoload.php';

use William\DesignPattern\GeraPedido;
use William\DesignPattern\GeraPedidoHandler;

$valorOrcamento = $argv[1];
$quantidadeItens = $argv[2];
$nomeCliente = $argv[3];

$geraPedido = new GeraPedido(
    $nomeCliente,
    $quantidadeItens,
    $valorOrcamento
);
$geraPedidoHandler = new GeraPedidoHandler();
$geraPedidoHandler->execute($geraPedido);
