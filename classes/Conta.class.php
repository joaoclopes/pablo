<?php
class Conta
{
    var $Agencia;
    var $Codigo;
    var $DataDeCriacao;
    var $Titular;
    var $senha;
    var $Saldo;
    var $Cancelada;

    function Retirar($quantia)
    {
        if ($quantia > 0)
        {
            $this->Saldo -= $quantia;
        }
    }

    function Depositar($quantia) 
    {
        if ($quantia > 0)
        {
            $this->Saldo += $quantia;
        }
    }

    function ObterSaldo()
    {
        return $this->Saldo;
    }
}
