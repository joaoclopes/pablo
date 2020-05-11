<?php
include_once 'classes/Produto.class.php';

$produto1 = new Produto;
$produto2 = new Produto;

$produto1->Codigo = 4001;
$produto1->Descricao = 'CD - sei la';

$produto2->Codigo = 4002;
$produto2->Descricao = 'CD - sei la 2';

$produto1->ImprimeEtiqueta();
$produto2->ImprimeEtiqueta();

var_dump($produto);