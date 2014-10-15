<?PHP


// http://en.wikipedia.org/wiki/Devanagari_script#Devan.C4.81gar.C4.AB_in_Unicode
// http://en.wikibooks.org/wiki/Windows_Programming/Unicode/Character_reference/0000-0FFF


$v = "্"; // Virama

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
	
	141 => "Ya",
	140 => "ya",
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

	
	148 => "ha",
);

$vow['tra'] = array(

	269 => " aE",
	270 => " AE",
	271 => " aO",
	
	265 => " E",
	266 => " O",

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



	267 => "oM",
);


$yukta['tra'] = array(

	317 => "aE",
	318 => "AE",
	319 => "aO",
	
	
	315 => "E",
	316 => "O",

	307 => "R", // joint
	308 => "q", // joint
	309 => "w", // joint
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

);


$num['scr'] = array(
	60 => "০", // 0
	61 => "১", // 1
	62 => "২", // 2
	63 => "৩", // 3
	64 => "৪", // 4
	65 => "৫", // 5
	66 => "৬", // 6
	67 => "৭", // 7
	68 => "৮", // 8
	69 => "৯", // 9
);

$main['scr'] = array(

	//20 => "ৎ", // t end
	
	40 => "ঽ", // apostrophe (avagraha)
	41 => "’", // Latin apostrophe (’)
	42 => "॰", // Abbreviation

	200 => "ন়",
	202 => "র়",
	203 => "ৰ়",

	205 => "ঁ‌ˆগ",
//	206 => "জ্ঞ",
	207 => "ঁ‌ˆজ",
	208 => "ঁ‌ˆড",
	209 => "ঁˆ‌দ",
	210 => "ঁ‌ˆব",
	211 => "ফ়",

	212 => "ক়", 
	213 => "খ়",
	214 => "গ়",
	215 => "জ়",
	216 => "ড়",
	217 => "ঢ়",
	
	116 => "খ", // kha
	115 => "ক", // ka
	118 => "ঘ", // gha
	117 => "গ", // ga
	119 => "ঙ", // Ga
	
	121 => "ছ", // cha
	120 => "চ", // ca
	123 => "ঝ", // jha
	122 => "জ", // ja
	124 => "ঞ", // Ja
	
	126 => "ঠ", // Tha
	125 => "ট", // Ta
	128 => "ঢ", // Dha
	127 => "ড", // Da
	129 => "ণ", // Na
	
	131 => "থ", // tha
	130 => "ত", // ta
	133 => "ধ", // dha
	132 => "দ", // da
	134 => "ন", // na
	
	136 => "ফ", // pha
	135 => "প", // pa
	138 => "ভ", // bha
	137 => "ব", // ba
	139 => "ম", // ma
	
	141 => "য়", // Ya
	140 => "য", // ya
	142 => "র", // ra
	143 => "ল", // la
	144 => "ৱ", // va
	
	145 => "শ", // za
	146 => "ষ", // Sa
	147 => "স", // sa

	199 => "ঃʼ",
	
	149 => "ং", // M
	150 => "ঃ", // H
	151 => "ঁ", // ~
	152 => "॥", // ||
	153 => "।", // |
	154 => "়", // . Nukta
	155 => "॰", // Abbreviation
//	156 => "॑", // Udatta
//	157 => "॒", // Anudatta (svarita)
	

	201 => "ৰ",


	
	148 => "হ", // ha
);

$vow['scr'] = array(
	
	269 => " এʼ",
	270 => " এˇ",
	271 => " আʼ",
	
	265 => " এ",
	266 => " ও",

	257 => " ঋ", // R
	258 => " ৠ", // q
	259 => " ঌ", // L
	260 => " ৡ", // W 
	
	261 => " এ", // e
	262 => " ঐ", // ai
	263 => " ও", // o
	264 => " ঔ", // au
	
	251 => " অ", // a
	252 => " আ", // A
	253 => " ই", // i
	254 => " ঈ", // I
	255 => " উ", // u
	256 => " ঊ", // U
	
	267 => "ওং",	
);

$yukta['scr'] = array(
	
	317 => "েʼ",
	318 => "েˇ",
	319 => "াʼ", 
	
	315 => "ে",
	316 => "ো",

	307 => "ৃ", // R joint
	308 => "ৄ", // q joint
	309 => "ৢ", // L joint
	310 => "ৣ", // W  joint
	
	311 => "ে", // e joint
	312 => "ৈ", // ai joint
	313 => "ো", // o joint
	314 => "ৌ", // au joint
	
	301 => "&#8205;", // a joint
	302 => "া", // A joint
	303 => "ি", // i joint
	304 => "ী", // I joint
	305 => "ু", // u joint
	306 => "ূ", // U joint


);

?>