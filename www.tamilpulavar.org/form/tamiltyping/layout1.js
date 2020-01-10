var isIE = document.all?true:false;
SelectedTab = 0;
SelectedMenu = 0;
SelectedSubMenu = 0;
AdLength = 1;

function menuItem(name, path)
{                      // Define a main tab
  this.name   = name;
  this.path   = path;
  this.nxt = new Array();
}

function showTab()
{
	dy = new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
	mn = new Array("January","February","March","April","May","June","July","August",
					"September","October","November","December")
	dt = new Date();
	wish = "Morning";
	if(dt.getHours() > 11)
		wish = "Afternoon"
	if(dt.getHours() > 15)
		wish = "Evening"
	suffix = "th"
	if(dt.getDate()	== 1 || dt.getDate() == 21 || dt.getDate() == 31 )
		suffix = "st"
	if(dt.getDate()	== 2 || dt.getDate() == 22)
		suffix = "nd"
	if(dt.getDate()	== 3 || dt.getDate() == 23)
			suffix = "rd"
  	date = dy[dt.getDay()] + " the "+ dt.getDate()+suffix+", "+mn[dt.getMonth()]+ " " +dt.getFullYear();
  	time = (dt.getHours()<= 9 ? "0"+dt.getHours():dt.getHours() )+":"
  			+(dt.getMinutes()<= 9 ? "0"+dt.getMinutes():dt.getMinutes() );
  	txt = '<div id="WholePage">'
  	for(i=3;i<tabList.length - 1;i++)
  		txt += '<a class='+tabList[i].name+' href="'+tabList[i].path+'">'+tabList[i].name+'</a>';
	txt +=''
			
	Menu = tabList[SelectedTab].nxt
	if(Menu.length != 0)
	{
		txt += ''
		for(i=0;i<Menu.length;i++)
		{
			if(i==SelectedMenu)
				cls = 'selconvbtn';
  			else
  				cls = 'convbtn';
  			txt += '<a class='+cls+' href="'+Menu[i].path+'" onmouseover="popupSubMenu(event,'+SelectedTab+','+i+')">'
  				+Menu[i].name+'</a>';
		}
	}
	if(location.href.indexOf('Reuse.html') == -1 && location.href.indexOf('Umar.html') == -1 &&
		location.href.indexOf('unicodeenable.html') == -1 && location.href.indexOf('index.html') == -1 )
	 {
		 if (typeof lang == "undefined")
		 	lang = "tamil";

		 twop = ""; if (lang != 'tamil') twop = "Inscript";

		txt += '<div id="Menu_content" align="center">'
			+''
			+'<input type=radio name=keybrd id=roman value=roman onclick="toggleKBMode(event,this)" checked > &nbsp;Phonetic &nbsp; ';
		if(lang == 'tamil' && location.href.indexOf('Multi.html') == -1)
			txt += '&nbsp;<input type=radio id=tamil99 name=keybrd value=tamil99 onclick="toggleKBMode(event,this)"> '
				+ 'Tamil 99 Keyboard &nbsp; ';
		txt += '&nbsp;<input type=radio id=typewriter name=keybrd value=typewriter onclick="toggleKBMode(event,this)"> ';
		if(location.href.indexOf('Multi.html') == -1)
			txt += lang.substring(0,1).toUpperCase() + lang.substring(1,lang.length) + ' ' +twop + ' ';
		txt += 'Typewritter<br>';
		txt += '<input type=radio name=keybrd id=english value=english onclick="toggleKBMode(event,this)" > &nbsp;English ';
	}
	txt += '</div>'
		;

	txt += ''
		;
//	+'<embed src="http://o.aolcdn.com/aim/web-aim/wimzi.swf?appKey=gt1143uCOwdNFEX5&theme=snowdust" type="application/x-shockwave-flash" width="190" height="275" ></embed>'

	txt += '';

		if(navigator.language){mylanguage=navigator.language;}
		else if(navigator.browserLanguage){mylanguage=navigator.browserLanguage;}

		if((mylanguage.toLowerCase()=='en-us') || (mylanguage.toLowerCase()=='en-ca'))
			txt	+= '';
		else
			txt += '';

	txt += '';

  	document.write(txt);

	getAjax("/newsadmin/sidemenunews.php","news_section");
}

