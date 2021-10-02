<?php
$classe = $_GET['class'];
$metodo = $_GET['acao'];

$classe .= 'Controle';

require_once 'controle/'.$classe.'.php';

$obj = new $classe();
$obj->$metodo();
?>