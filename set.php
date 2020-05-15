<?php
include_once 'classes/Cachorro.class.php';

$toto = new Cachorro('totó');
$toto->Nascimento = '3 de março'; // errado
$toto->Nascimento = '10/04/2005'; // certo
