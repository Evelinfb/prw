<?php
    include('conexao.php');

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
    $nome_usuario = $_POST['nome_usuario'];
    $email_usuario = $_POST['email_usuario'];
    $fone_usuario = $_POST['fone_usuario'];
 
    echo "<h1> Cadastro de Usuários</h1>";
    echo "<p> Nome: " . $nome_usuario . "<br>";
    echo "Email: " . $email_usuario . "<br>";
    echo "Telefone: " . $fone_usuario . "</p>";
	
	$sql = "INSERT INTO usuario (nome_usuario, email_usuario, fone_usuario, foto_blob, foto_nome) 
	        VALUES ('".$nome_usuario."','".$email_usuario."','".$fone_usuario."','".$fotoBlob."','".$fotoNome."')";
	    
	$result = mysqli_query($con, $sql);
	if($result)
		echo "Dados inseridos com sucesso";
	else
		echo "Erro ao inserir no banco de dados: ".mysqli_error($con);
?>