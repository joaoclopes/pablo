<?php
function Abrir($file = null)
{
    if (!$file)
    {
        throw new Exception('Falta o parâmetro com o nome do arquivo');
    }
    if (!file_exists($file))
    {
        throw new Exception('Arquivo não existente');
    }
    if (!$retorno = @file_get_contents($file))
    {
        throw new Exception('Impossível ler o arquivo');
    }
    return $retorno;
}

try
{
    $arquivo = Abrir('/tmp/arquivo.dat');
    echo $arquivo;
}
catch (Exception $excecao)
{
    echo $excecao->getFile() . ' : ' . $excecao->getLine() . ' # ' . $excecao->getMessage();
}