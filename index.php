<?php
  $get = $_GET['load'];
  if(strpos($_GET['load'],'/language/') !== false) {
    $loadurl = file_get_contents("home.html");
    echo($loadurl);
    exit;
  }

  if($get == "/settings" || $get == "/language" ||  $get == "/" || $get == "")
  {
    $loadurl = file_get_contents("home.html");
    echo($loadurl);
    exit;
  }

  include("includes/functions.php");
  include("includes/dn.php");
  $loadurl = $get;
  $loadurl = "http://$domaintoproxy$loadurl";
  $loadurl = str_replace(" ", "+", $loadurl);
  $loadurl = get_data("$loadurl");
  $loadurl = remove_bloat("$loadurl");
  echo($loadurl);
  exit;
?>
