<?php
// Job Lister Free Version - https://www.netartmedia.net/job-lister
// A software product of NetArt Media, All Rights Reserved
// The following source codes are obfuscated / made difficult to edit. 
// When upgrading to Job Lister PRO, you get the full non-obfuscated source codes 
// and also extra features - please find details on:
// https://www.netartmedia.net/job-lister#pro
// Find out more PHP scripts and ready-made website systems on:
// https://www.netartmedia.net/products
?><?php $ciuztn = array( 1 => array( "name" => 'dashboard', "file" => 'home', "icon" => 'ti-layers' ), 2 => array( "name" => 'new_post', "file" => 'add', "icon" => 'ti-pencil-alt' ), 3 => array( "name" => 'my_posts', "file" => 'posts', "icon" => 'ti-clipboard' ), 4 => array( "name" => 'Services', "file" => 'categories', "icon" => 'ti-folder' ), 5 => array( "name" => 'site_information', "file" => 'site_information', "icon" => 'ti-comment-alt' ), 6 => array( "name" => 'settings', "file" => 'settings', "icon" => 'ti-settings' ), 7 => array( "name" => '', "file" => 'pro', "." => 'ti-loop' ), 8 => array( "name" => '', "file" => '', "." => 'ti-user' ), 9 => array( "name" => '', "file" => 'scripts', "." => 'ti-server' ) ); foreach($ciuztn as $pdrsco) { $ztrtv=false; if(isset($_REQUEST["page"])&&$_REQUEST["page"]==$pdrsco["file"]) { $ztrtv=true; } else if(!isset($_REQUEST["page"])&&$pdrsco["file"]=="home") { $ztrtv=true; } echo "<li ".($ztrtv?"class=\"active\"":"")."> <a href=\"".($pdrsco["file"]=="logout"?"logout.php":"index.php?page=".$pdrsco["file"])."\"> <i class=\"".$pdrsco["icon"]."\"></i> <p>".(isset($this->fjod[$pdrsco["name"]])?$this->fjod[$pdrsco["name"]]:$pdrsco["name"])."</p> </a> </li>"; } ?>