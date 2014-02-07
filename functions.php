<?php
session_start();
include_once("config.php");

function getSkinPath(){
	try {
		$user =  $_SESSION['usuario'];
		$pdo = conecta();
		$stmt = $pdo->prepare("SELECT * FROM skin INNER JOIN skin_jogador 
		ON (skin.id_skin=skin_jogador.sj_id_skin AND skin_jogador.sj_id_jogador=?)");
		
		$stmt->bindParam(1, $user['id_jogador']);
		$stmt->execute();
		$skin = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$user['skin'] = $skin[0];
		return $skin[0]['sk_nome'];
	}catch(Exception $e){
		return $e;
	}
}

?>