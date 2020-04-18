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
<h1>Details for: <label id="tlt"></label></h1>
<div class="browse">
<section class="col-center">
<div id="description_container">
<h2><label id="name"></label></h2>
<div id="metadata">
<dl id="meta-left" class="col-meta">
<div><dt class="dt-sm">Type:</dt><dd><label id="cat"></label></dd></div>
<div><dt class="dt-sm">Files:</dt><dd><label id="nfiles"></label></dd></div>
<div><dt class="dt-sm">Size:</dt><dd><label id="size"></label></dd></div>
<br />
<div><dt class="dt-md">Uploaded:</dt><dd><label id="uld"></label></dd></div>
<div><dt class="dt-md">By:</dt><dd><label id="user"></label></dd></div>
<br />
<div><dt class="dt-md">Seeders:</dt><dd><label id="s"></label></dd></div>
<div><dt class="dt-md">Leechers:</dt><dd><label id="l"></label></dd></div>
<div><dt class="dt-md">Info Hash:</dt><dd style="overflow-wrap: break-word; overflow: hidden;"><label id="ih"></label></dd></div>
</dl>
</div>
<div class="links">
<label id="d"></label>
</div>
<div id="description_text" class="text-box"><label id="descr"></label></div>
<div class="links">
<label id="d2"></label>
</div>
<div id="filelist" class="text-box">
<ol>
<script>if (typeof make_filelist !== "undefined" ) make_filelist();</script>
</ol>
</div>
</div>
</section>
</div>
<script>if (typeof make_details !== "undefined" ) make_details();</script>
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
