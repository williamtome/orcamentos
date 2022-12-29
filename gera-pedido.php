<?php

require_once 'vendor/autoload.php';

use William\DesignPattern\GeraPedido;
use William\DesignPattern\GeraPedidoHandler;
use William\DesignPattern\Pedidos\Acoes\EnviarEmail;
use William\DesignPattern\Pedidos\Acoes\GerarLog;
use William\DesignPattern\Pedidos\Acoes\PedidoRepository;

$valorOrcamento = $argv[1];
$quantidadeItens = $argv[2];
$nomeCliente = $argv[3];

$geraPedido = new GeraPedido(
    $nomeCliente,
    $quantidadeItens,
    $valorOrcamento
);

$geraPedidoHandler = new GeraPedidoHandler();
$geraPedidoHandler->adicionarAcoesParaGerarPedido(new PedidoRepository());
$geraPedidoHandler->adicionarAcoesParaGerarPedido(new GerarLog());
$geraPedidoHandler->adicionarAcoesParaGerarPedido(new EnviarEmail());
$geraPedidoHandler->execute($geraPedido);
