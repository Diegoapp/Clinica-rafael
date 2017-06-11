<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
    $root = 'guias674_diego';
	$senha ='26632818';

    $id = $_GET['id']; 
	
   
try {
  $pdo = new PDO('mysql:host=localhost;dbname=guias674_clinica', $root, $senha);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
  $stmt = $pdo->prepare('DELETE FROM medicos WHERE id_medico = :id_medico');
  $stmt->bindParam(':id_medico', $id); 
  $stmt->execute();
  echo '<script>alert("Parabens! médico excluido com sucesso!"); </script>'; 
  echo '<script> window.close(); </script>';
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?>