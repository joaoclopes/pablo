<?php
class Pessoa
{
    var $Codigo;
    var $Nome;
    var $Altura;
    var $Idade;
    var $Nascimento;
    var $Escolaridade;
    var $Salario;

    function Crescer($centimetros)
    {
        if ($centimetros > 0)
        {
            $this->Altura +=$centrimetros;
        }
    }

    function Formar($titulacao)
    {
        $this->Escolaridade = $titulacao;
    }

    function Envelhecer($anos)
    {
        if ($anos > 0)
        {
            $this->Idade += $anos;
        }
    }

    function __construct($Codigo, $Nome, $Altura, $Idade, $Nascimento, $Escolaridade, $Salario)
    {
        $this->Codigo = $Codigo;
        $this->Nome = $Nome;
        $this->Altura = $Altura;
        $this->Idade = $Idade;
        $this->Nascimento = $Nascimento;
        $this->Escolaridade = $Escolaridade;
        $this->Salario = $Salario;
    }

    function __destruct()
    {
        echo "Finalizando {$this->Nome}... </br>";
    }
}