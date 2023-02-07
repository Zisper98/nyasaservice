<?php
// Job Lister Free Version - https://www.netartmedia.net/job-lister
// A software product of NetArt Media, All Rights Reserved
// The following source codes are obfuscated / made difficult to edit. 
// When upgrading to Job Lister PRO, you get the full non-obfuscated source codes 
// and also extra features - please find details on:
// https://www.netartmedia.net/job-lister#pro
// Find out more PHP scripts and ready-made website systems on:
// https://www.netartmedia.net/products
?><?php error_reporting(0); $mnffadg = "uploads/"; if(isset($_FILES["myfile"])) { $qtvd = array(); $qfxmnq =$_FILES["myfile"]["error"]; if(!is_array($_FILES["myfile"]["name"])) { $lthjum = $_FILES["myfile"]["name"]; $zmgqoo = pathinfo($lthjum, PATHINFO_EXTENSION); if($zmgqoo=="png"||$zmgqoo=="jpg"||$zmgqoo=="jpeg"||$zmgqoo=="gif"||$zmgqoo=="PNG"||$zmgqoo=="JPG"||$zmgqoo=="JPEG"||$zmgqoo=="GIF") { $chox=getimagesize($_FILES["myfile"]["tmp_name"]); $xecdtbs = $chox['mime']; if(substr($xecdtbs, 0, 6) != 'image/'||$chox[0]==0||$chox[1]==0) { } else { move_uploaded_file($_FILES["myfile"]["tmp_name"],$mnffadg.$lthjum); $qtvd[]= $lthjum; } } } else { $nnjbof = count($_FILES["myfile"]["name"]); for($i=0; $i < $nnjbof; $i++) { $lthjum = $_FILES["myfile"]["name"][$i]; $zmgqoo = pathinfo($lthjum, PATHINFO_EXTENSION); if($zmgqoo=="png"||$zmgqoo=="jpg"||$zmgqoo=="jpeg"||$zmgqoo=="gif"||$zmgqoo=="PNG"||$zmgqoo=="JPG"||$zmgqoo=="JPEG"||$zmgqoo=="GIF") { $chox=getimagesize($_FILES["myfile"]["tmp_name"]); $xecdtbs = $chox['mime']; if(substr($xecdtbs, 0, 6) != 'image/'||$chox[0]==0||$chox[1]==0) { } else { move_uploaded_file($_FILES["myfile"]["tmp_name"][$i],$mnffadg.$lthjum); $qtvd[]= $lthjum; } } } } echo json_encode($qtvd); } ?>