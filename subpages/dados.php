
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V!AGE</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <?php
        $valor = $_GET["escolha"];
        echo "Escolheu $valor";?>
    <br>
    <?php
        $dp = $_GET["partida"];
        echo "Data de partida: $dp";?>
    <br>
    <?php
        $dv = $_GET["volta"];
        echo "Data de volta: $dv";?>

</body>
</html>


