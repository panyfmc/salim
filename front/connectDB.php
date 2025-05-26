<?php
// Parâmetros de conexão com o banco de dados
    $host = 'db';
    $usuario = 'root'; 
    $senha = ''; 
    $banco = 'users'; 


	$conn = mysqli_connect($host, $usuario, $senha, $banco);
	
	if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }

?>