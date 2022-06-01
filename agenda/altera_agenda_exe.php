<?php
    include( 'conexao.php');

    // Upload da foto     
    $fotoNome = $_FILES['foto']['name'];
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);
    // Select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Valid file extensions
    $extensions_arr = array("jpg","jpeg","png","gif");

    // Check extension
    if( in_array($imageFileType,$extensions_arr) ){      
        // Upload file
        if(move_uploaded_file($_FILES['foto']['tmp_name'],$target_dir.$fotoNome)){
            $fotoBlob = addslashes(file_get_contents($target_dir.$fotoNome));
         }
    }

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

    if(strlen($fotoNome)>0){
        $sql = "UPDATE agenda SET
            nome= '".$nome_agenda. "',
            Apelido= '".$apelido_agenda. "',
            Endereco= '".$endereco_agenda. "',
            Bairro= '".$bairro_agenda. "',
            Cidade= '".$cidade_agenda. "',
            Estado= '".$estado_agenda. "',
            Telefone= '".$telefone_agenda. "',
            Celular= '". $celular_agenda. "',
            Email= '".$email_agenda. "',
            foto_blob='".$fotoBlob."',
            foto_nome='".$fotoNome."'
        WHERE id_agenda=".$id_agenda;
    }
    else
    {
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
    }
    
    $result = mysqli_query($con, $sql);
    if($result)
        echo "Dados alterados com sucesso <br>";
    else
        echo "Erro ao alterar no banco de dados: ".mysqli_error($con)."<br>";
 ?>
    <a href=' index.php'>Voltar</a>
