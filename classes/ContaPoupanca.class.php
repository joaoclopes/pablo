<?php
class ContaPoupanca extends Conta
{
    var $Aniversario;

    function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Aniversario)
    {
        parent::__construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Senha, $Saldo);
        $this->Aniversario = $Aniversario;
    }

    function Retirar($quantia)
    {
        if ($this->Saldo >= $quantia)
        {
            parent::Retirar($quantia);
        }
        else
        {
            echo "Você não possui saldo </br>";
        }

        return true;
    }

    function Transferir($Conta, $Valor)
    {
        if ($this->Retirar($Valor))
        {
            $Conta->Depositar($Valor);
        }
    }
}