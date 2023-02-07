<?php

?><?php define("IN_SCRIPT","1"); error_reporting(0); session_start(); require("include/sm.php"); $website = new SiteManager(); $website->lggz("data/listings.xml"); $website->hdsy(); $website->lzmwjqh(); if(isset($_REQUEST["page"])) { $website->fgxfaq($_REQUEST["page"]); $website->voilrvd($_REQUEST["page"]); } $website->psfayo(); ?>