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

	
		 if (typeof lang == "undefined")
		 	lang = "tamil";

		 twop = ""; if (lang != 'tamil') twop = "Inscript";

		txt += '<div id="Menu_content" align="center">'
			+''
			+'<input type=radio name=keybrd value=roman onclick="toggleKBMode(event,this)" checked> &nbsp;Phonetic &nbsp; ';
		if(lang == 'tamil' && location.href.indexOf('Multi.html') == -1)
			txt += '&nbsp;<input type=radio name=keybrd value=tamil99 onclick="toggleKBMode(event,this)"> '
				+ 'Tamil 99 Keyboard &nbsp; ';
		txt += '&nbsp;<input type=radio name=keybrd value=typewriter onclick="toggleKBMode(event,this)"> ';
		if(location.href.indexOf('Multi.html') == -1)
			txt += lang.substring(0,1).toUpperCase() + lang.substring(1,lang.length) + ' ' +twop + ' ';
		txt += 'Typewritter<br>';
	txt += '</div>'
		;

	txt += ''
		;

	txt += '';

		if(navigator.language){mylanguage=navigator.language;}
		else if(navigator.browserLanguage){mylanguage=navigator.browserLanguage;}

		if((mylanguage.toLowerCase()=='en-us') || (mylanguage.toLowerCase()=='en-ca'))
			txt	+= '';
		else
			txt += '';

	txt += '';

  	document.write(txt);

	
}

