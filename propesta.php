<?php
class Aplicacao
{
    static $Quantidade;

    function __construct($Nome)
    {
        self::$Quantidade ++;
        $i = self::$Quantidade;
        echo "Nova Aplicação nr. $i: $Nome </br>";
    }
}

new Aplicacao('Dia');
new Aplicacao('Gimp');
new Aplicacao('Gnumeric');
new Aplicacao('Abiword');
new Aplicacao('Evolution');

echo 'Quantidade de aplicações = ' . Aplicacao::$Quantidade . "</br>";