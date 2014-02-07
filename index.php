<?php
	session_start();
	if(isset($_SESSION['usuario'])){
		header("Location: home.php");
	}
?>
<html>
<head>
<meta charset="utf-8">
<title>Hunter x Hunter Adventure</title>
<link href='http://fonts.googleapis.com/css?family=Titan+One' rel='stylesheet' type='text/css'>

<style>
body{margin:0 auto;}
#login_field{position:relative;top:70px;right:50px; color:#000;width:480px;height:200px;font-size:20px;}
#formularioLogin{padding-top:50px;font-family: 'Titan One';}
input[type=submit] {
  position:relative;
  top:30px;
  left:155px;
  width:100px;
  border-radius:20px;
  border:2px solid #000;
  margin: 10px;
  color: white;
  height:30px;
  background:none;
}
.submithover:hover{
	background-color:#FF2;
	color:#0F0;
	cursor:pointer;
}
#jogar{width:280px;height:280px;border-radius:200px;border:2px solid #000;position:absolute;left:400px;top:100px;text-align:center;
background: -moz-radial-gradient(center, ellipse cover,  rgba(255,50,50,1) 0%, rgba(213,93,108,1) 32%, rgba(188,119,143,0.7) 51%, rgba(125,185,232,0) 100%); /* FF3.6+ */
background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%,rgba(255,50,50,1)), color-stop(32%,rgba(213,93,108,1)), color-stop(51%,rgba(188,119,143,0.7)), color-stop(100%,rgba(125,185,232,0))); /* Chrome,Safari4+ */
background: -webkit-radial-gradient(center, ellipse cover,  rgba(255,50,50,1) 0%,rgba(213,93,108,1) 32%,rgba(188,119,143,0.7) 51%,rgba(125,185,232,0) 100%); /* Chrome10+,Safari5.1+ */
background: -o-radial-gradient(center, ellipse cover,  rgba(255,50,50,1) 0%,rgba(213,93,108,1) 32%,rgba(188,119,143,0.7) 51%,rgba(125,185,232,0) 100%); /* Opera 12+ */
background: -ms-radial-gradient(center, ellipse cover,  rgba(255,50,50,1) 0%,rgba(213,93,108,1) 32%,rgba(188,119,143,0.7) 51%,rgba(125,185,232,0) 100%); /* IE10+ */
background: radial-gradient(ellipse at center,  rgba(255,50,50,1) 0%,rgba(213,93,108,1) 32%,rgba(188,119,143,0.7) 51%,rgba(125,185,232,0) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff3232', endColorstr='#007db9e8',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}
#jogar span{font-family: 'Titan One', cursive; font-size:45px;color:#009;position:relative;top:100px;text-shadow:2px 2px 3px #000000;}
#registro{width:280px;height:280px;border-radius:200px;border:2px solid #000;position:absolute;left:650px;top:300px;text-align:center;
background: -moz-radial-gradient(center, ellipse cover,  rgba(30,87,153,1) 0%, rgba(60,118,178,1) 32%, rgba(78,137,193,0.7) 51%, rgba(125,185,232,0) 100%); /* FF3.6+ */
background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%,rgba(30,87,153,1)), color-stop(32%,rgba(60,118,178,1)), color-stop(51%,rgba(78,137,193,0.7)), color-stop(100%,rgba(125,185,232,0))); /* Chrome,Safari4+ */
background: -webkit-radial-gradient(center, ellipse cover,  rgba(30,87,153,1) 0%,rgba(60,118,178,1) 32%,rgba(78,137,193,0.7) 51%,rgba(125,185,232,0) 100%); /* Chrome10+,Safari5.1+ */
background: -o-radial-gradient(center, ellipse cover,  rgba(30,87,153,1) 0%,rgba(60,118,178,1) 32%,rgba(78,137,193,0.7) 51%,rgba(125,185,232,0) 100%); /* Opera 12+ */
background: -ms-radial-gradient(center, ellipse cover,  rgba(30,87,153,1) 0%,rgba(60,118,178,1) 32%,rgba(78,137,193,0.7) 51%,rgba(125,185,232,0) 100%); /* IE10+ */
background: radial-gradient(ellipse at center,  rgba(30,87,153,1) 0%,rgba(60,118,178,1) 32%,rgba(78,137,193,0.7) 51%,rgba(125,185,232,0) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e5799', endColorstr='#007db9e8',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}
#registro span{font-family: 'Titan One', cursive;font-size:45px;color:#063;position:relative;top:100px;text-shadow:2px 2px 3px #000000;z-index:1;}
#registro:hover, #jogar:hover{cursor:pointer;
background: -moz-linear-gradient(45deg,  rgba(0,0,0,0.65) 0%, rgba(0,0,0,0.65) 47%, rgba(0,0,0,0.02) 98%, rgba(0,0,0,0) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left bottom, right top, color-stop(0%,rgba(0,0,0,0.65)), color-stop(47%,rgba(0,0,0,0.65)), color-stop(98%,rgba(0,0,0,0.02)), color-stop(100%,rgba(0,0,0,0))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(45deg,  rgba(0,0,0,0.65) 0%,rgba(0,0,0,0.65) 47%,rgba(0,0,0,0.02) 98%,rgba(0,0,0,0) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(45deg,  rgba(0,0,0,0.65) 0%,rgba(0,0,0,0.65) 47%,rgba(0,0,0,0.02) 98%,rgba(0,0,0,0) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(45deg,  rgba(0,0,0,0.65) 0%,rgba(0,0,0,0.65) 47%,rgba(0,0,0,0.02) 98%,rgba(0,0,0,0) 100%); /* IE10+ */
background: linear-gradient(45deg,  rgba(0,0,0,0.65) 0%,rgba(0,0,0,0.65) 47%,rgba(0,0,0,0.02) 98%,rgba(0,0,0,0) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a6000000', endColorstr='#00000000',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}
#mask {position:absolute;left:0;top:0;z-index:9000;background-color:#000;display:none;} 
#logar{width:400px;height:300px;background-image:url(imagens/modal-login.png);position:absolute;z-index:9999;display:none;}
.fechar{float:right;position:relative;color:#FFF;right:30px;top:15px;}
.fechar:hover{cursor:pointer;font-size:23px;}
#registrar{width:400px;height:550px;background-image:url(imagens/modal-register.png);position:absolute;z-index:9999;display:none;
font-family: 'Titan One';}
#registrar input{float:right;font-size:15px;margin-right:20px;}
#registrar label{float:left;font-size:15px;color:#000;text-shadow:1px 1px 1px #fff;}
#registrar ul{list-style:none;color:#FFF;margin-top:90px;}
#registrar li{margin-top:0px;font-size:17px;height:40px;}
#registrar p{font-size:13px;color:#F30;text-shadow:1px 1px 1px #000;float:right;position:relative;left:140px;}
#registrar input[type=submit]{position:relative;left:15px;border:none;}
#registrar input[type=submit]:hover{cursor:pointer;font-size:20px;}
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script> 
<script language="javascript">
$(document).ready(function(){
	$("#jogar").click(function(){
		window.location = "login";
	});
	$("#registro").click(function(){
		window.location = "registro";
	});
	$(".fechar").click(function(){
		window.location = "index.php";
	});
	$("#formularioRegistro").submit(function(){
	});
});
function abrirLogin(){
	var maskHeight = $(document).height();
	var maskWidth = $(window).width();
	
	$('#mask').css({'width':maskWidth,'height':maskHeight});
	
	$('#mask').fadeIn(500);	
	$('#mask').fadeTo("fast",0.85);	
	
	//Get the window height and width
	
	var winH = $("#logar").height();
	var winW = $("#logar").width();
	$("#logar").css('top',  (maskHeight/2) - (winH/2));
	$("#logar").css('left', (maskWidth/2) - (winW/2));
	
	$("#logar").fadeIn(1000); 
}
function abrirRegistro(){
	var maskHeight = $(document).height();
	var maskWidth = $(window).width();

	$('#mask').css({'width':maskWidth,'height':maskHeight});

	$('#mask').fadeIn(500);	
	$('#mask').fadeTo("fast",0.85);	

	//Get the window height and width
	
	var winH = $("#registrar").height();
	var winW = $("#registrar").width();
	$("#registrar").css('top',  (maskHeight/2) - (winH/2));
	$("#registrar").css('left', (maskWidth/2) - (winW/2));

	$("#registrar").fadeIn(1000); 
}
function validatePass(){
	var pass = document.getElementById("senha").value;
	var cpass = document.getElementById("csenha").value;
	if(pass != cpass) {
		alert("Senha de confirmação não confere com a senha dada!");
		return false;
	} else {
		return true;
	}
}
</script>
</head>
<body style="margin:0 auto;background-color:#000;overflow:hidden;">
<center>
<div style="background-image:url(imagens/login-page3.jpg);width:1380px;height:680px;margin:0 auto;overflow:hidden;background-size:cover;">

    <div id="jogar" class="btn" title="logar"> <span> JOGAR </span> </div>
    
    <div id="registro" class="btn" title="registrar"> <span> REGISTRAR </span> </div>

   	<div id="logar" class="modal">    
    	<span class="fechar" title="Fechar"> X </span>
        <div id="login_field">
            <form id="formularioLogin" action="autentica.php" method="post">
            <label> Login: </label>
            <input type="text" name="login" size="20" required style="font-size:20px;">
            <br />
            <br />
            <label> Senha: </label>
            <input type="password" name="senha" size="20" required style="font-size:20px;">
            <br />
            <input class="submithover" type="submit" value="LOGAR">
            </form>
        </div>
    </div>
    
    <div id="registrar" class="modal">    
    <span class="fechar" title="Fechar"> X </span>
    <?php
		include_once("registro.php");
	?>
    </div>
    
    <div id="mask"></div>

</div>
</center>
<?php 
	echo $_GET['m'];
	if($_GET['m'] == "registro"){
		echo "<script> abrirRegistro(); </script>";
	} else if ($_GET['m'] == "login"){
		echo "<script> abrirLogin(); </script>";
	}
?>
</body>
</html>