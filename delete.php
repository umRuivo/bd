<?php 

require_once 'conn.php';

$id = $_GET['id'];


# Executa a query desejada 
$query = "DELETE FROM `livro` WHERE id = $id";
$result_query = mysql_query( $query ) or die(' Erro na query:' . $query . ' ' . mysql_error() );

echo "deletado com sucesso!";

// # Exibe os registros na tela
// while ($row = mysql_fetch_array( $result_query ))
// { 
//       echo $row['id']  . " <br> " . $row['nome'] . " <br> " . $row['sobrenome'] . " <br> " . $row['sexo'] . " <br> " . $row['fucao'] . " <br> " . $row['foto'] . " <br> " . $row['ativo'] . " -- " . $row['senha']; 
// }

?>