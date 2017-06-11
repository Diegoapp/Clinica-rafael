<?php 

$nomee= utf8_decode($_POST['nome']);


// verifica se foi enviado um arquivo
if ( isset( $_FILES[ 'arquivo' ][ 'name' ] ) && $_FILES[ 'arquivo' ][ 'error' ] == 0 ) {
    echo 'Você enviou o arquivo: <strong>' . $_FILES[ 'arquivo' ][ 'name' ] . '</strong><br />';
    echo 'Este arquivo é do tipo: <strong > ' . $_FILES[ 'arquivo' ][ 'type' ] . ' </strong ><br />';
    echo 'Temporáriamente foi salvo em: <strong>' . $_FILES[ 'arquivo' ][ 'tmp_name' ] . '</strong><br />';
    echo 'Seu tamanho é: <strong>' . $_FILES[ 'arquivo' ][ 'size' ] . '</strong> Bytes<br /><br />';
 
    $arquivo_tmp = $_FILES[ 'arquivo' ][ 'tmp_name' ];
    $nome = $_FILES[ 'arquivo' ][ 'name' ];
 
    // Pega a extensão
    $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
 
    // Converte a extensão para minúsculo
    $extensao = strtolower ( $extensao );
 
    // Somente imagens, .jpg;.jpeg;.gif;.png
    // Aqui eu enfileiro as extensões permitidas e separo por ';'
    // Isso serve apenas para eu poder pesquisar dentro desta String
    if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
        // Cria um nome único para esta imagem
        // Evita que duplique as imagens no servidor.
        // Evita nomes com acentos, espaços e caracteres não alfanuméricos
        $novoNome = uniqid ( time () ) . $extensao;
 
        // Concatena a pasta com o nome
        $destino = 'img_convenios / ' . $novoNome;
 
        // tenta mover o arquivo para o destino
        if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {
            echo 'Arquivo salvo com sucesso em : <strong>' . $destino . '</strong><br />';
	
	echo $destino;
	
	
 try {
	

     $pdo = new PDO("mysql:host=localhost;dbname=guias674_clinica;","guias674_diego", "26632818");
    // set the PDO error mode to exception
	
	
	$statement = $pdo->prepare('INSERT INTO convenios (id_convenios, nome_convenio, logo_convenio) VALUES (:id_convenio, :nome_convenios, :logo_convenio)');
  //  $sql = "INSERT INTO convenios (id_convenios, nome_convenio, logo_convenio)
  //  VALUES ('', '".$nomee."', '".$destino."')";
    // use exec() because no results are returned
	
	
	$statement->bindParam(':id_convenio',     "");
    $statement->bindParam(':nome_convenios', $nomee);
    $statement->bindParam(':logo_convenio', $destino);	
	
	
	
  $statement->execute();

   echo '<script>alert("Parabens! Convenio Cadastrado com sucesso!"); </script>'; 
   echo '<script> window.close(); </script>';
   echo '<script> window.location="/inicio.php" </script>';
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;








        }
        else
            echo 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />';
    }
    else
        echo 'Você poderá enviar apenas arquivos "*.jpg;*.jpeg;*.gif;*.png"<br />';
}
else
    echo 'Você não enviou nenhum arquivo!';

?>