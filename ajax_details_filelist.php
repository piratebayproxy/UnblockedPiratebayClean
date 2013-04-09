<?php
  include("includes/functions.php");
  include("includes/config.php");
	$id = $_GET["id"];
	$proxyx = "ajax_details_filelist.php?id=$id";
  $loadurl = "http://$domaintoproxy/$proxyx";
  $loadurl = get_data("$loadurl");
  echo($loadurl);
?>
