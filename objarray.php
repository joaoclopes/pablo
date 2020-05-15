<?php
$dados_william['nome'] = 'William Scatola';
$dados_william['idade'] = 22;
$dados_william['profissao'] = 'Controle de Estoque';

$dados_daline['nome'] = 'Daline';
$dados_daline['idade'] = 21;
$dados_daline['profissao'] = 'Almoxarifado';

foreach ($dados_william as $chave => $valor)
{
    $william->$chave = $valor;
}

foreach ($dados_daline as $chave => $valor)
{
    $daline->$chave = $valor;
}

echo "{$william->nome} é {$william->profissao} </br>";
echo "{$daline->nome} é {$daline->profissao} </br>";