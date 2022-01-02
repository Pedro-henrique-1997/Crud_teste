<?php

try{

	$conectar = new PDO("mysql:host=localhost;port=3306;dbname=banco;", "root", "");
	

}catch(PDOException $e){
	echo "Erro de sistema: " . $e->getMessage();
}
?>