<?php 
require_once('config.php');
session_start();

$c = conecta();
$resp = $c->prepare("SELECT * FROM jogador WHERE j_nome=? and j_senha=?");
$resp->bindValue(1, val_input($_POST['login']));
$resp->bindValue(2, md5(val_input($_POST['senha'])));
$resp->execute();

$usuario = $resp->fetchAll(PDO::FETCH_ASSOC);
if ( $usuario[0] != "") {
	$_SESSION['usuario'] = $usuario[0];
	echo "<script> alert('login efetuado com sucesso!'); window.location.href='home.php'; </script>";
} else {
	echo "<script> alert('login ou senha invalido!'); window.location.href='index.php'; </script>";
}

function val_input($data){
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>