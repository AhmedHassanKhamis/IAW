<?php
include("background.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <table border="1" align="center">
            <th><a href="page1.php">pagina1</a></th>
            <th><a href="page2.php">pagina2</a></th>
            <th><a href="config.php">configuracion</a></th>
        </table>
        <br/>
        <form method="post" align="center">
        <fieldset>
            <legend>color de paginas</legend>
            <br/>
            <input type="text" name="color" id="color" value="<?=$color?>">
            <input type="submit" value="Enviar">
        </fieldset>
        </form>
    </body>
</html>
