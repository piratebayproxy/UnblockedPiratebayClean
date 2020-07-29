## Update April 12, 2020

We have updated the script to make it compatible with the new configuration of The Pirate Bay.

Description
===========

This is a PHP script that allows you to create a proxy site for The Pirate Bay. 

A proxy site allows users to access The Pirate Bay on networks where it is blocked.

Install
=======

To install it, you will need to upload the files to a web server which supports PHP and the PHP Curl library.

To add your own custom code (e.g. Google Analytics) simply edit the PHP files (not api.php).

Afterwards, you can request to have your proxy site added to our list at: [https://proxybay.gdn](https://proxybay.gdn)

How it works
============

The script uses Javascript and AJAX requests to load the content of each page. All of the major functions are handled by the main.js file found in the static folder. To load the site content, a request is sent to the TPB API through the api.php file. The response from the API request is used to generate the page content.

The static content (e.g. images, css) is already included in the repository so there is no need to proxy it. Therefore, the only external content being loaded through the script is through the API.
