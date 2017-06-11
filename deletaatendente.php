<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
    $root = 'root';
	$senha ='';

    $id = $_GET['id']; 
	$username = 'guias674_diego';
$password = '26632818';
$database = "guias674_clinica";
   
try {
  $pdo = new PDO('mysql:host=localhost;dbname=guias674_clinica', $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
  $stmt = $pdo->prepare('DELETE FROM secretaria WHERE id_secretaria = :id_secretaria');
  $stmt->bindParam(':id_secretaria', $id); 
  $stmt->execute();
  echo '<script>alert("Parabens! Atendente excluido com sucesso!"); </script>'; 
  echo '<script> window.close(); </script>';
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?>