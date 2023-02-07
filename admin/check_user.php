<?php
// Job Lister Free Version - https://www.netartmedia.net/job-lister
// A software product of NetArt Media, All Rights Reserved
// The following source codes are obfuscated / made difficult to edit. 
// When upgrading to Job Lister PRO, you get the full non-obfuscated source codes 
// and also extra features - please find details on:
// https://www.netartmedia.net/job-lister#pro
// Find out more PHP scripts and ready-made website systems on:
// https://www.netartmedia.net/products
?><?php define("LOGIN_PAGE", "login.php"); define("SUCCESS_PAGE", "index.php"); define("LOGIN_EXPIRE_AFTER", 3 * 3600); if((!isset($_COOKIE["AuthUser"]))||$_COOKIE["AuthUser"]=="") { die("<script>document.location.href=\"".LOGIN_PAGE."?error=expired\";</script>"); } else { list($iaujprk,$svim,$qjaargy)=explode("~",$_COOKIE["AuthUser"]); if($qjaargy<time()) { die("<script>document.location.href=\"".LOGIN_PAGE."?error=expired\";</script>"); } else { $uhpgxu = parse_ini_file("../config.php",true); if ( $svim!=$uhpgxu["login"]["admin_password"] || $iaujprk!=$uhpgxu["login"]["admin_user"] ) { die("<script>document.location.href=\"".LOGIN_PAGE."?error=expired\";</script>"); } } } ?>