<?php 

require_once 'conn.php';

$name = (isset($_POST['name'])) ? $_POST['name'] : '';
$game_name = (isset($_POST['game_name'])) ? $_POST['game_name'] : '';
$description = (isset($_POST['description'])) ? $_POST['description'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '10';

if(isset($_POST['name'])){
      
      $res = $mysqli->query("UPDATE girias SET name = '$name', game_name = '$game_name', description = '$description' WHERE id = $id");
      
      if(!$res) die('deu erro');

      header ("Location: read.php");
} else {

      $res = $mysqli->query("SELECT * FROM girias WHERE id = $id");

      $itens = $res->fetch_all(MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Lendo os giriass</title>
</head>
<body>
      <div>
            <form action="update.php" method="post">
                  <?php 
                        foreach ($itens as $key => $item) {
                  ?>
                  <label for="name">name:</label>
                  <input type="text" name="name" id="name" value="<?php echo $item['name'] ?>"><br>
                  <br>
                  <label for="game_name">game_name:</label>
                  <input type="text" name="game_name" id="game_name" value="<?php echo $item['game_name'] ?>"><br>
                  <br>
                  <label for="description">description:</label>
                  <input type="text" name="description" id="description" value="<?php echo $item['description'] ?>"><br>
                  <br>
                  <?php } ?>
                  <input type="submit" value="Atualizar">
            </form>
      </div>
</body>
</html>

<?php } ?>