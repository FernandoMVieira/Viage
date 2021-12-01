<?php
    include_once('config.php');
    if(isset($_POST['submit']))
    {
        //print_r($_POST['escolha']);
        //print_r($_POST['partida']);
        //print_r($_POST['volta']);

        $escolha = $_POST['escolha'];
        $partida = $_POST['partida'];
        $volta = $_POST['volta'];

       

        $result = mysqli_query($conexao, "INSERT INTO pedidos(Local,dataPartida,dataVolta) 
        VALUES ('$escolha', '$partida', '$volta')");

    }

    $sql = "SELECT * FROM pedidos";
    
    $ret = $conexao->query($sql);

    print_r($ret);


?>

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
       <h1>Bem vindo ao V!age, escolha seu destino!</h1><br>

       <form action="compras.php" method="POST">
            <div class="compras">
                <label for="destino">Escolha o seu destino:</label>
                <input type="text" list="escolha_dest" name="escolha"/>
                <datalist id="escolha_dest">
                    <option value="Pernambuco">
                    <option value="Ipanema">
                    <option value="Noronha">
                    <option value="Mato Grosso">
                </datalist>

            </div>

            <br>
            <br>

            <div>
                <label for="partida">Data de partida:</label>
                <input type="date" id="partida" name="partida">
            </div>

            <br>

            <div>
                <label for="volta">Data de Chegda:</label>
                <input type="date" id="volta" name="volta">
            </div>

            <br>
            <br>
            <br>

            <input type="submit" name="submit" value="Partiu"/>
        

        </form>

        <table>
            <thead>
                <tr>
                    <th scope="col">Lugar</th>
                    <th scope="col">DatadePartida</th>
                    <th scope="col">DatadeVolta</th>
                    <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($data = mysqli_fetch_assoc($ret))
                    {
                        echo "<tr>";
                        echo "<td>".$user_data['Lugar']."</td>";
                    }
                ?> 
            </tbody>
        </table>
</body>
</html>