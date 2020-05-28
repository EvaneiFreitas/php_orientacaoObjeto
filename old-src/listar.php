<?php

declare(strict_types = 1);

$pdo = require 'conexao.php';
$sql = 'select * from produtos';

echo '<h3> PRODUTOS </h3>';

foreach ($pdo->query($sql) as $key => $value) {
	# code...
	echo 'Id:' . $value['id'] . '<br> Descrição: ' . $value['descricao'] .'<hr>';
}