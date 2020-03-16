
UnblockedPiratebay Script
=========================

This is a PHP script that allows you to create a proxy site for The Pirate Bay

Simply upload it to a web host that supports PHP

How it works
------------
The script uses the PHP curl function to load The Pirate Bay website and modifies the page to make it work through the proxy.

One downside of the script is that it prepends the `?load=` query string for the pages and all internal links.

Therefore, the URL's will be shown as https://example.com/?load=/torrent/ whereas normally it would be something like https://example.com/torrent/

If you prefer the URL's to stay the same as the original site you can try the alternate PHP script or the more advanced NGINX method, see [https://proxybay.onl/setup.html](https://proxybay.onl/setup.html).

How to use
----------

There are 3 files which you may want to modify to customize your site.  The homepage can be edited as a simple HTML file, home.html.  All the other pages loaded through the proxy are modified through PHP code found in config.php and functions.php

### home.html
The home.html file is a static HTML file which will be loaded by the script as your homepage. This page will not be affected by the code in other PHP files.

### includes/config.php
The config.php file contains the main URL variable for thepiratebay site.  If thepiratebay switches domains, you can update it here.  There is also a variable called $footercode.  Here you can replace the placeholder code with anything you wish.  The code will then be inserted on every page except the homepage.

### includes/functions.php
If you want to further customize the site you can edit functions.php.  Here you can add a str_replace function to replace any text found on the site.  Modifying the exisisting code may break the proxy since

For example, to change every instance of the word 'foo' to 'bar', add `str_replace('foo','bar',$page);`

You can also make more complex replacements using regular expressions with the preg_match function.
