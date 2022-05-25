<?php
    include('conexao.php');
    $id_usuario = $_GET['id_usuario'];
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
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Cadastro de Clientes  - IFSP</h1>
    <?php echo "<img class='center' src='data:image/jpeg;base64,".base64_encode( $row["foto_blob"] )."' align='center' width='150' height='150'/>"; ?>  
    <div id="teste">
    <form action="altera_usuario_exe.php" method="POST"  enctype='multipart/form-data'>
        <div class="form-item">
            <label for="nome">Nome</label>
            <input type="nome_usuario" name="nome_usuario" size="50" id="nome_usuario" 
            value="<?php echo $row[ 'nome_usuario'] ?>" placeholder= "Digite o nome">
        </div>
        <div class="form-item">
            <label for="">Email</label>
            <input type="email_usuario" name="email_usuario" size="50" id="email_usuario"
            value="<?php echo $row[ 'email_usuario'] ?>" placeholder= "Digite o email">
         </div>
        <div class="form-item">
            <label for="">Telefone</label>
            <input type="fone_usuario" name="fone_usuario" size="30" id="fone_usuario" 
            value="<?php echo $row[ 'fone_usuario'] ?>" placeholder= "Digite o telefone">
        </div>
        <div class="form-item">
             <input type="file" id="foto" name="foto" accept="image/*" />
         </div>            
        <div class="form-item">
            <button type="submit">Enviar</button>
            <a href= 'index.php'>Voltar</a>
        </div>
        <input name= "id_usuario" type="hidden" value="<?php echo $row[ 'id_usuario']?>">

    </form>
    
</body>
</html>