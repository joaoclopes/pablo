<?php
include_once 'classes/Pessoa.class.php';
include_once 'classes/Conta.class.php';

$carlos = new Pessoa(10, "Carlinhos", 1.55, 29, '10/04/25', "Burro", 10000000000.00);

echo "Agora é o(a) {$carlos->Nome}: </br>";
echo "{$carlos->Nome} é: {$carlos->Escolaridade} </br>";
$carlos->Formar('Escola da Rua');
echo "{$carlos->Nome} agora é formado na {$carlos->Escolaridade} </br>";

echo "{$carlos->Nome} tem {$carlos->Idade} anos </br>";
$carlos->Envelhecer(7);
echo "{$carlos->Nome} ta veio, {$carlos->Idade} anos </br>";

$conta_carlos = new Conta(1234, "157954", "10/07/1819", $carlos, 1679, 1157254356.29);

echo "</br>";
echo "Mexendo na conta do {$conta_carlos->Titular->Nome} </br>";

if($conta_carlos->ObterSaldo() > 1000000000.00)
{
    echo "Eta, {$conta_carlos->Titular->Nome} é rico </br>";
} else {
    echo "Pobre </br>";
}

echo "O saldo é R\$ {$conta_carlos->ObterSaldo()} </br>";

$conta_carlos->Depositar(1007249.25);
echo "O saldo agora é de R\$ {$conta_carlos->ObterSaldo()} </br>";

$conta_carlos->Retirar(5000000.00);
echo "{$conta_carlos->Titular->Nome} comprou uma lambo, e agora tem {$conta_carlos->ObterSaldo()} de saldo </br>";