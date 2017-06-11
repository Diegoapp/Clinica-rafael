<?php
 
 $id = $_GET['id'];

/*session_start();
 
//Caso o usuário não esteja autenticado, limpa os dados e redireciona
if ( !isset($_SESSION['crm']) and !isset($_SESSION['password']) ) {
    //Destrói
    session_destroy();
 
    //Limpa
    unset ($_SESSION['crm']);
    unset ($_SESSION['password']);
     
    //Redireciona para a página de autenticação
    header('location:index.php');
}*/
?>
<?php


  // Faz conexão com banco de daddos
$hostname = 'localhost';
$username = 'guias674_diego';
$password = '26632818';
$database = "guias674_clinica";  

$conn = new PDO('mysql:host=localhost;dbname=guias674_clinica', $username, $password);		
		
$conn->query("guias674_clinica");	


if($conn){




$cancelar = $_POST['cancelar'];


$query = "UPDATE clientes SET atendimento = '".$cancelar."' WHERE (id = ".$id.")";

$atualiza = $conn->query($query);


if($atualiza){ 
  echo "<script> alert('Atendimento Concluido;') </script>"; 
  echo '<script> window.close(); </script>';
}else {
 echo '<script>alert("0.0! Erro ao auterar o cliente "). mysql_error(); </script>'; 
  echo '<script> window.close(); </script>';	
	
}

}

