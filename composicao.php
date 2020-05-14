<?php
include_once 'classes/Fornecedor.class.php';
include_once 'classes/Contato.class.php';

$fornecedor = new Fornecedor;
$fornecedor->RazaoSocial = 'Produtos Bom Gosto S.A.';

$fornecedor->SetContato('Mauro', '41 98547-2548', 'maurinho@bomgosto.com.br');

echo $fornecedor->RazaoSocial . "</br> \n";
echo "Informações de Contato </br>";
echo $fornecedor->GetContato();