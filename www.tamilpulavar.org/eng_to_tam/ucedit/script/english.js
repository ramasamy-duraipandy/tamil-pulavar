/*  Gopi's Unicode Converters Version 3.0
    Copyright (C) 2008 Gopalakrishnan (Gopi) http://www.higopi.com

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.

    Further to the terms mentioned you should leave this copyright notice
    intact, stating me as the original author.
*/
isChanged = false;
var D = "\u200B";
S2 = "\u00B2";
S3 = "\u00B3";
S4 = "\u2074";
SQ = "\'";
//Chbin Start
tacb = ta['k'].substring(1,2);
tecb = te['k'].substring(1,2);
macb = ma['k'].substring(1,2);
orcb = or['k'].substring(1,2);
hicb = hi['k'].substring(1,2);
pucb = pu['k'].substring(1,2);
kacb = ka['k'].substring(1,2);
gucb = gu['k'].substring(1,2);
becb = be['k'].substring(1,2);
//Chbin End


// Missing codes Start
//Tamil
ta['\u0B95\u0BCD'+ta['h']] = "\u0B95\u0BCD"+S2 //kh
ta['\u0B95\u0BCD\u0BB9(.)'] = "\u0B95$1"+S2 //kh
ta['g'] = "\u0B95\u0BCD"+S3
ta['\u0B95\u0BCD'+S3+ta['h']] = "\u0B95\u0BCD"+S4 //gh
ta['\u0B95\u0BCD'+S3+'\u0BB9(.)'] = "\u0B95$1"+S4 //gh
ta['\u0B9A\u0BCD'+ta['h']] = "\u0B9A\u0BCD"+S2 //ch
ta['\u0B9A\u0BCD\u0BB9(.)'] = "\u0B9A$1"+S2 //ch
ta['\u0B9C\u0BCD'+ta['h']] =  "\u0B9C\u0BCD"+S2 //jh
ta['\u0B9C\u0BCD\u0BB9(.)'] =  "\u0B9C$1"+S2 //jh
ta['T'] = "\u0B9F\u0BCD"
ta['\u0B9F\u0BCD'+ta['h']] = "\u0B9F\u0BCD"+S2 //Th
ta['\u0B9F\u0BCD\u0BB9(.)'] = "\u0B9F$1"+S2 //Th
ta['D'] = "\u0B9F\u0BCD"+S3
ta['\u0B9F\u0BCD'+S3+ta['h']] = "\u0B9F\u0BCD"+S4 //Dh
ta['\u0B9F\u0BCD'+S3+'\u0BB9(.)'] = "\u0B9F$1"+S4 //Dh
ta['t'] = "\u0BA4\u0BCD"
ta['\u0BA4\u0BCD'+ta['h']] = "\u0BA4\u0BCD"+S2 // th
ta['\u0BA4\u0BCD\u0BB9(.)'] = "\u0BA4$1"+S2 // th
ta['d'] = "\u0BA4\u0BCD"+S3 //d
ta['\u0BA4\u0BCD'+S3+ta['h']] = "\u0BA4\u0BCD"+S4 //dh
ta['\u0BA4\u0BCD'+S3+'\u0BB9(.)'] = "\u0BA4$1"+S4 //dh
ta['\u0BAA\u0BCD'+ta['h']] = "\u0BAA\u0BCD"+S2 //ph
ta['\u0BAA\u0BCD\u0BB9(.)'] = "\u0BAA$1"+S2 //ph
ta['b'] = "\u0BAA\u0BCD"+S3
ta['\u0BAA\u0BCD'+S3+ta['h']] = "\u0BAA\u0BCD"+S4 //bh
ta['\u0BAA\u0BCD'+S3+'\u0BB9(.)'] = "\u0BAA$1"+S4 //bh
ta['s'] = "\u0B9A\u0BCD"+SQ //s
ta['\u0B9A\u0BCD'+SQ+ta['h']] = "\u0BB7\u0BCD" //sh
getTaVow(S2)
getTaVow(S3)
getTaVow(S4)
getTaVow(SQ)
ta['k'+S2] = "kh";
ta['k'+S3] = "g";
ta['k'+S4] = "gh";
ta['c'+S2] = "ch";
ta['c'+S3] = "j";
ta['c'+S4] = "jh";
ta['T'+S2] = "Th";
ta['T'+S3] = "D";
ta['T'+S4] = "Dh";
ta['t'+S2] = "th";
ta['t'+S3] = "d";
ta['t'+S4] = "dh";
ta['p'+S2] = "ph";
ta['p'+S3] = "b";
ta['p'+S4] = "bh";
//redefine h for correct order of conversion
ta['h'] = "\u0BB9\u0BCD";

