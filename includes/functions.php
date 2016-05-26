<?php
function remove_bloat($page, $footerCode = ''){
  $page = str_replace("/s/","/search.php", $page);
  $page = str_replace('//thepiratebay.org','', $page);
  $page = str_replace('href="/','href="/?load=/', $page);
  $page = str_replace('src="/static/','src="/?load=/static/', $page);
  $page = preg_replace('/\/.*\/static\/ads\/.*.html/','', $page);
  $page = preg_replace('/..\/?load=.*\/static\/ads\/.*.js/','', $page);
  $page = str_replace('href="/?load=http','href="http', $page);
  $page = str_replace('href="/?load=/static','href="/static', $page);
  $page = str_replace('href="/?load=magnet','href="magnet', $page);
  $page = str_replace('href="/?load=https','href="https', $page);
  $page = str_replace('<a href="/?load=/rss" class="rss" title="RSS"><img src="/static/img/rss_small.gif" alt="RSS"/></a>','',$page);
  $page = str_replace('/css-new/','/css/', $page);
  $page = str_replace('<a href="/?load=/login" title="Login">Login</a> |','<b><a href="https://proxybay.la" title="More Pirate Bay Proxies" target="_blank">Proxy List</a></b> |', $page);
  $page = str_replace('<a href="/?load=/register" title="Register">Register</a> |','', $page);
  $page = str_replace('<a href="/?load=/language" title="Select language">Language / Select language</a> |','', $page);
  $page = str_replace("</body>","$footerCode </body>", $page);
  return $page;
}

function get_data($url)
{
  $ch = curl_init();
  curl_setopt($ch,CURLOPT_URL,$url);
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
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  curl_setopt($ch, CURLOPT_HEADER, 0);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_URL, $url);
  $data = curl_exec($ch);
  curl_close($ch);
  return $data;
}
?>
