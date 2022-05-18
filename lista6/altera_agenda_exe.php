<?php
    include( 'conexao.php');
    $id_agenda = $_POST[ 'id_agenda'];
    $nome_agenda = $_POST['nome_agenda'];
    $apelido_agenda = $_POST['apelido_agenda'];
    $endereco_agenda = $_POST['endereco_agenda'];
    $bairro_agenda = $_POST['bairro_agenda'];
    $cidade_agenda = $_POST['cidade_agenda'];
    $estado_agenda = $_POST['estado_agenda'];
    $telefone_agenda = $_POST['telefone_agenda'];
    $celular_agenda = $_POST['celular_agenda'];
    $email_agenda = $_POST['email_agenda'];

    echo "<h1> Alterção de dados </h1>";
    echo "<p> Nome : " . $nome_agenda . "<p>";

    $sql = "UPDATE agenda SET
            nome= '".$nome_agenda. "',
            Apelido= '".$apelido_agenda. "',
            Endereco= '".$endereco_agenda. "',
            Bairro= '".$bairro_agenda. "',
            Cidade= '".$cidade_agenda. "',
            Estado= '".$estado_agenda. "',
            Telefone= '".$telefone_agenda. "',
            Celular= '". $celular_agenda. "',
            Email= '".$email_agenda. "'
        WHERE id_agenda=".$id_agenda;
    
    $result = mysqli_query($con, $sql);
    if($result)
        echo "Dados alterados com sucesso <br>";
    else
        echo "Erro ao alterar no banco de dados: ".mysqli_error($con)."<br>";
 ?>
    <a href=' index.php'>Voltar</a>
