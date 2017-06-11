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
   
  $stmt = $pdo->prepare('DELETE FROM cbo WHERE id_cbo = :id_cbo');
  $stmt->bindParam(':id_cbo', $id); 
  $stmt->execute();
  echo '<script>alert("Parabens! Cliente excluido com sucesso!"); </script>'; 
  echo '<script> window.close(); </script>';
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?>