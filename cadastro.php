<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- create a form with:
    username
    password
    gener (radio)
    file (input type file)
    surname (text)
    submit (input type submit)
    -->
  

    <fieldset>
        <form action="insert.php" method="post">
           
            <label for="titulo">Titulo:</label>
            <input type="text" name="titulo" id="titulo">
            <br>
            <label for="autor">Autor:</label>
            <input type="text" name="autor" id="autor">
            <br>
            <label for="isbn">ISBN:</label>
            <input type="text" name="isbn" id="isbn">
            <br>
            <input type="hidden" value="coisa" name="nulo">
            <input type="submit" value="Enviar">
        </form>
    </fieldset>

</body>
</html>