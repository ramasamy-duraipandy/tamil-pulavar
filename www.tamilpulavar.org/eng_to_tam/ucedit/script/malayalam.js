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
var lang = "malayalam";
var chnbin = "\u0D4D";
var ugar = "\u0D41";
var uugar = "\u0D42";
myimg.src = "images/"+lang+".png";

var ma = new Array();
var matw = new Array();
//Typewritter
matw['\\!'] = "";
matw['\\@'] = "";
matw['\\#'] = "\u0D4D\u0D30";
matw['\\$'] = "";
matw['\\%'] = "";
matw['\\^'] = "";
matw['\\&'] = "\u0D15\u0D4D\u0D37";
matw['\\*'] = "";
matw['_'] = "\u0D03";
matw['\\+'] = "\u0D0B";
matw['\\='] = "\u0D43";
matw['q'] = "\u0D4C";
matw['w'] = "\u0D48";
matw['e'] = "\u0D3E";
matw['r'] = "\u0D40";
matw['t'] = "\u0D42";
matw['y'] = "\u0D2C";
matw['u'] = "\u0D39";
matw['i'] = "\u0D17";
matw['o'] = "\u0D26";
matw['p'] = "\u0D1C";
matw['\\['] = "\u0D21";
matw['\\]'] = "\u0D3C";
matw['Q'] = "\u0D14";
matw['W'] = "\u0D10";
matw['E'] = "\u0D06";
matw['R'] = "\u0D08";
matw['T'] = "\u0D0A";
matw['Y'] = "\u0D2D";
matw['U'] = "\u0D19";
matw['I'] = "\u0D18";
matw['O'] = "\u0D27";
matw['P'] = "\u0D1D";
matw['\\{'] = "\u0D22";
matw['\\}'] = "\u0D1E";

matw['a'] = "\u0D4B";
matw['s'] = "\u0D47";
matw['d'] = "\u0D4D";
matw['f'] = "\u0D3F";
matw['g'] = "\u0D41";
matw['h'] = "\u0D2A";
matw['j'] = "\u0D30";
matw['k'] = "\u0D15";
matw['l'] = "\u0D24";
matw[';'] = "\u0D1A";
matw['\\\''] = "\u0D1F";
matw['\\\\'] = "\u0D49";
matw['A'] = "\u0D13";
matw['S'] = "\u0D0F";
matw['D'] = "\u0D05";
matw['F'] = "\u0D07";
matw['G'] = "\u0D09";
matw['H'] = "\u0D2B";
matw['J'] = "\u0D31";
matw['K'] = "\u0D16";
matw['L'] = "\u0D25";
matw[':'] = "\u0D1B";
matw['\\"'] = "\u0D20";
matw['\\|'] = "\u0D11";

matw['z'] = "\u0D46";
matw['x'] = "\u0D02";
matw['c'] = "\u0D2E";
matw['v'] = "\u0D28";
matw['b'] = "\u0D35";
matw['n'] = "\u0D32";
matw['m'] = "\u0D38";
matw['/'] = "\u0D2F";
matw['Z'] = "\u0D0E";
matw['X'] = "";
matw['C'] = "\u0D23";
matw['V'] = "";
matw['B'] = "\u0D34";
matw['N'] = "\u0D33";
matw['M'] = "\u0D36";
matw['<'] = "\u0D37";
matw['>'] = "";
matw['\\?'] = "";
//Phonetic
ma['B'] = "b";
ma['C'] = "c";
ma['F'] = "ph";
ma['f'] = "ph";
ma['G'] = "g";
ma['J'] = "j";
ma['K'] = "k";
ma['M'] = "m";
ma['P'] = "p";
ma['Q'] = "q";
ma['V'] = "v";
ma['W'] = "v";
ma['w'] = "v";
ma['X'] = "x";
ma['Y'] = "y";
ma['Z'] = "z";
//Cons
ma['k'] = "\u0D15\u0D4D";
ma['c'] = "\u0D1A\u0D4D";
ma['T'] = "\u0D1F\u0D4D";
ma['D'] = "\u0D21\u0D4D";
ma['N'] = "\u0D23\u0D4D";
ma['t'] = "\u0D24\u0D4D";
ma['d'] = "\u0D26\u0D4D";
ma['n'] = "\u0D28\u0D4D";
ma['p'] = "\u0D2A\u0D4D";
ma['b'] = "\u0D2C\u0D4D";

