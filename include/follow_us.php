<?php
// Job Lister Free Version - https://www.netartmedia.net/job-lister
// A software product of NetArt Media, All Rights Reserved
// The following source codes are obfuscated / made difficult to edit. 
// When upgrading to Job Lister PRO, you get the full non-obfuscated source codes 
// and also extra features - please find details on:
// https://www.netartmedia.net/job-lister#pro
// Find out more PHP scripts and ready-made website systems on:
// https://www.netartmedia.net/products
?><?php if($this->information->facebook_url!="") { echo '<a target="_blank" href="'.$this->information->facebook_url.'" rel="nofollow"><img src="images/facebook-icon.png" alt="Facebook" class="bottom-icon"/></a>'; } if($this->information->twitter_url!="") { echo '<a target="_blank" href="'.$this->information->twitter_url.'" rel="nofollow"><img src="images/twitter-icon.png" alt="Twitter" class="bottom-icon"/></a>'; } if($this->information->linkedin_url!="") { echo '<a target="_blank" href="'.$this->information->linkedin_url.'" rel="publisher"><img src="images/linkedin-icon.png" alt="LinkedIn" class="bottom-icon"/></a>'; } if($this->information->instagram_url!="") { echo '<a target="_blank" href="'.$this->information->instagram_url.'" rel="publisher"><img src="images/instagram-icon.png" alt="Instagram" class="bottom-icon"/></a>'; } ?>