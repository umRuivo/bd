<?php 

require_once 'conn.php';


$titulo = (isset($_POST['titulo'])) ? $_POST['titulo'] : '';
$autor = (isset($_POST['autor'])) ? $_POST['autor'] : '';
$isbn = (isset($_POST['isbn'])) ? $_POST['isbn'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '2';

# Executa a query desejada 

if(isset($_POST['titulo'])){
    $query = " UPDATE livro SET titulo = '$titulo', autor = '$autor', isbn = '$isbn' WHERE id = $id";
    $result_query = mysql_query( $query ) or die(' Erro na query:' . $query . ' ' . mysql_error() );
    header ("Location: read.php");
} else {



// # Exibe os registros na tela 
// while ($row = mysql_fetch_array( $result_query ))
// { 
//       echo $row['id']  . " <br> " . $row['nome'] . " <br> " . $row['sobrenome'] . " <br> " . $row['sexo'] . " <br> " . $row['fucao'] . " <br> " . $row['foto'] . " <br> " . $row['ativo'] . " -- " . $row['senha']; 
// }

//var query recieve from sql query read a row from database by id
$query = "SELECT * FROM livro WHERE id = $id"; 
$result_query = mysql_query( $query ) or die(' Erro na query:' . $query . ' ' . mysql_error() );

?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Lendo os livros</title>
</head>
<body>
      <div>
            <form action="update.php" method="post">
                  <?php 
                  while ($row = mysql_fetch_array( $result_query )) 
                  { 
                   ?>
                  <label for="titulo">Titulo:</label>
                  <input type="text" name="titulo" id="titulo" value="<?php echo $row['titulo'] ?>"><br>
                  <br>
                  <label for="autor">Autor:</label>
                  <input type="text" name="autor" id="autor" value="<?php echo $row['autor'] ?>"><br>
                  <br>
                  <label for="isbn">ISBN:</label>
                  <input type="text" name="isbn" id="isbn" value="<?php echo $row['isbn'] ?>"><br>
                  <br>
                  <?php } ?>
                  <input type="submit" value="Atualizar">
            </form>
      </div>
</body>
</html>

<?php } ?>