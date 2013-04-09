function setAll()
{
	document.forms['q'].elements['audio'].checked = false;
	document.forms['q'].elements['video'].checked = false;
	document.forms['q'].elements['apps'].checked = false;
	document.forms['q'].elements['games'].checked = false;
	document.forms['q'].elements['porn'].checked = false;
	document.forms['q'].elements['other'].checked = false;
}

function rmAll() { document.forms['q'].elements['all'].checked = false; }
