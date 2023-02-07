<?php
// Job Lister Free Version - https://www.netartmedia.net/job-lister
// A software product of NetArt Media, All Rights Reserved
// The following source codes are obfuscated / made difficult to edit. 
// When upgrading to Job Lister PRO, you get the full non-obfuscated source codes 
// and also extra features - please find details on:
// https://www.netartmedia.net/job-lister#pro
// Find out more PHP scripts and ready-made website systems on:
// https://www.netartmedia.net/products
?><?php $listings = simplexml_load_file($this->tlxb); $egxqk = array(); foreach ($listings->listing as $xxyu) $egxqk[] = $xxyu; $egxqk = array_reverse($egxqk); $snsjxg = 0; $ruulwd=sizeof($egxqk); $wpzywew=0; foreach ($egxqk as $listing) { if($wpzywew>=2) break; $ruulwd--; $llgnix=$this->byhiozi($ruulwd,$listing->title); ?> <li> <hr class="hr-small"> <a href="<?php echo $llgnix;?>"><small> <?php if(trim($listing->images) != "") { $sfhof=explode(",",$listing->images); if(file_exists("thumbnails/".$sfhof[0].".jpg")) { echo '<img src="thumbnails/'.$sfhof[0].'.jpg" alt="'.$listing->title.'" class="bottom-image" align="left"/>'; } } ?> <span class="underline-link"><?php echo $listing->title;?></span> </small></a> <div class="clearfix"></div> </li> <?php $wpzywew++; } ?>