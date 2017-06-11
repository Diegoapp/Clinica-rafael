<?php 
  $hostname = 'localhost';
  $username = 'guias674_diego';
  $password = '26632818';
  $database = "guias674_clinica";  
  $id = $_GET['id']; 
	
   
try {
  $pdo = new PDO('mysql:host=localhost;dbname=guias674_clinica', $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
  $stmt = $pdo->prepare('DELETE FROM clientes WHERE id = :id');
  $stmt->bindParam(':id', $id); 
  $stmt->execute();
  echo '<script>alert("Parabens! Cliente excluido com sucesso!"); </script>'; 
  echo '<script> window.close(); </script>';
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?>