<?php 
    $root = 'root';
	$senha ='';

    $id = $_GET['id']; 
	  $hostname = 'localhost';
  $username = 'guias674_diego';
  $password = '26632818';
  $database = "guias674_clinica";  
   
try {
  $pdo = new PDO('mysql:host=localhost;dbname=guias674_clinica', $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
  $stmt = $pdo->prepare('DELETE FROM convenios WHERE id_convenios = :id_convenios');
  $stmt->bindParam(':id_convenios', $id); 
  $stmt->execute();
  echo '<script>alert("Parabens! Convenio excluido com sucesso!"); </script>'; 
  echo '<script> window.close(); </script>';
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?>