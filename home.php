<?php 
	session_start();
	if(!isset($_SESSION['usuario'])){
		header("Location: index.php");
	}
?>
<?php 
	$user =  $_SESSION['usuario'];
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<style>
body{margin:0;background-color:#000;}
#header{width:1000px;heigth:300px;font-size:60px;background-image:url(imagens/topo.jpg);}
#menu{width:1300px;height:200px;background-image:url(imagens/menu_bar.jpg);background-repeat:no-repeat;margin-left:170px;}
#menu ul{list-style:none;margin-left:100px;padding-top:75px;}
#menu ul li{display:inline;float:left;margin-right:20px;margin-top:15px;}
#menu ul li a{font-family:Impact, Haettenschweiler, "Franklin Gothic Bold", "Arial Black", sans-serif;text-decoration:none;width:100px;color:#000;}
#menu ul li a:hover{color:#FFF;text-shadow:1px 1px 1px #000000;}
#status{width:1347px;height:500px;opacity:0;transition-duration:2s;}
#skin{width:285px;height:400px;background-color:#006;float:left;margin-left:260px;}
#dados{width:400px;float:right;margin-right:300px;margin-top:20px;color:#FFF;text-shadow:1px 1px 1px #fff;}
#dados span{display:block;margin:15px;font-size:25px;margin-bottom:45px;}
#dados td{border-right:1px solid #000;}
.fade{opacity:1;}
</style>
<script language="javascript" src="scripts/jquery-1.10.2.min.js"></script>
<script>
	function status(){
		var div = document.getElementById("status").style.opacity = 1;
	}
</script>
</head>
<body>
<center><img src="imagens/topo.jpg"></center>
<center>
<nav >
	<div id="menu">
    	<ul>
        	<li><a href="home.php">HOME</a></li>
            <li><a href="javascript:void(0)" onClick="status()">STATUS</a></li>
            <li><a href="javascript:void(0)">GREED ISLAND</a></li>
            <li><a href="javascript:void(0)">EXAME HUNTER</a></li>
            <li><a href="javascript:void(0)">TREINAMENTO</a></li>
            <li><a href="javascript:void(0)">SHOP</a></li>
            <li><a href="javascript:void(0)">LEILAO</a></li>
<!--
            <li><a href="javascript:void(0)">BATALHA</a></li>
            <li><a href="javascript:void(0)">AMIGOS</a></li>
            <li><a href="javascript:void(0)">ORGANIZAÇÃO</a></li>
            <li><a href="javascript:void(0)">RANKING</a></li>
            <li><a href="javascript:void(0)">CONTA</a></li>
-->
            <li><a href="logout.php"> LOGOUT</a></li>
         </ul>
    </div>
</nav>
</center>
<div id="body">
	<?php include_once("status.php"); ?>
</div>

</body>
</html>