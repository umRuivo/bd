<?php 
require_once 'conn.php';



$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$isbn = $_POST['isbn'];

# Executa a query desejada 
$query = " INSERT INTO livro(`titulo`, `autor`, `isbn`) VALUES('$titulo', '$autor','$isbn')";
$result_query = mysql_query( $query ) or die(' Erro na query:' . $query . ' ' . mysql_error() );

echo "Cadastrado com sucesso!";

// # Exibe os registros na tela 
// while ($row = mysql_fetch_array( $result_query )) 
// { 
//       echo $row['id']  . " <br> " . $row['nome'] . " <br> " . $row['sobrenome'] . " <br> " . $row['sexo'] . " <br> " . $row['fucao'] . " <br> " . $row['foto'] . " <br> " . $row['ativo'] . " -- " . $row['senha']; 
// }

?>