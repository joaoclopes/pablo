<?php
include_once 'classes/Cesta.class.php';
include_once 'classes/Produto.class.php';

$produto1 = new Produto;
$produto2 = new Produto;
$produto3 = new Produto;
$produto4 = new Produto;

$produto1->Codigo = 1;
$produto1->Descricao = 'Ameixa';
$produto1->Preco = 1.40;

$produto1->Codigo = 2;
$produto1->Descricao = 'Morango';
$produto1->Preco = 2.24;

$produto1->Codigo = 3;
$produto1->Descricao = 'Abacaxi';
$produto1->Preco = 2.86;

$produto1->Codigo = 4;
$produto1->Descricao = 'Laranja';
$produto1->Preco = 1.14;

$cesta = new Cesta;
$cesta->AdicionaItem($produto1);
$cesta->AdicionaItem($produto2);
$cesta->AdicionaItem($produto3);
$cesta->AdicionaItem($produto4);

echo $cesta->CalculaTotal();
echo "</br>";
echo $cesta->ExibeLista();