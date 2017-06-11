<?php
 $hostname = 'localhost';
$username = 'guias674_diego';
$password = '26632818';
$database = "guias674_clinica"; 

$conn = new PDO('mysql:host=localhost;dbname=guias674_clinica', $username, $password);	

// Seleciona o Banco de dados através da conexão acima

$conn->query("guias674_clinica");


 if($conn){


$sql = "SELECT * FROM configuracoes ";


$consulta = $conn->query($sql);

// Armazena os dados da consulta em um array 




while( $registro = $consulta->fetch()){
	
	
	 $ans =  $registro["ans"] ;
	 $empresa = utf8_encode($registro["nome"]);
	
}}


?>