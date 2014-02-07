<?php
// This script was created by phpMyBackupPro v.2.4 (http://www.phpMyBackupPro.net)
// In order to work probably, it must be saved in the directory C:/wamp/www/HunterOficial/.
$_POST['db']=array("dbteste", );
$_POST['tables']="on";
$_POST['data']="on";
$_POST['drop']="on";
$period=(3600*24)/24;
$security_key="";
// switch to the phpMyBackupPro v.2.4 directory
@chdir("C:/wamp/www");
@include("backup.php");
// switch back to the directory containing this script
@chdir("C:/wamp/www/HunterOficial/");
?>