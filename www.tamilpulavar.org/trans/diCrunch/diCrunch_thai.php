﻿<?PHP


// http://en.wikipedia.org/wiki/Devanagari_script#Devan.C4.81gar.C4.AB_in_Unicode
// http://en.wikibooks.org/wiki/Windows_Programming/Unicode/Character_reference/0000-0FFF

$v = "ฺ"; // Virama

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

	201 => "La",

	200 => "n2a",
	202 => "r2a",
	203 => "Za",

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

	199 => "K",
	
	149 => "M",
	150 => "H",
	151 => "~",
	152 => "||", // ||
	153 => "|", // |
	154 => "Q", // Nukta
	155 => "@", // Abbreviation
//	156 => ":", // Udatta
//	157 => ";", // Anudatta (svarita)

	158 => "Ta", // Dual Ta
	

	
	148 => "ha",
);

$vow['tra'] = array(

	269 => " aE",
	270 => " AE",
	271 => " aO",

	260 => " W",
	259 => " w",
	258 => " q",
	257 => " R",
	
	264 => " au",
	261 => " e",
	262 => " ai",
	263 => " o",
	
	252 => " A",
	253 => " i",
	254 => " I",
	255 => " u",
	256 => " U",
	251 => " a",

	265 => " E",
	266 => " O",

	267 => "oM",
);


$yukta['tra'] = array(

	317 => "aE",
	318 => "AE",
	319 => "aO",

	310 => "W", // joint
	309 => "w", // joint
	308 => "q", // joint
	307 => "R", // joint
	
	314 => "au", // joint
	311 => "e", // joint
	312 => "ai", // joint
	313 => "o", // joint
	
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
	60 => "๐", // 0
	61 => "๑", // 1
	62 => "๒", // 2
	63 => "๓", // 3
	64 => "๔", // 4
	65 => "๕", // 5
	66 => "๖", // 6
	67 => "๗", // 7
	68 => "๘", // 8
	69 => "๙", // 9
);

$main['scr'] = array(

	//20 => "ৎ", // t end
	
	40 => "'", // apostrophe (avagraha)
	41 => "’", // Latin apostrophe (’)
	42 => "॰", // Abbreviation

	201 => "ฬ",

	200 => "‌น",
	202 => "‌ร",
	203 => "‌ฬ",

	205 => "ํ‌‌​ค", 
//	206 => "ज्ञ",
	207 => "ํ‌ช‌",
	208 => "ํ‌ฑ‌",
	209 => "ํ‌‌ท‌",
	210 => "ํพ‌",
	211 => "ผ‌",

	212 => "ก‌",
	213 => "ข‌",
	214 => "ค‌",
	215 => "ช‌",
	216 => "ฑ‌",
	217 => "ฒ‌",
	
	116 => "ข", // kha
	115 => "ก", // ka
	118 => "ฆ", // gha
	117 => "ค", // ga
	119 => "ง", // Ga
	
	121 => "ฉ", // cha
	120 => "จ", // ca
	123 => "ฌ", // jha
	122 => "ช", // ja
	124 => "ญ", // Ja
	
	126 => "ฐ", // Tha 
	125 => "ฏ", // Ta
	128 => "ฒ", // Dha
	127 => "ฑ", // Da
	129 => "ณ", // Na
	
	131 => "ถ", // tha
	130 => "ต", // ta
	133 => "ธ", // dha
	132 => "ท", // da
	134 => "น", // na
	
	136 => "ผ", // pha
	135 => "ป", // pa
	138 => "ภ", // bha
	137 => "พ", // ba
	139 => "ม", // ma
	
	140 => "ย", // ya
	141 => "ย", // Ya
	142 => "ร", // ra
	143 => "ล", // la
	144 => "ว", // va
	
	145 => "ศ", // za
	146 => "ษ", // Sa
	147 => "ส", // sa


	199 => "‌:‌",	
	
	149 => "ํ", // M
	150 => ":", // H
	151 => "ํ", // ~
	152 => "๚", // ||
	153 => "ฯ", // |
	154 => "×", // . Nukta
	155 => "×", // Abbreviation
//	156 => "॑", // Udatta
//	157 => "॒", // Anudatta (svarita)

	158 => "ฎ", // Ta
	
	148 => "ห", // ha
);

$vow['scr'] = array(

	269 => " เอ‌",	
	270 => " เอ‌",
	271 => " อา‌",
	
	260 => " ฦา", // W 
	259 => " ฦ", // L
	258 => " ฤา", // q
	257 => " ฤ", // R
	
	264 => " เอา", // au
	261 => " เอ", // e
	262 => " ไอ", // ai
	263 => " โอ", // o
	
	252 => " อา", // A
	253 => " อิ", // i
	254 => " อี", // I
	255 => " อุ", // u
	256 => " อู", // U
	251 => " อ", // a
	
	265 => " เอ‌",
	266 => " โอ‌",
	
	267 => "โอํ",

);

$yukta['scr'] = array(

	317 => "เ‌",
	318 => "เ‌",
	319 => "า‌",
	
	310 => "ฺฦา", // W  joint
	309 => "ฺฦ", // L joint
	308 => "ฺฤา", // q joint
	307 => "ฺฤ", // R joint
	
	314 => "เา", // au joint
	311 => "เ", // e joint
	312 => "ไ", // ai joint
	313 => "โ", // o joint
	
	301 => "&#8205;", // a joint
	302 => "า", // A joint
	303 => "ิ", // i joint
	304 => "ี", // I joint 
	305 => "ุ", // u joint
	306 => "ู", // U joint

	315 => "เ‌",
	316 => "โ‌",
);

?>