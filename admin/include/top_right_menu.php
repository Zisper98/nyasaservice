<?php
// Job Lister Free Version - https://www.netartmedia.net/job-lister
// A software product of NetArt Media, All Rights Reserved
// The following source codes are obfuscated / made difficult to edit. 
// When upgrading to Job Lister PRO, you get the full non-obfuscated source codes 
// and also extra features - please find details on:
// https://www.netartmedia.net/job-lister#pro
// Find out more PHP scripts and ready-made website systems on:
// https://www.netartmedia.net/products
?><?php if(!isset($_COOKIE["AuthUser"])) { ?> <?php } else { ?> <li class="dropdown"> <a href="#"> <p class="notification" id="top_notification"> </p> </a> </li> <li> <a href="../index.php" target="_blank"> <i class="xti-settings"></i> <p><?php echo $this->fjod["open_main_site"];?></p> </a> </li> <li> <a href="logout.php"> <i class="ti-shift-right"></i> <p><?php echo $this->fjod["logout"];?></p> </a> </li> <?php } ?> 