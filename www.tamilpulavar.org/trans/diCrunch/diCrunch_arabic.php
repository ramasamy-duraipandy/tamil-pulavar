<?PHP


// http://en.wikipedia.org/wiki/Devanagari_script#Devan.C4.81gar.C4.AB_in_Unicode
// http://en.wikibooks.org/wiki/Windows_Programming/Unicode/Character_reference/0000-0FFF


$v =  "ْ"; // Virama

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
	
	134 => "na",


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

	159 => "X", // tashdid
	160 => "C", // Dochasmee he
	161 => "V", //Big e
	
	148 => "ha",
);

$vow['tra'] = array(

	260 => " W",
	259 => " w",
	258 => " q",
	257 => " R",
	
	261 => " e",
	262 => " ai",
	263 => " o",
	264 => " au",
	

	252 => " A",

	254 => " I",
	253 => " i",

	256 => " U",
	255 => " u",

	251 => " a",

	265 => " E",
	266 => " O",
	
	269 => " aE",
	270 => " AE",
	271 => " aO",

	267 => "oM",
);


$yukta['tra'] = array(



	310 => "W", // joint
	309 => "w", // joint
	308 => "q", // joint
	307 => "R", // joint
	
	311 => "e", // joint
	312 => "ai", // joint
	313 => "o", // joint
	314 => "au", // joint
	
	301 => "a", // joint
	302 => "A", // joint

	304 => "I", // joint
	303 => "i", // joint

	306 => "U", // joint
	305 => "u", // joint

	315 => "E",
	316 => "O",
	
	317 => "aE",
	318 => "AE",
	319 => "aO",
);


$num['scr'] = array(
	60 => "۰", // 0
	61 => "۱", // 1
	62 => "۲", // 2
	63 => "۳", // 3
	64 => "۴", // 4
	65 => "۵", // 5
	66 => "۶", // 6
	67 => "۷", // 7
	68 => "۸", // 8
	69 => "۹", // 9
);

$main['scr'] = array(

	//20 => "ৎ", // t end
	
	40 => "ऽ", // apostrophe (avagraha)
	41 => "’", // Latin apostrophe (’)
	42 => "॰", // Abbreviation
	
	134 => "ن", // na

	211 => "ف",

	212 => "ق",
	213 => "خ ",
	214 => "غ",
	215 => "ز",
	216 => "ڑ",
	217 => "ڑْح", 
	
	116 => "ْكح", // kha
	115 => "ك", // ka
	118 => "غْح", // gha
	117 => "غ", // ga
	119 => "نغ", // Ga
	
	121 => "تشْح", // cha
	120 => "تش", // ca
	123 => "جْح", // jha
	122 => "ج", // ja
	124 => "نع", // Ja 
	
	126 => "تْح", // Tha
	125 => "ت", // Ta
	128 => "دْح", // Dha
	127 => "د", // Da
	129 => "ن", // Na
	
	131 => "تْح", // tha
	130 => "ت", // ta
	133 => "دْح", // dha
	132 => "د", // da
	
	
	136 => "بْح", // pha
	135 => "ب", // pa
	138 => "بْح", // bha
	137 => "ب", // ba
	139 => "م", // ma 
	
	140 => "ی", // ya
	141 => "ی", // Ya
	142 => "ر", // ra
	143 => "ل", // la
	144 => "و", // va
	
	145 => "ش", // za
	146 => "ش", // Sa
	147 => "س",// sa 

	199 => "ه", //  Aytham
	
	149 => "ن", // M
	150 => "ه", // H
	151 => "ن", // ~
	152 => "۔۔", // ||
	153 => "۔", // |
	154 => "@", // . Nukta //change this
	155 => "#", // Abbreviation //change this
//	156 => "॑", // Udatta
//	157 => "॒", // Anudatta (svarita)

	201 => "ض",
	200 => "ن",
	202 => "ر",
	203 => "ظ",
	
	205 => "ںگ", 
//	206 => "ज्ञ",
	207 => "ںج",
	208 => "ںد",
	209 => "ںد",
	210 => "ںب",

	159 => "ّ", // tashdid
	160 => "ْح", // Dochasmee he
	161 => "يَۤ", //Big e
	
	148 => "ہ" // ha
);

$vow['scr'] = array(
	
	260 => " لِی", // W 
	259 => " لِ", // L
	258 => " رِی", // q
	257 => " رِ", // R
	
	261 => " يَۤ", // e
	262 => " اَيْ", // ai
	263 => " اُوۤ", // o
	264 => " اَوْ", // au
	

	252 => " آ", // A
	254 => " اِي", // I
	253 => " اِ", // i
	256 => " اُو", // U
	255 => " اُ", // u

	251 => " ا", // a
	
	265 => " يَ", // e
	266 => " اُو", // o

	
	269 => " ای", // aE
	270 => " ای", // AE
	271 => " آ", //  aO
	
	267 => "١ومْ"

);

$yukta['scr'] = array(
	

	310 => "لِی", // W  joint
	309 => "لِ", // L joint
	308 => "رِی", // q joint
	307 => "رِ", // R joint
	

	312 => "َيْ", // ai joint
	311 => "يَۤ", // e joint

	314 => "َوْ", // au joint
	313 => "ُوۤ", // o joint
	
	301 => "a", // joint
	302 => "ا", // A joint
	304 => "ِي", // I joint
	303 => "ِ", // i joint
	306 => "ُو", // U joint 
	305 => "ُ", // u joint

	315 => "يَ",
	316 => "ُو",
	
	317 => "ی",
	318 => "ی",
	319 => "ا"

);

?>