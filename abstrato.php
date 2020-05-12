<?php
include_once 'classes/Pessoa.class.php';
include_once 'classes/Conta.class.php';
include_once 'classes/ContaPoupanca.class.php';

$carlos = new Pessoa(10, "Carlinhos", 1.55, 25 , 72, "Burro", 650.00);
$conta = new ContaPoupanca(6677, "CC.1234.56", "10/07/02", $carlos, 9876, 500.00, '10/07');