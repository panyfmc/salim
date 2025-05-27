<?php
// Parâmetros de conexão com o banco de dados
    $host = 'db';
    $usuario = 'root'; 
    $senha = ''; 
    $banco = 'users'; 


	$conn = mysqli_connect($host, $usuario, $senha, $banco);
	
	if ($conn->connect_error) {
        die("Erro na conexão com o banco: " . $conn->connect_error);
    }

?>