function popupSubMenu(e,SelectedTab,SelectedMenu)
{
	SubMenu = tabList[SelectedTab].nxt[SelectedMenu].nxt;
	if(SubMenu.length != 0)
	{
		txt = ''
		for(i=0;i<SubMenu.length;i++)
		{
			if(i==SelectedSubMenu)
				cls = 'selconvbtn';
				else
					cls = 'convbtn';
				txt += '<a class='+cls+' href="'+SubMenu[i].path+'">'
					+SubMenu[i].name+'</a>';
		}
		txt +='</div></div>';

	    if(document.getElementById('PopupMenu') == null)
	    {
		    pmnudiv  = document.createElement('div');
			pmnudiv.setAttribute('id','PopupMenu');
			pmnudiv.setAttribute('align','left');
			bdy = document.getElementsByTagName('BODY')[0];
			bdy.appendChild(pmnudiv);

			pmnustyle = getStyleObject('PopupMenu');
			pmnustyle.width = '140px';
			pmnustyle.backgroundColor= '#FFFFFF';
			pmnustyle.position = 'absolute';
			if(isIE)
			{	pmnustyle.left = '355px';	pmnustyle.top = e.clientY - 15;}
			else
			{	pmnustyle.left = '370px';	pmnustyle.top = e.pageY - 15;	}
		}
		else
		{
			pmnudiv  = document.getElementById('PopupMenu');
			pmnustyle = getStyleObject('PopupMenu');
		}
		pmnudiv.innerHTML = txt;
		pmnustyle.display='inline';
		document.onclick = hideSubMenu;
	}
	else
	{
		pmnustyle = getStyleObject('PopupMenu');
		pmnustyle.display='none';

	}
}

function hideSubMenu()
{
	pmnustyle = getStyleObject('PopupMenu');
	pmnustyle.display='none';
}

function getAjax(url,id)
{
var xmlhttp=false;
var srctxt = "";
/*@cc_on @*/
/*@if (@_jscript_version >= 5)
// JScript gives us Conditional compilation, we can cope with old IE versions.
// and security blocked creation of the objects.
 try {
  xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
 } catch (e) {
  try {
   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  } catch (E) {
   xmlhttp = false;
  }
 }
@end @*/
if (!xmlhttp && typeof XMLHttpRequest!='undefined')
{
	try
	{
		xmlhttp = new XMLHttpRequest();
	}
	catch (e)
	{
		xmlhttp=false;
	}
}
if (!xmlhttp && window.createRequest)
{
	try
	{
		xmlhttp = window.createRequest();
	}
	catch (e)
	{
		xmlhttp=false;
	}
}
 try {
 xmlhttp.open("GET", url,true);
 xmlhttp.onreadystatechange=function()
 {
  if (xmlhttp.readyState==4)
  {
   document.getElementById(id).innerHTML = xmlhttp.responseText;
  }
 }
 xmlhttp.send(null);
	}
 	catch (e)
	{
		document.getElementById(id).innerHTML = '<a href="http://www.higopi.com/news/">NEWS</a>'
	}

}

function clsMain()
{
	txt = "";
	if(location.href.indexOf('Reuse.html') == -1 && location.href.indexOf('Umar.html') == -1 &&
			location.href.indexOf('unicodeenable.html') == -1 && location.href.indexOf('index.html') == -1 &&
			location.href.lastIndexOf('/') != (location.href.length - 1 ) )
		 {
			txt = '';
		}
	 txt += 	''
 	document.write(txt);
}

function clsCont()
{
	txt='<p align=right style="text-align:right;font-size:10px;">Website Layout Inspired by:<a href="http://www.sunlight.cz/">Sunlight webdesign</a></p></div><center>'
	txt += GoogleAdsIE();
	document.write(txt);
}

function Stats()
{
var statscol = "<!-- Start of StatCounter Code --><scri"+"pt type='text/javascript' language='"
	+"javascript'>\n<!--\nvar sc_project=371509;\nvar sc_partition=1;\nvar sc_invisible=1;\n"
	+"//-->\n</scri"+"pt>\n<scri"+"pt type='text/javascript' language='javascript' src='"
	+"http://www.statcounter.com/counter/counter.js'></scri"+"pt><noscri"+"pt><p><a href='"
	+"http://www.statcounter.com/' target='_blank'>\n<img src='http://c2.statcounter.com/'"
	+"counter.php?sc_project=371509&amp;amp;java=0&amp;amp;invisible=1' alt='counters' border='"
	+"0'></a></p></noscri"+"pt>\n<!-- End of StatCounter Code -->"
document.write(statscol);
}

function WrBr(num)
{
	for(i=0;i<num;i++)
		document.write("<br>\n");
}

