<?php
include 'classes/Funcionario.class.php';
include 'classes/Estagiario.class.php';

$pedrinho = new Funcionario;
$pedrinho->nome = 'Pedrinho';

$mariana = new Estagiario;
$mariana->nome = 'Mariana';

echo $pedrinho->nome . "</br>";
echo $mariana->nome;