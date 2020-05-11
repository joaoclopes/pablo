<?php
include_once 'classes/Pessoa.class.php';
include_once 'classes/Conta.class.php';

$carlos = new Pessoa;
$carlos->Codigo = 10;
$carlos->Nome = "Carlinho";
$carlos->Altura = 1.55;
$carlos->Idade = 29;
$carlos->Nascimento = '10/04/25';
$carlos->Escolaridade = "Burro";

echo "Esse é o {$carlos->Nome} :</br>";

echo "{$carlos->Nome} é {$carlos->Escolaridade} </br>";
$carlos->Formar('Escola da Rua');
echo "{$carlos->Nome} agora é formado na {$carlos->Escolaridade} </br>";

echo "{$carlos->Nome} tem {$carlos->Idade} anos </br>";
$carlos->Envelhecer(7);
echo "{$carlos->Nome} agora ta muito veio, {$carlos->Idade} anos </br>";

$conta_carlos = new Conta;
$conta_carlos->Agencia = 1234;
$conta_carlos->Codigo = "157954";
$conta_carlos->DataDeCriacao = "10/07/1819";
$conta_carlos->Titular = $carlos;
$conta_carlos->Senha = 1679;
$conta_carlos->Saldo = "1.157.254.356.29";
$conta_carlos->Cancelada = false;

echo "</br>";
echo "Essa é a conta do: {$conta_carlos->Titular->Nome} </br>";

if($conta_carlos->ObterSaldo() > "1.000.000.000.00")
{
    echo "Eta, {$conta_carlos->Titular->Nome} é rico </br>";
} else {
    echo "Pobre";
}

echo "O saldo é R\$ {$conta_carlos->ObterSaldo()} </br>";

$conta_carlos->Depositar("1.007.249.25");
echo "O saldo agora é de R\$ {$conta_carlos->ObterSaldo()} </br>";

$conta_carlos->Retirar("5.000.000.00");
echo "{$conta_carlos->Titular->Nome} comprou uma lambo, e agora tem {$conta_carlos->ObterSaldo()} de saldo";