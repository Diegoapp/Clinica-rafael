<?php 

class conexao {
	
	public $username; 
	public $password; 
	
	
	function conectar(){
            
			
           
             $hostname = 'localhost';
             $username = 'guias674_diego';
$password = '26632818';
$database = "guias674_clinica";  


			 
			 
			 
$conn = new PDO('mysql:host=localhost;dbname=guias674_clinica', $username, $password);		
		
$conn->query("guias674_clinica");		
		
		
		}
	
	
	
	
	
	}





?>