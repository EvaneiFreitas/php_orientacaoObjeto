<?php
 
	 declare(strict_types = 1);

	 $pdo = null;

		 try {
		 	
		   $pdo = new PDO('mysql:localhost=mysql;dbname=exemplo','root','');
		   //echo "Conectado com sucesso!!!";

		 } catch (Exception $e) {
		 	
		  echo $e->getMessage();
		  die();

		 }
	     return $pdo;

?>