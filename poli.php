<?php
include_once 'classes/Pessoa.class.php';
include_once 'classes/Conta.class.php';
include_once 'classes/ContaPoupanca.class.php';
include_once 'classes/ContaCorrente.class.php';

$carlos = new Pessoa(10, "Carlinhos", 1.55, 29, '10/04/25', "Burro", 10000000000.00);

echo "Começando com o {$carlos->Nome}: </br>";

$contas[1] = new ContaCorrente(1234, "157954", "10/07/1819", $carlos, 1679, 500.00, 200.00);
$contas[2] = new ContaPoupanca(1235, "164975", "10/07/1819", $carlos, 1679, 500.00, '10/01');

foreach ($contas as $key => $conta)
{
    echo "Startando a conta $key de: {$conta->Titular->Nome}: </br>";
    echo "O saldo da conta $key é de R\$ {$conta->ObterSaldo()} </br>";
    $conta->Depositar(500);
    echo "Agora o saldo da conta $key é de: R\$ {$conta->ObterSaldo()} </br>";
    $conta->Retirar(100);
    echo "{$conta->Titular->Nome} o saldo é de: {$conta->ObterSaldo()} </br>";
}