<?php
    include("includes/functions.php");
    include("includes/dn.php");
	$id = $_POST['id'];
	$page = $_POST['page'];
	$pages = $_POST['pages'];
	$crc = $_POST['crc'];
	$proxyx = "ajax_details_comments.php?id=$id&page=$page&pages=$pages&crc=$crc";
    $loadurl = "http://$domaintoproxy/$proxyx";
    $loadurl = get_data("$loadurl");
	$loadurl = remove_bloat("$loadurl");
    echo($loadurl);
	exit;
?>