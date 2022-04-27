<?php
    include('conexao.php');
    $nome_usuario = $_POST['nome_usuario'];
    $email_usuario = $_POST['email_usuario'];
    $fone_usuario = $_POST['fone_usuario'];
 
    echo "<h1> Cadastro de Usuários</h1>";
    echo "<p> Nome: " . $nome_usuario . "<br>";
    echo "Email: " . $email_usuario . "<br>";
    echo "Telefone: " . $fone_usuario . "</p>";
	
	$sql = "INSERT INTO usuario (nome_usuario, email_usuario, fone_usuario) 
	        VALUES ('".$nome_usuario."','".$email_usuario."','".$fone_usuario."')";
	    
	$result = mysqli_query($con, $sql);
	if($result)
		echo "Dados inseridos com sucesso";
	else
		echo "Erro ao inserir no banco de dados: ".mysqli_error($con);
?>