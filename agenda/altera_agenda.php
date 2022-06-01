<?php
    include('conexao.php');
    $id_agenda = $_GET['id_agenda'];
    $sql = 'SELECT * FROM agenda where id_agenda =' .$id_agenda;
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
</head>
<body>
    <h1>Alteração de Agenda</h1>
    <?php echo "<img class='center' src='data:image/jpeg;base64,".base64_encode( $row["foto_blob"] )."' align='center' width='150' height='150'/>"; ?>
    <div id="teste">
    <form action="altera_agenda_exe.php" method="POST" enctype='multipart/form-data'>
        <div>
            <label for="nome">Nome</label>
            <input type="nome_agenda" name="nome_agenda" id="nome_agenda" 
            value="<?php echo $row[ 'nome'] ?>" placeholder= "Digite o nome">
        </div>
        <div>
            <label for="">Apelido</label>
            <input type="apelido_agenda" name="apelido_agenda" id="apelido_agenda"
            value="<?php echo $row[ 'apelido'] ?>" placeholder= "Digite o apelido">
         </div>
        <div>
            <label for="">Endereço</label>
            <input type="endereco_agenda" name="endereco_agenda" id="endereco_agenda" 
            value="<?php echo $row[ 'endereco'] ?>" placeholder= "Digite o endereço">
        </div>
        <div>
            <label for="">Bairro:</label>
            <input type="bairro_agenda" name="bairro_agenda" id="bairro_agenda"
            value="<?php echo $row[ 'bairro'] ?>" placeholder= "Digite o bairro"> 
        </div>
        <div>
            <label for="">Cidade:</label>
            <input type="cidade_agenda" name="cidade_agenda" id="cidade_agenda"
            value="<?php echo $row[ 'cidade'] ?>" placeholder= "Digite a cidade"> 
        </div>
        <div>
            <label for="">Estado:</label>
            <input type="estado_agenda" name="estado_agenda" id="estado_agenda"
            value="<?php echo $row[ 'estado'] ?>" placeholder= "Digite o estado"> 
        </div>
        <div>
            <label for="">Telefone:</label>
            <input type="telefone_agenda" name="telefone_agenda" id="telefone_agenda"
            value="<?php echo $row[ 'telefone'] ?>" placeholder= "Digite o telefone"> 
        </div>
        <div>
            <label for="">Celular:</label>
            <input type="celular_agenda" name="celular_agenda" id="celular_agenda"
            value="<?php echo $row[ 'celular'] ?>" placeholder= "Digite o número do celular"> 
        </div>
        <div>
            <label for="">Email:</label>
            <input type="email_agenda" name="email_agenda" id="email_agenda"
            value="<?php echo $row[ 'email'] ?>" placeholder= "Digite o email"> 
        </div>
        <div class="form-item">
             <input type="file" id="foto" name="foto" accept="image/*" />
         </div>            
        <div class="form-item">
            <button type="submit">Enviar</button>
            <a href= 'index.php'>Voltar</a>
        </div>
        <input name= "id_agenda" type="hidden" value="<?php echo $row[ 'id_agenda']?>">

    </form>
    
</body>
</html>