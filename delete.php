<?php 

require_once 'conn.php';

$id = isset($_GET['id'] )? $_GET['id'] : die('sem id');

$res = $mysqli->query("DELETE FROM `girias` WHERE id = $id");

if(!$res) die('deu erro');

echo "deletado com sucesso!";