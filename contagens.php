<?php



$hostname = 'localhost';
$username = 'guias674_diego';
$password = '26632818';
$database = "guias674_clinica";  

$conn = new PDO('mysql:host=localhost;dbname=guias674_clinica', $username, $password); 
 
//Seleciona o banco de dados
$conn->query("guias674_clinica");


 $consulta = $conn->query("SELECT * FROM clientes");
 $NumeroLinhas = count($consulta);



$consultamedico= $conn->query("SELECT * FROM medicos");                           
$numeromedico=count($consultamedico);




$consultacbo=$conn->query("SELECT * FROM cbo");
$numerocbo=count($consultacbo);

$consultaconvenios=$conn->query("SELECT * FROM convenios");
$numeroconvenios=count($consultaconvenios);

?>