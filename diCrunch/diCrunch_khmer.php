<?PHP


// http://en.wikipedia.org/wiki/Devanagari_script#Devan.C4.81gar.C4.AB_in_Unicode
// http://en.wikibooks.org/wiki/Windows_Programming/Unicode/Character_reference/0000-0FFF


$v = "្"; // Virama

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

    261 => " e",
    262 => " ai",
    263 => " o",
    264 => " au",

    252 => " A",
    251 => " a",
    253 => " i",
    254 => " I",
    255 => " u",
    256 => " U",

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
    60 => "០", // 0
    61 => "១", // 1
    62 => "២", // 2
    63 => "៣", // 3
    64 => "៤", // 4
    65 => "៥", // 5
    66 => "៦", // 6
    67 => "៧", // 7
    68 => "៨", // 8
    69 => "៩", // 9
);

$main['scr'] = array(

    //20 => "ৎ", // t end

    40 => "ៜ", // apostrophe (avagraha)
    41 => "’", // Latin apostrophe (’)
    42 => "×", // Abbreviation

    201 => "ឡ",

    200 => "ន‌",
    202 => "រ‌",
    203 => "ឡ‌",

    205 => "ំ‌‌គ",
    //	206 => "ज्ञ",
    207 => "ំ‌ជ‌",
    208 => "ំ‌ឌ‌",
    209 => "ំ‌‌ទ",
    210 => "ំ‌‌ព",
    211 => "‌‌ផ",

    212 => "‌ក‌",
    213 => "‌ខ‌",
    214 => "‌គ‌",
    215 => "‌ជ‌",
    216 => "‌ឌ‌",
    217 => "‌ឍ‌",

    116 => "ខ", // kha
    115 => "ក", // ka
    118 => "ឃ", // gha
    117 => "គ", // ga
    119 => "ង", // Ga

    121 => "ឆ", // cha
    120 => "ច", // ca
    123 => "ឈ", // jha
    122 => "ជ", // ja
    124 => "ញ", // Ja

    126 => "ឋ", // Tha
    125 => "ដ", // Ta
    128 => "ឍ", // Dha
    127 => "ឌ", // Da
    129 => "ណ", // Na

    131 => "ថ", // tha
    130 => "ត", // ta
    133 => "ធ", // dha
    132 => "ទ", // da
    134 => "ន", // na

    136 => "ផ", // pha
    135 => "ប", // pa
    138 => "ភ", // bha
    137 => "ព", // ba
    139 => "ម", // ma

    140 => "យ", // ya
    141 => "យ", // Ya
    142 => "រ", // ra
    143 => "ល", // la
    144 => "វ", // va

    145 => "ឝ", // za
    146 => "ឞ", // Sa
    147 => "ស", // sa


    199 => "‌ះ‌",

    149 => "ំ", // M
    150 => "ះ", // H
    151 => "ំ", // ~
    152 => "៕", // ||
    153 => "។", // |
    154 => "×", // . Nukta
    155 => "×", // Abbreviation
    //	156 => "॑", // Udatta
    //	157 => "॒", // Anudatta (svarita)

    148 => "ហ", // ha
);

$vow['scr'] = array(

    269 => " ឯ‌‌",
    270 => " ឯ‌‌",
    271 => " អា‌‌",

    260 => " ឮ", // W
    259 => " ឭ", // L
    258 => " ឬ", // q
    257 => " ឫ", // R

    261 => " ឯ", // e
    262 => " ឰ", // ai
    263 => " ឱ", // o
    264 => " ឳ", // au

    252 => " អា", // A
    251 => " អ", // a
    253 => " ឥ", // i
    254 => " ឦ", // I
    255 => " ឧ", // u
    256 => " ឩ", // U

    265 => " ឯ‌",
    266 => " ឱ‌",

    267 => "ឱំ",

);

$yukta['scr'] = array(

    317 => "‌េ‌",
    318 => "‌េ‌‌",
    319 => "‌ា‌‌‌",

    310 => "្ឮ", // W  joint
    309 => "្ឭ", // L joint
    308 => "្ឬ", // q joint
    307 => "្ឫ", // R joint

    311 => "េ", // e joint
    312 => "ៃ", // ai joint
    313 => "ោ", // o joint
    314 => "ៅ", // au joint

    301 => "&#8205;", // a joint
    302 => "ា", // A joint
    303 => "ិ", // i joint
    304 => "ី", // I joint
    305 => "ុ", // u joint
    306 => "ូ", // U joint

    315 => "‌េ‌",
    316 => "‌ោ‌",

);
