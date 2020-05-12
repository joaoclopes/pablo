<?php
include_once 'classes/Conta.class.php';
include_once 'classes/ContaPoupanca.class.php';

class ContaCorrenteEspecial extends ContaCorrente
{
    function Depositar($Valor)
    {
        echo "SObrescrevendo método de deposito. </br>";
        parent::Depositar($Valor);
    }

    function Transferir($Conta, $Valor)
    {
        echo "Sobrescrevendo método de transferencia. </br>";
        parent::Transferir($Conta,$Valor);
    }
}