﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script> 
<script type="text/javascript">

$(document).ready(function() {	

	$('a[name=modal]').click(function(e) {
		e.preventDefault();
		
		var id = $(this).attr('href');
	
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
	
		$('#mask').css({'width':maskWidth,'height':maskHeight});

		$('#mask').fadeIn(1000);	
		$('#mask').fadeTo("slow",0.8);	
	
		//Get the window height and width
		var winH = $(window).height();
		var winW = $(window).width();
              
		$(id).css('top',  winH/2-$(id).height()/2);
		$(id).css('left', winW/2-$(id).width()/2);
	
		$(id).fadeIn(2000); 
	
	});
	
	$('.window .close').click(function (e) {
		e.preventDefault();
		
		$('#mask').hide();
		$('.window').hide();
	});		
	
	$('#mask').click(function () {
		$(this).hide();
		$('.window').hide();
	});			
	
});

</script>
<style type="text/css">
body {
font-family:verdana;
font-size:15px;
}

a {color:#333; text-decoration:none}
a:hover {color:#ccc; text-decoration:none}

#mask {
  position:absolute;
  left:0;
  top:0;
  z-index:9000;
  background-color:#000;
  display:none;
}
  
#boxes .window {
  position:absolute;
  left:0;
  top:0;
  width:440px;
  height:200px;
  display:none;
  z-index:9999;
  padding:20px;
}

#boxes #dialog {
  width:375px; 
  height:203px;
  padding:10px;
  background-color:#ffffff;
}

#boxes #dialog1 {
  width:375px; 
  height:203px;
}

#dialog1 .d-header {
  background:url(imagens/moral.jpg) 0 0 transparent; 
  width:375px; 
  height:150px;
}

#dialog1 .d-header input {
  position:relative;
  top:60px;
  left:100px;
  border:3px solid #cccccc;
  height:22px;
  width:200px;
  font-size:15px;
  padding:5px;
  margin-top:4px;
}

#dialog1 .d-blank {
  float:left;
  background:url(imagens/phinks.jpg) 0 0 transparent; 
  width:267px; 
  height:53px;
}

#dialog1 .d-login {
  float:left;
  width:108px; 
  height:53px;
}

#boxes #dialog2 {
  background:url(imagens/bg-barra-procurados.png)  0 0 transparent; 
  width:326px; 
  height:229px;
  padding:50px 0 20px 25px;
}
.close{display:block; text-align:right;}

</style>
</head>
<body>
<h2>Exemplos - Janela Modal com jQuery</h2>

<ul>
<li><a href="http://www.maujor.com/blog">Link Normal para o Blog do Maujor</a></li>
<li><a href="#dialog" name="modal">Janela Modal Simples</a></li>
<li><a href="#dialog1" name="modal">Janela Modal com caixa de diálogo</a></li>
<li><a href="#dialog2" name="modal">Janela Modal com Bloco de Nota</a></li>
</ul>

<div id="boxes">

<div id="dialog" class="window">
<a href="#" class="close">Fechar [X]</a><br />
Janela Modal Simples<br />  
Aqui vai o conteúdo da sua Janela Modal Simples.
</div>
  
<!-- Janela Modal com caixa de diálogo -->  
<div id="dialog1" class="window">
  <div class="d-header">
    <input type="text" value="usuario" onclick="this.value=''"/><br/>
    <input type="password" value="Password" onclick="this.value=''"/>    
  </div>
  <div class="d-blank"></div>
  <div class="d-login"><input type="image" alt="Login" title="Login" src="login-button.png"/></div>

</div>
<!-- Fim Janela Modal com caixa de diálogo -->  



<!-- Janela Modal com Bloco de Nota -->
<div id="dialog2" class="window">
Então?<br />
Construir uma <b>Janela Modal Simples</b> com o formato que você quiser é fácil!<br />
Simples e totalmente personalizável : ) <br /><br />
<input type="button" value="Fechar" class="close"/>
</div>
<!-- Fim Janela Modal com Bloco de Nota -->



<!-- Máscara para cobrir a tela -->
<div id="mask"></div>

</div>

<br /><br />
</body>
</body>
</html>