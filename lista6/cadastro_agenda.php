
<?php
include('conexao.php');
$nome_agenda = $_POST['nome_agenda'];
$apelido_agenda = $_POST['apelido_agenda'];
$endereco_agenda = $_POST['endereco_agenda'];
$bairro_agenda = $_POST['bairro_agenda'];
$cidade_agenda = $_POST['cidade_agenda'];
$estado_agenda = $_POST['estado_agenda'];
$telefone_agenda = $_POST['telefone_agenda'];
$celular_agenda = $_POST['celular_agenda'];
$email_agenda = $_POST['email_agenda'];

echo "<h1> Cadastro de Usuários</h1>";
echo "<p> Nome: " . $nome_agenda . "<br>";
echo "Apelido: " . $apelido_agenda . "<br>";
echo "Endereço: " . $endereco_agenda . "<br>";
echo "Bairro: " . $bairro_agenda . "<br>";
echo "Cidade: " . $cidade_agenda . "<br>";
echo "Estado: " . $estado_agenda . "<br>";
echo "Telefone: " . $telefone_agenda . "<br>";
echo "Celular: " . $celular_agenda . "<br>";
echo "Email: " . $email_agenda . "</p>";

$sql = "INSERT INTO agenda (nome, apelido, endereco, bairro, cidade, estado, telefone, celular, email ) 
        VALUES ('".$nome_agenda."','".$apelido_agenda."','".$endereco_agenda."','".$bairro_agenda."','".$cidade_agenda."','".$estado_agenda.        
        "','".$telefone_agenda."','".$celular_agenda."','".$email_agenda."')";
    
$result = mysqli_query($con, $sql);
if($result)
    echo "Dados inseridos com sucesso";
else
    echo "Erro ao inserir no banco de dados: ".mysqli_error($con);
    /*Script php que receberá dados do formulário “Cadastro_agenda.html” e
efetuará a inserção dos dados no banco de dados através do comando
INSERT.*/ 
?>
