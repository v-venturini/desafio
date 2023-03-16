<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Produtos de Beleza</title>
</head>
<body>
    <h2>COSMÉTICOS</h2>
    <table>
        <tr>
            <th>Nome</th>
            <th>Marca</th>
            <th>Preço</th>
            <th>Tipo</th>
        </tr>
        <?php
        require('produtos.php');
        foreach($produtos as $produto) {
            echo "<tr>";
            echo "<td>" . $produto['nome'] . "</td>";
            echo "<td>" . $produto['marca'] . "</td>";
            echo "<td>" . $produto['preco'] . "</td>";
            echo "<td>" . $produto['tipo'] . "</td>";
            echo "</tr>";
        }      
        ?>
    </table>    
</body>
</html>