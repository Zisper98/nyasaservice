<?php
// Job Lister Free Version - https://www.netartmedia.net/job-lister
// A software product of NetArt Media, All Rights Reserved
// The following source codes are obfuscated / made difficult to edit. 
// When upgrading to Job Lister PRO, you get the full non-obfuscated source codes 
// and also extra features - please find details on:
// https://www.netartmedia.net/job-lister#pro
// Find out more PHP scripts and ready-made website systems on:
// https://www.netartmedia.net/products
?><br/> <?php if(!isset($_REQUEST["page"])||$_REQUEST["page"]==""||$_REQUEST["page"]=="results") { ?> <h4><?php echo $this->fjod["refine_results"];?></h4> <hr class="no-margin"/> <br/> <form action="index.php" method="post"> <input type="hidden" name="page" value="results"/> <input type="hidden" name="proceed_search" value="1"/> <div class="row"> <label class="control-label col-md-4" for="keyword_search"> <?php echo $this->fjod["keyword"];?>: </label> <div class="control-field col-md-8 no-right-padding"> <input required name="keyword_search" value="<?php if(isset($_REQUEST["keyword_search"])) echo stripslashes($_REQUEST["keyword_search"]);?>" class="form-control input-sm"/> </div> </div> <div class="clearfix"></div> <br/> <div class="row"> <input type="submit" class="pull-right btn btn-primary " value="<?php echo $this->fjod["search"];?>"/> </div> <div class="clearfix"></div> <br/> </form> <?php } ?>