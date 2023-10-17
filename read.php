<?php 

require_once 'conn.php';

$res = $mysqli->query("SELECT * FROM girias");

$itens = $res->fetch_all(MYSQLI_ASSOC);

foreach ($itens as $key => $item) {
     echo $item['id']  . $item['name']  . " <br> " . $item['game_name'] . " <br> " . $item['description'] . " <br> ";
}