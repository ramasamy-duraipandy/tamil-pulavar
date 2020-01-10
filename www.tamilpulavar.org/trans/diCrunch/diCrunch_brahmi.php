﻿<?PHP


// http://en.wikipedia.org/wiki/Devanagari_script#Devan.C4.81gar.C4.AB_in_Unicode
// http://en.wikibooks.org/wiki/Windows_Programming/Unicode/Character_reference/0000-0FFF


$v = "𑀼"; // Virama

/* Main arrays */

$num['tra'] = array(
	60 => "0",
	61 => "1",
	62 => "2",
	63 => "3",
	64 => "4",
	65 => "5",
	66 => "6",
	67 => "7",
	68 => "8",
	69 => "9",
);

$main['tra'] = array(

	//20 => "t ", // t end
		
	40 => "'", // apostrophe (avagraha)
	41 => "`", // Latin apostrophe (’)
	42 => "#", // Abbreviation

	116 => "kha",
	115 => "ka",
	118 => "gha",
	117 => "ga",
	119 => "Ga",

	121 => "cha",
	120 => "ca",
	123 => "jha",
	122 => "ja",
	124 => "Ja",

	126 => "Tha",
	125 => "Ta",
	128 => "Dha",
	127 => "Da",
	129 => "Na",

	131 => "tha",
	130 => "ta",
	133 => "dha",
	132 => "da",
	134 => "na",

	136 => "pha",
	135 => "pa",
	138 => "bha",
	137 => "ba",
	139 => "ma",
	
	140 => "ya",
	141 => "Ya",
	142 => "ra",
	143 => "la",
	144 => "va",
	
	145 => "za",
	146 => "Sa",
	147 => "sa",
	
	149 => "M",
	150 => "H",
	151 => "~",
	152 => "||", // ||
	153 => "|", // |
	154 => "Q", // Nukta
	155 => "@", // Abbreviation
//	156 => ":", // Udatta
//	157 => ";", // Anudatta (svarita)

	205 => "*ga",
//	206 => "jJa",
	207 => "*ja",
	208 => "*Da",
	209 => "*da",
	210 => "*ba",
	211 => "fa",

	212 => "qha", 
	213 => "khha",
	214 => "ghha",
	215 => "xa",
	216 => "Dhha",
	217 => "rhha",
	
	201 => "La",
	200 => "n2a",
	202 => "r2a",
	203 => "Za",
	
	148 => "ha",
);

$vow['tra'] = array(

	269 => " aE",
	270 => " AE",
	271 => " aO",

	257 => " R",
	258 => " q",
	259 => " w",
	260 => " W",
	
	261 => " e",
	262 => " ai",
	263 => " o",
	264 => " au",
	
	251 => " a",
	252 => " A",
	253 => " i",
	254 => " I",
	255 => " u",
	256 => " U",

	265 => " E",
	266 => " O",

	267 => "oM",

	268 => "K",
);


$yukta['tra'] = array(

	317 => "aE",
	318 => "AE",
	318 => "aO",

	307 => "R", // joint
	308 => "q", // joint
	309 => "L", // joint
	310 => "W", // joint
	
	311 => "e", // joint
	312 => "ai", // joint
	313 => "o", // joint
	314 => "au", // joint
	
	301 => "a", // joint
	302 => "A", // joint
	303 => "i", // joint
	304 => "I", // joint
	305 => "u", // joint
	306 => "U", // joint

	315 => "E",
	316 => "O",
);


$num['scr'] = array(
	60 => "0", // 0
	61 => "1", // 1
	62 => "2", // 2
	63 => "3", // 3
	64 => "4", // 4
	65 => "5", // 5
	66 => "6", // 6
	67 => "7", // 7
	68 => "8", // 8
	69 => "9", // 9
);

$main['scr'] = array(

	//20 => "ৎ", // t end
	
	40 => "×", // apostrophe (avagraha)
	41 => "’", // Latin apostrophe (’)
	42 => "॰", // Abbreviation

	116 => "𑀍", // kha
	115 => "𑀌", // ka
	118 => "𑀏", // gha
	117 => "𑀎", // ga
	119 => "𑀐", // Ga
	
	121 => "𑀒", // cha
	120 => "𑀑", // ca
	123 => "𑀔", // jha
	122 => "𑀓", // ja
	124 => "𑀕", // Ja
	
	126 => "𑀗", // Tha
	125 => "𑀖", // Ta
	128 => "𑀙", // Dha
	127 => "𑀘", // Da
	129 => "𑀚", // Na
	
	131 => "𑀜", // tha
	130 => "𑀛", // ta
	133 => "𑀞", // dha
	132 => "𑀝", // da
	134 => "𑀟", // na
	
	136 => "𑀡", // pha
	135 => "𑀠", // pa
	138 => "𑀣", // bha
	137 => "𑀢", // ba
	139 => "𑀤", // ma
	
	140 => "𑀥", // ya
	141 => "𑀥", // Ya
	142 => "𑀦", // ra
	143 => "𑀧", // la
	144 => "𑀩", // va
	
	145 => "𑀬", // za
	146 => "𑀫", // Sa
	147 => "𑀭", // sa

	
	149 => "𑀀", // M
	150 => "×", // H
	151 => "𑀀", // ~
	152 => "×", // ||
	153 => "×", // |
	154 => "×", // . Nukta
	155 => "×", // Abbreviation
//	156 => "×", // Udatta
//	157 => "×", // Anudatta (svarita)

	205 => "𑀀𑀎",
//	206 => "×",
	207 => "𑀀𑀓",
	208 => "𑀀𑀘",
	209 => "𑀀𑀝",
	210 => "𑀀𑀢",
	211 => "𑀡",

	212 => "𑀌", 
	213 => "𑀍",
	214 => "𑀎",
	215 => "𑀓",
	216 => "𑀘",
	217 => "𑀙",
	
	201 => "𑀧",
	200 => "𑀟",
	202 => "𑀦",
	203 => "𑀧",
	
	148 => "𑀮", // ha
);

$vow['scr'] = array(

	269 => " ×",
	270 => " ×",
	271 => " ×",
	
	257 => " 𑀦𑀳", // R
	258 => " 𑀦𑀴", // q
	259 => " 𑀧𑀳", // L
	260 => " 𑀧𑀴", // W 
	
	261 => " 𑀇", // e
	262 => " 𑀈", // ai
	263 => " 𑀉", // o
	264 => " 𑀉", // au
	
	251 => " 𑀋", // a
	252 => " 𑀂", // A
	253 => " 𑀃", // i
	254 => " 𑀄", // I
	255 => " 𑀅", // u
	256 => " 𑀆", // U
	
	265 => " 𑀇",
	266 => " 𑀉",
	
	267 => "𑀉𑀀",

	268 => "×",
	
);

$yukta['scr'] = array(

	317 => "×",
	318 => "×",
	319 => "×",
	
	307 => "×", // R joint
	308 => "×", // q joint
	309 => "×", // L joint
	310 => "×", // W  joint
	
	311 => "𑀷", // e joint
	312 => "×", // ai joint
	313 => "𑀹", // o joint
	314 => "×", // au joint
	
	301 => "&#8205;", // a joint
	302 => "𑀲", // A joint
	303 => "𑀳", // i joint
	304 => "𑀴", // I joint
	305 => "𑀵", // u joint
	306 => "𑀶", // U joint

	315 => "𑀷",
	316 => "𑀲",
);

?>