// Missing codes End

var en = new Array(); //tamil,telugu,malayalam,oriya,hindi,punjabi,kannada,gujarathi,bengali

en["sha"] = getEq('sha');
en["za"] = getEq('za');
en["va"] = getEq('va');

en["ka"] = getEq('ka');
en["kha"] = getEq('kha');
en["ga"] = getEq('ga');
en["gha"] = getEq('gha');
en["nga"] = getEq('nga');
en["ca"] = getEq('ca');
en["cha"] = getEq('cha');
en["ja"] = getEq('ja');
en["jha"] = getEq('jha');
en["nja"] = getEq('nja');
en["Ta"] = getEq('Ta');
en["Tha"] = getEq('Tha');
en["Da"] = getEq('Da');
en["Dha"] = getEq('Dha');
en["Na"] = getEq('Na');
en["ta"] = getEq('ta');
en["tha"] = getEq('tha');
en["da"] = getEq('da');
en["dha"] = getEq('dha');
en["na"] = getEq('na');
en["pa"] = getEq('pa');
en["pha"] = getEq('pha');
en["ba"] = getEq('ba');
en["bha"] = getEq('bha');
en["ma"] = getEq('ma');
en["ya"] = getEq('ya');
en["ra"] = getEq('ra');
en["la"] = getEq('la');
en["La"] = getEq('La');
en["Ra"] = getEq('Ra');
en["sa"] = getEq('sa');
en["Sa"] = getEq('Sa');
en["ha"] = getEq('ha');
en["q"] = getEq('q');

en[D] = new Array("a"+tacb,"a"+tecb,"a"+macb,"a"+orcb,"a"+hicb,"a"+pucb,
					"a"+kacb,"a"+gucb,"a"+becb);
en["a"] = getVow('a');
en["A"] = getVow('A');
en["i"] = getVow('i');
en["I"] = getVow('I');
en["u"] = getVow('u');
en["U"] = getVow('U');
en["Rr"] = new Array("\u0C0B","a\u0C43","\u0D0B","a\u0D43","\u0B0B", "a\u0B43",
						"\u090B","a\0943","\u0C8B","\u0CC3","\u098B","a\u09C3");
en["Ll"] = new Array("\u0C0C","\u0D0C","\u0B0C","\u090C","\u0A5C","\u0C8C","\u098C");
en["e"] = getVow('e');
en["E"] = getVow('E');
en["ai"] = getVow('ai');
en["o"] = getVow('o');
en["O"] = getVow('O');
en["au"] = getVow('au');
en["\\-m"] = getVow('-m');
en["\\-n"] = getVow('-n');
en["\\:"] = getVow(':');

en["\\-1000"] = getEq('-1000');
en["\\-100"] = getEq('-100');
en["\\-10"] = getEq('-10');
en["\\-1"] = getEq('-1');
en["\\-2"] = getEq('-2');
en["\\-3"] = getEq('-3');
en["\\-4"] = getEq('-4');
en["\\-5"] = getEq('-5');
en["\\-6"] = getEq('-6');
en["\\-7"] = getEq('-7');
en["\\-8"] = getEq('-8');
en["\\-9"] = getEq('-9');
en["\\-0"] = getEq('-0');