ma['y'] = "\u0D2F\u0D4D";
ma['R'] = "\u0D31\u0D4D";
ma['L'] = "\u0D33\u0D4D";
ma['v'] = "\u0D35\u0D4D";
ma['z'] = "\u0D34\u0D4D";
ma['s'] = "\u0D38\u0D4D";
ma['S'] = "\u0D36\u0D4D";
ma['H'] = "\u0D39\u0D4D";
ma['x'] = "\u0D15\u0D4D\u0D36\u0D4D";

ma['\u200Dm'] = "\u0D02";
ma[':h'] = "\u0D03";
ma['m'] = "\u0D2E\u0D4D";

ma['\u0D15\u0D4Dh'] = "\u0D16\u0D4D";
ma['\u0D17\u0D4Dh'] = "\u0D18\u0D4D";
ma['\u0D28\u0D4Dg'] = "\u0D19\u0D4D";
ma['\u0D1A\u0D4Dh'] = "\u0D1B\u0D4D";
ma['\u0D1C\u0D4Dh'] = "\u0D1D\u0D4D";
ma['\u0D28\u0D4Dj'] = "\u0D1E\u0D4D";
ma['\u0D1F\u0D4Dh'] = "\u0D20\u0D4D";
ma['\u0D21\u0D4Dh'] = "\u0D22\u0D4D";
ma['\u0D24\u0D4Dh'] = "\u0D25\u0D4D";
ma['\u0D26\u0D4Dh'] = "\u0D27\u0D4D";
ma['\u0D2A\u0D4Dh'] = "\u0D2B\u0D4D";
ma['\u0D2C\u0D4Dh'] = "\u0D2D\u0D4D";
ma['\u0D38\u0D4Dh'] = "\u0D37\u0D4D";
ma['\u0D31\u0D4Dr'] = "\u0D0B";
ma['\u0D33\u0D4Dl'] = "\u0D0C";
ma['\u0D4D\u0D0B'] = "\u0D43";
ma['r'] = "\u0D30\u0D4D";
ma['l'] = "\u0D32\u0D4D";

ma['h'] = "\u0D39\u0D4D";
ma['g'] = "\u0D17\u0D4D";
ma['j'] = "\u0D1C\u0D4D";
//VowSml
ma['\u0D4Da'] = "\u200C";
ma['\u0D4Di'] = "\u0D3F";
ma['\u0D4Du'] = "\u0D41";
ma['\u0D0Bu'] = "\u0D43";
ma['\u0D4De'] = "\u0D46";
ma['\u0D4Do'] = "\u0D4A";
ma['\u200Ci'] = "\u0D48";
ma['\u200Cu'] = "\u0D4C";
ma['\u200C-'] = "\u200D";
ma['\u200C:'] = ":";
ma['-'] = "\u200D";
//VowBig
ma['\u200Ca'] = "\u0D3E";
ma['\u0D3Fi'] = "\u0D40";
ma['\u0D41u'] = "\u0D42";
ma['\u0D46e'] = "\u0D47";
ma['\u0D4Ao'] = "\u0D4B";
ma['\u0D4DA'] = "\u0D3E";
ma['\u0D4DI'] = "\u0D40";
ma['\u0D4DU'] = "\u0D42";
ma['\u0D4DE'] = "\u0D47";
ma['\u0D4DO'] = "\u0D4B";
//Vows
ma['\u0D05i'] = "\u0D10";
ma['\u0D05u'] = "\u0D14";
ma['\u0D05a'] = "\u0D06";
ma['\u0D07i'] = "\u0D08";
ma['\u0D09u'] = "\u0D0A";
ma['\u0D0Ee'] = "\u0D0F";
ma['\u0D12o'] = "\u0D13";
ma['\u0D13m'] = "\u0D50";

ma['a'] = "\u0D05";
ma['A'] = "\u0D06";
ma['i'] = "\u0D07";
ma['I'] = "\u0D08";
ma['u'] = "\u0D09";
ma['U'] = "\u0D0A";
ma['e'] = "\u0D0E";
ma['E'] = "\u0D0F";
ma['o'] = "\u0D12";
ma['O'] = "\u0D13";
ma['q'] = "\u0D15\u0D4D";
//Nums
ma['\u200D1'] = "\u0D67";
ma['\u200D2'] = "\u0D68";
ma['\u200D3'] = "\u0D69";
ma['\u200D4'] = "\u0D6A";
ma['\u200D5'] = "\u0D6B";
ma['\u200D6'] = "\u0D6C";
ma['\u200D7'] = "\u0D6D";
ma['\u200D8'] = "\u0D6E";
ma['\u200D9'] = "\u0D6F";
ma['\u200D0'] = "\u0D66";
ma['(.+)\u200C(.+)'] = "$1$2";
