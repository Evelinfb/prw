<?php
    include('conexao.php');
    $sql = 'SELECT * FROM fluxo_caixa';
    $result = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listagem de fluxo de caixa</title>
</head>
<body>
    <h1>Listagem de fluxo de caixa</h1>
    <table align="center" border="1" widht=500>  
        <tr>
            <th>Código</th>
            <th>Data</th>
            <th>Tipo</th>
            <th>Valor</th>
            <th>Historico</th>
            <th>Cheque</th>
            <th>Excluir</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result))
            {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td><a href= 'altera_fluxo_caixa.php?id=". $row['id']. "'>" .$row['data']. "</a></td>";
                echo "<td>" . $row['tipo'] . "</td>";
                echo "<td>" . $row['valor'] . "</td>";
                echo "<td>" . $row['historico'] . "</td>";
                echo "<td>" . $row['cheque'] . "</td>";
                echo "<td><a href='exclui_fluxo_caixa.php?id=".$row[ 'id']."'>Excluir</a></td>";
                echo "</tr>"; 

            }
        ?>
    </table>
</body>
</html>