<?php
    include('conexao.php');
    $id_usuario = $_GET[ 'id_usuario'];
    $sql = 'SELECT * FROM usuario where id_usuario =' .$id_usuario;
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de clientes</title>
</head>
<body>
    <h1>Alteração de Usuario</h1>
    <form action="cadastro_usuario.php" method="POST">
        <div>
            <label for="nome">Nome</label>
            <input type="nome_usuario" name="nome_usuario" size="50" id="nome_usuario" 
            value="<?php echo $row[ 'nome_usuario'] ?>" placeholder= "Digite o nome">
        </div>
        <div>
            <label for="">Email</label>
            <input type="email_usuario" name="email_usuario" size="50" id="email_usuario"
            value="<?php echo $row[ 'email_usuario'] ?>" placeholder= "Digite o email">
         </div>
        <div>
            <label for="">Telefone</label>
            <input type="fone_usuario" name="fone_usuario" size="30" id="fone_usuario" 
            value="<?php echo $row[ 'fone_usuario'] ?>" placeholder= "Digite o telefone">
        </div>
        <button type="submit">Enviar</button>

    </form>
    
</body>
</html>