<?php
class Aplicacao
{
    static function Sobre()
    {
        $fd = fopen('readme.txt', 'r');
        while ($linha = fgets($fd, 200))
        {
            echo $linha;
        }
    }
}

echo "Infos sobre a aplicação: </br>";

echo "=============================: </br>";

Aplicacao::Sobre();