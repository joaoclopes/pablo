<?php
class Cachorro
{
    private $Nascimento;

    function __construct($nome)
    {
        $this->nome = $nome;
    }

    function __tostring()
    {
        return $this->nome;
    }
}


$toto = new Cachorro('Totó');
$vava = new Cachorro('Daba');
echo $toto;
echo "</br>";
echo $vava;
echo "</br>";