<?php

define('HOST', 'localhost')	;
define('USER', 'root');
define('PASS', '');
define('BASE', 'hxhadventure');

function conecta() {
	try{
		$con = 'mysql:host='. HOST .';dbname=' . BASE;
		$con = new PDO($con, USER, PASS);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $con;
	} catch(PDOException $erro){
		echo 'ERRO na conexão com o banco de dados: '.$erro->getMessage();
	}
}


?>