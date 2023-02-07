<?php
// Job Lister Free Version - https://www.netartmedia.net/job-lister
// A software product of NetArt Media, All Rights Reserved
// The following source codes are obfuscated / made difficult to edit. 
// When upgrading to Job Lister PRO, you get the full non-obfuscated source codes 
// and also extra features - please find details on:
// https://www.netartmedia.net/job-lister#pro
// Find out more PHP scripts and ready-made website systems on:
// https://www.netartmedia.net/products
?><a href="<?php echo $this->byhbpye();?>" class="navbar-brand"><?php if ( $this->information->blog_logo!="" && file_exists("thumbnails/".$this->information->blog_logo.".jpg") ) { echo '<img src="thumbnails/'.$this->information->blog_logo.'.jpg" class="site-logo img-responsive"/>'; } else { echo $this->information->blog_logo_text; } ?></a>