<?php 

require_once 'conn.php';

# Executa a query desejada 
$query = "SELECT * FROM livro"; 
$result_query = mysql_query( $query ) or die(' Erro na query:' . $query . ' ' . mysql_error() );



# Exibe os registros na tela 
while ($row = mysql_fetch_array( $result_query )) 
{ 
      echo $row['titulo']  . " <br> " . $row['autor'] . " <br> " . $row['isbn'] . " <br> "; 
}

?>

