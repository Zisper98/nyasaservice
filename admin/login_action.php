<?php
// Job Lister Free Version - https://www.netartmedia.net/job-lister
// A software product of NetArt Media, All Rights Reserved
// The following source codes are obfuscated / made difficult to edit. 
// When upgrading to Job Lister PRO, you get the full non-obfuscated source codes 
// and also extra features - please find details on:
// https://www.netartmedia.net/job-lister#pro
// Find out more PHP scripts and ready-made website systems on:
// https://www.netartmedia.net/products
?><?php define("LOGIN_PAGE", "login.php"); define("SUCCESS_PAGE", "index.php?login=1"); define("LOGIN_EXPIRE_AFTER", 24 * 3600); if(!isset($_POST["username"]) || !isset($_POST["password"]) || trim($_POST["username"]) == "" || trim($_POST["password"]) == "") { die("<script>document.location.href='".LOGIN_PAGE."?error=no';</script>"); } else { $uhpgxu = parse_ini_file("../config.php",true); $yxta="D58X1W"; if ( md5($_POST["password"].$yxta)==$uhpgxu["login"]["admin_password"] && $_POST["username"]==$uhpgxu["login"]["admin_user"] ) { $jlpmr=$_POST["username"]."~".md5($_POST["password"].$yxta)."~".(time()+LOGIN_EXPIRE_AFTER); setcookie("AuthUser",$jlpmr, (time()+LOGIN_EXPIRE_AFTER)); die("<script>document.location.href='".SUCCESS_PAGE."';</script>"); } else { die("<script>document.location.href=\"".LOGIN_PAGE."?error=error\";</script>"); } } ?>