<?php

function remove_bloat($page){
	//SearchFix
	$page = str_replace("/s/","/search.php", $page);
	//Fix static link
	$page = str_replace('href="','href="/?load=', $page);
	$page = str_replace('href="/?load=/static','href="/static', $page);
	$page = str_replace('href="/?load=magnet','href="magnet', $page);
	$page = str_replace('href="/?load=http','href="http', $page);
	$page = str_replace('<a href="/?load=/rss" class="rss" title="RSS"><img src="/static/img/rss_small.gif" alt="RSS" /></a>','',$page);
	//Remove links that is not needed
	$page = str_replace("<a href=\"/login\" title=\"Login\">Login</a> | ","", $page);
	$page = str_replace("<a href=\"/register\" title=\"Register\">Register</a> | ","", $page);
	$page = str_replace("<a href=\"/language\" title=\"Select language\">Language / Select language</a> |","", $page);
	//Switch view not yet supported
	$page = str_replace("<a href=\"/switchview.php?view=s\">Single</a>","<a href=\"#\" onClick=\"alert('This feature is not yet supported. I need to spend a long time adding support for cookies, if/when I do this feature will work.')\">Single</a>", $page);
	$page = str_replace("<div class=\"detailartist\"","<div class=\"detailartist\" style=\"display:none; visibility:hidden;\"", $page);
	//Remove detailed artist info that doesnt work, temporary disable comment page switching
	$page = str_replace("ajax_details_artinfo.php","blank.php", $page);
	return $page;
}

function get_data($url)
{
	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL,$url);
 	curl_setopt($ch,CURLOPT_USERAGENT,'TMB Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
    curl_setopt( $ch, CURLOPT_ENCODING, "" );
    curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
 	curl_setopt( $ch, CURLOPT_AUTOREFERER, true );
    curl_setopt( $ch, CURLOPT_MAXREDIRS, 10 );
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
	curl_setopt($ch,CURLOPT_MAXCONNECTS,320);
	curl_setopt($ch,CURLOPT_TIMEOUT,30);
	curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,30);
	$data = curl_exec($ch);	
	curl_close($ch);
	return $data;
}

function search_curl($url)
{
	$ch = curl_init();
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt ($ch, CURLOPT_URL, $url);
	curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 20);
	curl_setopt ($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.11) Gecko/20071127 Firefox/2.0.0.11');// Only calling the head
	curl_setopt($ch, CURLOPT_HEADER, true); // header will be at output
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'HEAD'); // HTTP request is 'HEAD'	
	$data = curl_exec($ch);	
	curl_close($ch);	
	return $data;
	
}

?>
