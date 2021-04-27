<?php
  $apiDomain = "https://apibay.org";

  function get_data($url) {
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

  $get = isset($_GET['url']) ? str_replace('/api.php?url=','',$_SERVER['REQUEST_URI']) : '';
  echo(get_data("$apiDomain$get"));
  exit;
?>
