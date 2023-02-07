<?php
// Job Lister Free Version - https://www.netartmedia.net/job-lister
// A software product of NetArt Media, All Rights Reserved
// The following source codes are obfuscated / made difficult to edit. 
// When upgrading to Job Lister PRO, you get the full non-obfuscated source codes 
// and also extra features - please find details on:
// https://www.netartmedia.net/job-lister#pro
// Find out more PHP scripts and ready-made website systems on:
// https://www.netartmedia.net/products
?><?php $uwegb = file_get_contents('include/categories.php'); $cythngr = explode("\n", trim($uwegb)); $pwmpx=0; foreach($cythngr as $nkpzrv) { if($pwmpx>=6) break; list($key,$ysouue)=explode(". ",$nkpzrv); $zprvsw = $this->zprvsw($key, $ysouue); echo '<li><a href="'.$zprvsw.'">'.$ysouue.'</a></li>'; $pwmpx++; } ?>