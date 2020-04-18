<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>The Pirate Bay - The galaxy's most resilient bittorrent site</title>
<link href="/static/normalize.css" rel="stylesheet" type="text/css">
<link href="/static/tpb.css" rel="stylesheet" type="text/css">
<script src="/static/main.js"></script>
<script src="/static/tinysort.min.js"></script>
</head>
<body id="browse" onload="jswarnclear()">
<main>
<b><font color="RED"><label id="jscrwarn">Enable JS in your browser!</label></font></b>
<script>document.getElementById("jscrwarn").innerHTML='';</script>
<b><font color="RED"><label id="jscrwarn2">Your adblock may block important javascript components, check that main.js is loaded or the webpage won't work.</label></font></b>
<h1>Browse Torrents</h1>
<div class="browse">
<script>print_browse()</script>
</div>
</main>
<header class="row">
<script>print_header1()</script>
<input type="search" title="Pirate Search" name="q" placeholder="Search here..." id="search">
<script>document.getElementById("search").value = getParameterByName('q')</script>
<script>print_header2()</script>
</header>
<script>
print_footer();
mark_selected();
</script>
</body>
</html>
