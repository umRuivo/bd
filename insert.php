<?php 

require_once 'conn.php';

$name = isset($_POST['name'])? $_GET['name'] : 'nome test'; //die('sem name');
$game_name = isset($_POST['game_name'])? $_GET['gamename'] : 'game_name test';//die('sem gamename');
$description = isset($_POST['description'])? $_GET['description'] : 'description test';//die('sem description');

$res = $mysqli->query("INSERT INTO girias(`name`, `game_name`, `description`) VALUES('$name', '$game_name','$description')");

if(!$res) die('deu erro');

echo "Cadastrado com sucesso!";