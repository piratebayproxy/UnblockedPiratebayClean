	var filelist=0;
	var tempPage=0;
	var cachePage = new Array();

	var toggleFilelist = function()
	{
		if (document.getElementById('filelistContainer').style.display=='block')
		{
			document.getElementById('filelistContainer').style.display='none';
		} else {
			document.getElementById('filelistContainer').style.display='block';
			if (!(window.location.href.match("#filelistContainer"))) {
				window.location.href = window.location.href + "#filelistContainer";
			}
		}
	}

	var toggleArtinfo = function()
	{
		if (document.getElementById('artistDetails').style.display=='block')
		{
			document.getElementById('artistDetails').style.display='none';
			document.getElementById('detailartistHide').style.display='none';
			document.getElementById('detailartistShow').style.display='block';
			document.cookie='tpb_showArtist=0;expires=Sat, 01 Jan 2050 00:00:00 GMT;path=/';
		} else {
			document.getElementById('artistDetails').style.display='block';
			document.getElementById('detailartistHide').style.display='block';
			document.getElementById('detailartistShow').style.display='none';
			document.cookie='tpb_showArtist=1;expires=Sat, 01 Jan 2050 00:00:00 GMT;path=/';
		}
	}

	var pagePutCache = function(t)
	{
		cachePage[tempPage] = t.responseText;
		document.getElementById('comments').innerHTML=cachePage[tempPage];
	}
	function comPage(page,pages,crc, id) {
		document.getElementById('comments').innerHTML = 'Loading...';
		if (!cachePage[page])
		{
			tempPage=page;
			new Ajax.Request('/ajax_details_comments.php', {method: 'post', parameters: 'id='+id+'&page='+page+'&pages='+pages+'&crc='+crc, onSuccess:pagePutCache});
		} else {
			document.getElementById('comments').innerHTML = cachePage[page];
		}
		return false;
	}


	var rateTorrent = function(number,id) {new Ajax.Updater('rating','/ajax_details_rating.php', {method: 'post', parameters: 'id='+id+'&rating='+number,evalScripts:false})}
