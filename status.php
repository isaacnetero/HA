<?php
session_start();
$user =  $_SESSION['usuario'];
include_once('functions.php');
?>
<style>

</style>
<div id="status">
	<div id="skin"><img src="imagens/skins/<?php  echo getSkinPath(); ?>.jpg" width="285" height="400"></div>
    <div id="dados">
    	<table>
        <td>
	    <span>LEVEL:<?php echo $user['j_level']; ?></span>
        <span>EXPERIÊNCIA:<?php echo $user['j_exp']; ?></span>
      	<span>LIFE:<?php echo $user['st_HP']; ?></span>
        <span>FORÇA:<?php echo $user['st_FR']; ?></span>
        <span>DEFESA:<?php echo $user['st_DEF']; ?></span>
       	</td>
        <td>
        <span>AGILIDADE:<?php echo $user['st_AGI']; ?></span>
        <span>VITALIDADE:<?php echo $user['st_VIT']; ?></span>
        <span>SORTE:<?php echo $user['st_LUK']; ?></span>
        <span>INTELIGÊNCIA:<?php echo $user['st_INT']; ?></span>
        <span>DEXTREZA:<?php echo $user['st_DEX']; ?></span>
        </td>
        </table>
    </div>
    
</div>