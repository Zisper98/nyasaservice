<?php
// Job Lister Free Version - https://www.netartmedia.net/job-lister
// A software product of NetArt Media, All Rights Reserved
// The following source codes are obfuscated / made difficult to edit. 
// When upgrading to Job Lister PRO, you get the full non-obfuscated source codes 
// and also extra features - please find details on:
// https://www.netartmedia.net/job-lister#pro
// Find out more PHP scripts and ready-made website systems on:
// https://www.netartmedia.net/products
?><?php include("check_user.php"); define("IN_SCRIPT","1"); error_reporting(0); session_start(); include("../include/sm.php"); $website = new SiteManager(); $website->cgbocst=true; $website->lggz("../".$website->tlxb); $website->tcdx("../".$website->fmfsdm); $website->cgbocst=true; $website->emndwbn="../"; $website->xoqccv(); $website->hdsy(); $website->lzmwjqh(); if(isset($_REQUEST["page"])) { $website->fgxfaq($_REQUEST["page"]); $website->voilrvd($_REQUEST["page"]); } else { $website->voilrvd("home"); } $website->psfayo(); ?>