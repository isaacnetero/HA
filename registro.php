<?php
	require_once('recaptcha-php-1.11/recaptchalib.php');
	$privatekey = "6Lf62OgSAAAAAOYPTa1HtzlYNTEc90J-slBnTacP";
	$resp = null;
	if (isset($_POST["recaptcha_response_field"])) {
		$resp = recaptcha_check_answer ($privatekey, $_SERVER["REMOTE_ADDR"], $_POST["recaptcha_challenge_field"],$_POST["recaptcha_response_field"]);

		if ($resp->is_valid) {
			$reg = registerUser();
			if ($reg == "") {
				echo "<script> alert('Cadastro concluído com sucesso!');window.location.href='index.php'; </script>";
			} else{
				echo $reg;
				if(strpos($reg,'jEmail')) {
					echo "<script> alert('Email já cadastrado');</script>";
					echo "<script> window.location.href='registro'; </script>";
					$error = $resp->error;
				} else if (strpos($reg,'jNome')) {
					echo "<script> alert('Username já cadastrado');</script>";
					echo "<script> window.location.href='registro'; </script>";
					$error = $resp->error;
				}
			}
			
		} else {
			echo "<script> alert('ReCaptcha Inválido! Digite o código corretamente!') </script>";
			echo "<script> window.location.href='registro' </script>";
			$error = $resp->error;
		}
	}
	function registerUser(){
		if(isset($_POST["email"])){
			try {
				$email = val_input($_POST["email"]);
				$username = val_input($_POST["nickname"]);
				$senha = md5(val_input($_POST["senha"]));
				
				include_once("config.php");
				
				$pdo = conecta();
				$stmt = $pdo->prepare("INSERT INTO jogador (j_email,j_nome,j_senha) VALUES(?,?,?)");
				$stmt->bindParam(1, $email);
				$stmt->bindParam(2, $username);
				$stmt->bindParam(3, $senha);
				$stmt->execute();
			} catch(Exception $e){
				return $e->getMessage();
			}
		} else {
			return "existem campos não preenchidos";
		}
	}
	
	function val_input($data){
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
?>
<form id="formularioRegistro" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" 
enctype="multipart/form-data" onsubmit="return validatePass()">
<ul>

<li>
<label> Email: </label>
<input id="email" type="email" value="" title="Email" name="email" required required >
</li>

<li>
<label> Seu nome no jogo: </label>
<input id="nickname" type="text" value="" title="Nickname" name="nickname" required pattern=".{3,15}">

<p> (Mín 3 e Máx 15) </p>
</li>

<li>
<label> Senha: </label>
<input id="senha" type="password" value="" title="Senha" name="senha" required pattern=".{7,25}">

<p> (Mín 7 e Máx 25) </p>
</li>

<li>
<label> Confirm. da Senha: </label>
<input id="csenha" type="password" value="" title="Confimação da Senha" name="csenha" required pattern=".{7,25}"> 

<p> (Mín 7 e Máx 25) </p>
</li>

<center>
<li>
<?php
	$publickey = "6Lf62OgSAAAAAKXFFAgQMe7mHYNjGUvFj15Sknjr";
	$error = null;
	echo recaptcha_get_html($publickey, $error);
?>

	<input type="submit" value="Concluir" title="Concluir">
</li>
</center>
</ul>
</form>