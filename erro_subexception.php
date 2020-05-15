<?php
function Abrir($file = null)
{
    if (!$file)
    {
        throw new ParameterException('Falta o parâmetro com o nome do arquivo');
    }
    if (!file_exists($file))
    {
        throw new FileNotFoundException('Arquivo não existente');
    }
    if (!$retorno = @file_get_contents($file))
    {
        throw new FilePermissionException('Impossível ler o arquivo');
    }
    return $retorno;
}

class ParameterException extends Exception{}
class FileNotFoundException extends Exception{}
class FilePermissionException extends Exception{}

try
{
    $arquivo = Abrir('/tmp/arquivo.dat');
    echo $arquivo;
}
catch (ParameterException $excecao)
{

}
catch (FileNotFoundException $excecao)
{
    var_dump($excecao->getTrace());
    echo "finalizando a aplicação </br>";
    die;
}
catch (FileNotFoundException $excecao)
{
    echo $excecao->getFile() . ' : ' . $excecao->getLine() . ' # ' . $excecao->getMessage();
}