function GoogleAdsIE()
{
	google_ad_client = "pub-5262009510690646";
	google_ad_type = "text";
	google_ad_channel = "";
	google_ad_width = 728;
	google_ad_height = 90;
	google_ad_format = "728x90_as";
	srctxt = '<script type="text/javascript" src="http://pagead2.googlesyndication.com'
		+'/pagead/show_ads.js"></script>'
		+'<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">'
		+'</script><script type="text/javascript">_uacct = "UA-1027973-1";urchinTracker();</script>';
	return srctxt;
}

function GoogleAds()
{
	google_ad_client = "pub-5262009510690646";
	google_ad_type = "text";
	google_ad_channel = "";
	if(AdLength == 1)
	{
		google_ad_width = 180;
		google_ad_height = 150;
		google_ad_format = "180x150_as";
		google_color_border = "336699";
		google_color_bg = "FFFFFF";
		google_color_link = "0000FF";
		google_color_text = "000000";
		google_color_url = "008000";
	}
	else //place lengthy adv.
	{
		google_ad_width = 160;
		google_ad_height = 600;
		google_ad_format = "160x600_as";
		google_color_border = "336699";
	}
	return '<script type="text/javascript" src="http://pagead2.googlesyndication.com'
		+'/pagead/show_ads.js"></script>'
		+'<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">'
		+'</script><script type="text/javascript">_uacct = "UA-1027973-1";urchinTracker();</script>';
}

function GoogleSearch()
{
	srctxt = '<!-- SiteSearch Google --><center>'
+'<form method="get" action="http://www.google.co.in/custom" target="google_window">'
+'<table border="0" valign=top>'
+'<tr><td nowrap="nowrap">'
+'<input type="hidden" name="domains" value="higopi.com"></input>'
+'<label for="sbi" style="display: none">Enter your search terms</label>'
+'<input type="text" name="q" size="20" maxlength="255" value="" id="sbi"></input>'
+'<input type="submit" name="sa" value="Google" id="sbb"></input>'
+'</td></tr>'
+'<tr>'
+'<td nowrap="nowrap">'
+'<table>'
+'<tr>'
+'<td>'
+'<input type="radio" name="sitesearch" value="" checked id="ss0"></input>'
+'<label for="ss0" title="Search the Web"><font size="-1">Web &nbsp;</font></label></td>'
+'<td>'
+'<input type="radio" name="sitesearch" value="higopi.com" id="ss1"></input>'
+'<label for="ss1" title="Search higopi.com"><font size="-1">higopi.com</font></label></td>'
+'</tr>'
+'</table>'
+'<label for="sbb" style="display: none">Submit search form</label>'
+'<input type="hidden" name="client" value="pub-5262009510690646"></input>'
+'<input type="hidden" name="forid" value="1"></input>'
+'<input type="hidden" name="ie" value="ISO-8859-1"></input>'
+'<input type="hidden" name="oe" value="ISO-8859-1"></input>'
+'<input type="hidden" name="safe" value="active"></input>'
+'<input type="hidden" name="cof" value="GALT:#008000;GL:1;DIV:#336699;VLC:663399;AH:center;BGC:FFFFFF;LBGC:336699;ALC:0000FF;LC:0000FF;T:000000;GFNT:0000FF;GIMP:0000FF;LH:50;LW:162;L:http://www.higopi.com/images/higopitxt.png;S:http://www.higopi.com;FORID:1"></input>'
+'<input type="hidden" name="hl" value="en"></input>'
+'</td></tr></table>'
+'</form>'
+'</center><!-- SiteSearch Google -->';
return srctxt;
}

function getStyleObject(objectId)
{
    // cross-browser function to get an object's style object given its
    if(document.getElementById && document.getElementById(objectId)) {
	// W3C DOM
	return document.getElementById(objectId).style;
    } else if (document.all && document.all(objectId)) {
	// MSIE 4 DOM
	return document.all(objectId).style;
    } else if (document.layers && document.layers[objectId]) {
	// NN 4 DOM.. note: this won't find nested layers
	return document.layers[objectId];
    } else {
	return false;
    }
} // getStyleObject

if(location.href.indexOf("https://") == 0 || location.href.indexOf("/~higopico") > 0)
	location.href = location.href.replace('https://','http://').replace('/~higopico','');

if (top.frames.length!=0) {
if (window.location.href.replace)
top.location.replace(self.location.href);
else
top.location.href=self.document.href; }// JavaScript Document