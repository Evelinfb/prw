<?php
    include('conexao.php');
    $id = $_GET['id'];
    $sql = 'SELECT * FROM fluxo_caixa where id =' .$id;
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro fluxo de caixa </title>
    <link rel="stylesheet">
</head>
<body>
    <h1>Cadastro fluxo de caixa</h1>
    <div id="teste">
    <form action="altera_fluxo_caixa_exe.php" method="POST"  enctype='multipart/form-data'>
        <div class="form-item">
            <label for="nome">Data: </label>
            <input type="data" name="data" size="50" id="data"
            value="<?php echo $row[ 'data'] ?>" placeholder= "Digite a data">
        </div>
        <div>
            <INPUT TYPE = "radio" NAME = "Tipo: "
            VALUE = "Entrada"> Entrada  
            <INPUT TYPE = "radio" NAME = "Tipo: "
            VALUE = "Saida"> Saída
        </div>
        <div>
            <label for="valor">Valor: </label>
            <input type="valor" name="valor" size="50" id="valor"
            value="<?php echo $row[ 'valor'] ?>" placeholder= "Digite o valor">
        </div>
        <div>
            <label for="historico">Histórico: </label>
            <input type="historico" name="historico" size="30" id="historico"
            value="<?php echo $row[ 'fone_usuario'] ?>" placeholder= "Digite o telefone"> 
        </div>
        <div>
            <label for="cheque">Cheque: </label>
            <SELECT NAME = "cheque" VALUE = "valor default" SIZE = "3">
            
                <OPTION value="Sim">Sim</OPTION>
                <OPTION value="Nao">Não</OPTION></SELECT>
        </div>
        <div class="form-item">
            <button type="submit">Enviar</button>
            <a href= 'index.php'>Voltar</a>
        </div>
        <input name= "id" type="hidden" value="<?php echo $row[ 'id']?>">

    </form>
    
</body>
</html>