function getEq(char)
{
	taeq = "";teeq = "";maeq = "";oreq = "";hieq = "";pueq = "";kaeq = "";gueq = "";beeq = "";
	for(i=0;i<char.length;i++)
	{
		if(i == 0 && char.substring(0,1) == D && char.length != 1 )
		{
			taeq = tacb; teeq = tecb; maeq = macb; oreq = orcb; hieq = hicb;
			pueq = pucb; kaeq = kacb; gueq = gucb; beeq = becb;
		}
		else
		{
			pc = char.substring(i,i+1);
			taeq = (typeof ta[taeq+pc] == "undefined") ?  taeq+pc : ta[taeq+pc];
			teeq = (typeof te[teeq+pc] == "undefined") ?  teeq+pc : te[teeq+pc];
			maeq = (typeof ma[maeq+pc] == "undefined") ?  maeq+pc : ma[maeq+pc];
			oreq = (typeof or[oreq+pc] == "undefined") ?  oreq+pc : or[oreq+pc];
			hieq = (typeof hi[hieq+pc] == "undefined") ?  hieq+pc : hi[hieq+pc];
			pueq = (typeof pu[pueq+pc] == "undefined") ?  pueq+pc : pu[pueq+pc];
			kaeq = (typeof ka[kaeq+pc] == "undefined") ?  kaeq+pc : ka[kaeq+pc];
			gueq = (typeof gu[gueq+pc] == "undefined") ?  gueq+pc : gu[gueq+pc];
			beeq = (typeof be[beeq+pc] == "undefined") ?  beeq+pc : be[beeq+pc];
		}
	}
	taeq = taeq.replace("a","").replace(tacb,"");
	teeq = teeq.replace("a","").replace(tecb,"");
	maeq = maeq.replace("a","").replace(macb,"");
	oreq = oreq.replace("a","").replace(orcb,"");
	hieq = hieq.replace("a","").replace(hicb,"");
	pueq = pueq.replace("a","").replace(pucb,"");
	kaeq = kaeq.replace("a","").replace(kacb,"");
	gueq = gueq.replace("a","").replace(gucb,"");
	beeq = beeq.replace("a","").replace(becb,"");
	return new Array(taeq,teeq,maeq,oreq,hieq,pueq,kaeq,gueq,beeq);
}

function getVow(char)
{
	retStr = getEq(char).join(",") + ",a" + getEq(D+char).join(",a");
	return retStr.split(",");
}

function getEn(txt)
{
	for(i in en)
	{
		for(j=0;j<en[i].length;j++)
		{
			rexp = new RegExp(en[i][j],"g");
			txt = txt.replace(rexp,i);
		}
	}
	txt = getTaEqEn(txt, S2);
	txt = getTaEqEn(txt, S3);
	txt = getTaEqEn(txt, S4);
	return txt;
}

function getTaEqEn(txt, char)
{
	rexp = new RegExp("(.)(.)"+char)
	mch = txt.match(rexp)
	if(mch != null)
		txt = txt.replace(rexp,ta[mch[1]+char]+mch[2]);
	return txt;
}

function getTaVow(char)
{
	ta['\u0BCD'+char+'\u0B85'] = D+char
	ta['\u0BCD'+char+'\u0B86'] = "\u0BBE"+char
	ta['\u0BCD'+char+'\u0B87'] = "\u0BBF"+char
	ta['\u0BCD'+char+'\u0B88'] = "\u0BC0"+char
	ta['\u0BCD'+char+'\u0B89'] = "\u0BC1"+char
	ta['\u0BCD'+char+'\u0B8A'] = "\u0BC2"+char
	ta['\u0BCD'+char+'\u0B8E'] = "\u0BC6"+char
	ta['\u0BCD'+char+'\u0B8F'] = "\u0BC7"+char
	ta['\u0BCD'+char+'\u0B90'] = "\u0BC8"+char
	ta['\u0BCD'+char+'\u0B92'] = "\u0BCA"+char
	ta['\u0BCD'+char+'\u0B93'] = "\u0BCB"+char
	ta['\u0BCD'+char+'\u0B94'] = "\u0BCC"+char

	ta[D+char+ta['a']] = "\u0BBE"+char
	ta[D+char+ta['i']] = "\u0BC8"+char
	ta[D+char+ta['u']] = "\u0BCC"+char
	ta['\u0BBF'+char+ta['i']] = "\u0BC0"+char
	ta['\u0BC1'+char+ta['u']] = "\u0BC2"+char
	ta['\u0BC6'+char+ta['e']] = "\u0BC7"+char
	ta['\u0BCA'+char+ta['o']] = "\u0BCB"+char
}

function switchLang(val)
{
	lang = val
	if(lang == "english")
		kbmode = "english";
	else
		kbmode = "roman";
	document.post.convall.checked = false;
	isChanged = false;
	myimg.src = "images/"+lang+".png";
}

function convertAll(txtobj,selobj,convobj)
{
	if(!isChanged)
	{
		selectedLanguage = selobj.options[selobj.selectedIndex].value
		if(confirm("Once converted, you cannot revert back the existing text.\nAre you sure"
				+ " to convert all the existing text to " + selectedLanguage.toUpperCase() + "?")
	  	)
		{
			kbmode = "roman";
			switchLang("english")
	 		txtobj.value = getEn(txtobj.value)
	 		if(selectedLanguage != "english")
	 		{
		 		switchLang(selectedLanguage)
				txtobj.value = getLang("",txtobj.value,sPos)
			}
	 		convobj.checked = true;
	 		isChanged = true;
		}
		else
			convobj.checked = false;
	}
	else
		convobj.checked = true;
}