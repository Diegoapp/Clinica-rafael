<?php
 
 $id = $_GET['id'];

session_start();
 
//Caso o usuário não esteja autenticado, limpa os dados e redireciona
if ( !isset($_SESSION['crm']) and !isset($_SESSION['password']) ) {
    //Destrói
    session_destroy();
 
    //Limpa
    unset ($_SESSION['crm']);
    unset ($_SESSION['password']);
     
    //Redireciona para a página de autenticação
    header('location:index.php');
}
?>
<?php 
if(isset($_POST['acao']) && $_POST['acao'] == "enviado"){ 


  // Faz conexão com banco de daddos
$hostname = 'localhost';
$username = 'guias674_diego';
$password = '26632818';
$database = "guias674_clinica"; 

$conn = new PDO('mysql:host=localhost;dbname=guias674_clinica', $username, $password);	
$conn->query("guias674_clinica");	

if($conn){



$nome  = $_POST['nome'];
$crm = $_POST['convenio'];

$uf  = $_POST['nome'];
$convenio = $_POST['convenio'];
$cbonovo  = $_POST['num'];

$nome  = $_POST['nome'];
$convenio = $_POST['convenio'];



$query = "UPDATE cbo SET nome_cbo = '".$nome."', num_cbo = '".$cbonovo."' WHERE (id_cbo = ".$id.")";

$atualiza = $conn->query($query);

if($atualiza){ 
  echo '<script>alert("Parabens! Dados auterados com sucesso!"); </script>'; 
  echo '<script> window.close(); </script>';
}else {
 echo '<script>alert("0.0! Erro ao auterar o cliente "). mysql_error(); </script>'; 
  echo '<script> window.close(); </script>';	
	
}

}

}

 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--
  
        Clinica inteligente v0.0.0

        Copyright 2012-2014 Diego vieira
        desenvolvimento em  Apache Licensa 5.5
 
    -->
    <meta charset="utf-8">
<title>Sistema de Clinica Inteligente</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>

  

    <!-- icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>
    <!-- topbar starts -->
    <!-- topbar ends -->
<div class="ch-container">
  <div class="row">
        
        <!-- left menu starts -->
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">&nbsp;</h4>

                <p>&nbsp;</p>
            </div>
    </noscript>

      <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    
</div>


<form action="" method="post">

<div class=" row"></div>
<?php

$hostname = 'localhost';
$username = 'guias674_diego';
$password = '26632818';
$database = "guias674_clinica";  

$conn = new PDO('mysql:host=localhost;dbname=guias674_clinica', $username, $password);		
		
$conn->query("guias674_clinica");

// Seleciona o Banco de dados através da conexão acima
 if($conn){
$sqledita= "SELECT clientes.convenio,clientes.id, clientes.nome, convenios.id_convenios, convenios.nome_convenio FROM clientes INNER JOIN convenios on clientes.id = $id and convenios.id_convenios= clientes.convenio";

$sql = "SELECT * FROM cbo WHERE id_cbo=$id ";

$consulta = $conn->query($sql);

// pesquisa o bd ára colocar os valores nos inputs 



while( $registro = $consulta->fetch()){



echo '<p><div class="form-group has-success col-md-4"></p>';
echo '<p><b>Especialização:</b></p>';
echo '<input type="text"  class="form-control" name="nome"  value="'.utf8_encode($registro["nome_cbo"]).'" id="inputSuccess1">
';

echo '<p><b>Numeração</b></p>';
echo '<input type="text"  class="form-control" name="num"  value="'.$registro["num_cbo"].'" id="inputSuccess1">
';



echo '</div>';
echo '<p><div class="form-group has-success col-md-4"></p>';

//echo '<button type="submit" onclick="funcaoedita('.$registro["id"].')" class="btn btn-default">Editar</button>';

}
}
	       
				  ?>
                   </select>
                    </div>
                </div> 


</div>
 </div>
 <input type="hidden" name="acao" value="enviado">
 <button type="submit" value="acao" class="btn btn-default">Editar</button>
</form>               
             
    </div>
</div>

<div class="row">
  <!--/span-->
  <!--/span-->
    <!--/span-->
</div><!--/row-->

<div class="row">
  <!--/span-->
  <!--/span-->
  <!--/span-->
</div><!--/row-->
    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

    <!-- Ad, you can remove it -->
    
        
            <!--End mc_embed_signup-->
</div>

    </div>
    <!-- Ad ends -->

    <hr>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3></h3>
                </div>
                <div class="modal-body">
                    <p></p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="row">
      <!--  <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Powered by: <a
                href="">Clinicas</a></p> -->
    </footer>

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='bower_components/moment/min/moment.min.js'></script>
<script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>



<script>

function funcaoedita(get) {
	
	 window.open('http://localhost/Clinica/myprojeto/auteraclientes.php?id='+get+'', 'Pagina', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=10, LEFT=10, WIDTH=650, HEIGHT=400'
  ); 

	}

</script>

</body>
</html>