<?php
  include("includes/config.php");
  include("includes/functions.php");
  $scriptname = $_SERVER['SCRIPT_NAME'];
  $loadurl = $_SERVER["REQUEST_URI"];
  $loadurl = str_replace("$scriptname", "$domaintoproxy/s/", $loadurl);
  $loadurl = search_curl($loadurl);
  $loadurl = remove_bloat("$loadurl");
  echo $loadurl;
  exit;
?>
