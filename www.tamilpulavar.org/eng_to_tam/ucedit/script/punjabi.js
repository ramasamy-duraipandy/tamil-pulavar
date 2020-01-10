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
var lang = "punjabi";
var chnbin = "\u0A4D";
var ugar = "\u0A41";
var uugar = "\u0A42";
myimg.src = "images/"+lang+".png";


var pu = new Array();
var putw = new Array();
//Typewritter
putw['\\!'] = "\u0A0D";
putw['\\@'] = "\u0A45";
putw['\\#'] = "\u0A4D\u0A30";
putw['\\$'] = "\u0A30\u0A4D";
putw['\\%'] = "\u0A1C\u0A4D\u0A1E";
putw['\\^'] = "\u0A24\u0A4D\u0A30";
putw['\\&'] = "\u0A15\u0A4D\u0A38";
putw['\\*'] = "\u0A36\u0A4D\u0A30";
putw['_'] = "\u0A03";
putw['\\+'] = "\u0A0B";
putw['\\='] = "\u0A43";
putw['q'] = "\u0A4C";
putw['w'] = "\u0A48";
putw['e'] = "\u0A3E";
putw['r'] = "\u0A40";
putw['t'] = "\u0A42";
putw['y'] = "\u0A2C";
putw['u'] = "\u0A39";
putw['i'] = "\u0A17";
putw['o'] = "\u0A26";
putw['p'] = "\u0A1C";
putw['\\['] = "\u0A21";
putw['\\]'] = "\u0A3C";
putw['Q'] = "\u0A14";
putw['W'] = "\u0A10";
putw['E'] = "\u0A06";
putw['R'] = "\u0A08";
putw['T'] = "\u0A0A";
putw['Y'] = "\u0A2D";
putw['U'] = "\u0A19";
putw['I'] = "\u0A18";
putw['O'] = "\u0A27";
putw['P'] = "\u0A1D";
putw['\\{'] = "\u0A22";
putw['\\}'] = "\u0A1E";

putw['a'] = "\u0A4B";
putw['s'] = "\u0A47";
putw['d'] = "\u0A4D";
putw['f'] = "\u0A3F";
putw['g'] = "\u0A41";
putw['h'] = "\u0A2A";
putw['j'] = "\u0A30";
putw['k'] = "\u0A15";
putw['l'] = "\u0A24";
putw['\\;'] = "\u0A1A";
putw['\\\''] = "\u0A1F";
putw['\\\\'] = "\u0A49";
putw['A'] = "\u0A13";
putw['S'] = "\u0A0F";
putw['D'] = "\u0A05";
putw['F'] = "\u0A07";
putw['G'] = "\u0A09";
putw['H'] = "\u0A2B";
putw['J'] = "\u0A5C";
putw['K'] = "\u0A16";
putw['L'] = "\u0A25";
putw['\\:'] = "\u0A1B";
putw['"'] = "\u0A20";
putw['\\|'] = "\u0A11";

putw['z'] = "";
putw['x'] = "\u0A02";
putw['c'] = "\u0A2E";
putw['v'] = "\u0A28";
putw['b'] = "\u0A35";
putw['n'] = "\u0A32";
putw['m'] = "\u0A38";
putw['/'] = "\u0A2F";
putw['Z'] = "";
putw['X'] = "\u0A01";
putw['C'] = "\u0A23";
putw['V'] = "";
putw['B'] = "";
putw['N'] = "\u0A33";
putw['M'] = "\u0A36";
putw['<'] = "\u0A38";
putw['>'] = "\u0A64";
putw['\\?'] = "\u0A5F";

//Phonetic
pu['B'] = "b";
pu['C'] = "c";
pu['F'] =  "ph";
pu['f'] =  "ph";
pu['G'] = "g";
pu['J'] = "j";
pu['K'] = "k";
pu['M'] = "m";
pu['P'] = "p";
pu['Q'] = "q";
pu['V'] = "v";
pu['W'] = "v";
pu['w'] = "v";
pu['X'] = "x";
pu['Y'] = "y";
pu['Z'] = "j";
pu['z'] = "j";
pu['e'] = "E";
pu['o'] = "O";
//Cons
pu['k'] = "\u0A15\u0A4D";
pu['c'] = "\u0A1A\u0A4D";
pu['T'] = "\u0A1F\u0A4D";
pu['D'] = "\u0A21\u0A4D";
pu['N'] = "\u0A23\u0A4D";
pu['t'] = "\u0A24\u0A4D";
pu['d'] = "\u0A26\u0A4D";
pu['n'] = "\u0A28\u0A4D";
pu['p'] = "\u0A2A\u0A4D";
pu['b'] = "\u0A2C\u0A4D";


pu['y'] = "\u0A2F\u0A4D";
pu['R'] = "\u0A5C\u0A4D";
pu['L'] = "\u0A33\u0A4D";
pu['v'] = "\u0A35\u0A4D";
pu['s'] = "\u0A38\u0A4D";
pu['S'] = "\u0A38\u0A4D";
pu['H'] = "\u0A39\u0A4D";
pu['x'] = "\u0A15\u0A4D\u0A36\u0A4D";

pu['\u0A15\u0A4Dh'] = "\u0A16\u0A4D";
pu['\u0A17\u0A4Dh'] = "\u0A18\u0A4D";
pu['\u0A28\u0A4Dg'] = "\u0A19\u0A4D";
pu['\u0A1A\u0A4Dh'] = "\u0A1B\u0A4D";
pu['\u0A1C\u0A4Dh'] = "\u0A1D\u0A4D";
pu['\u0A28\u0A4Dj'] = "\u0A1E\u0A4D";
pu['\u0A1F\u0A4Dh'] = "\u0A20\u0A4D";
pu['\u0A21\u0A4Dh'] = "\u0A22\u0A4D";
pu['\u0A24\u0A4Dh'] = "\u0A25\u0A4D";
pu['\u0A26\u0A4Dh'] = "\u0A27\u0A4D";
pu['\u0A2A\u0A4Dh'] = "\u0A2B\u0A4D";
pu['\u0A2C\u0A4Dh'] = "\u0A2D\u0A4D";
pu['\u0A38\u0A4Dh'] = "\u0A36\u0A4D";
pu['\u200Dm'] = "\u0A02";

pu['r'] = "\u0A30\u0A4D";
pu['l'] = "\u0A32\u0A4D";

pu['h'] = "\u0A39\u0A4D";
pu['g'] = "\u0A17\u0A4D";
pu['j'] = "\u0A1C\u0A4D";
pu['m'] = "\u0A2E\u0A4D";
//VowSml
pu['\u0A4Da'] = "\u200C";
pu['\u0A4Di'] = "\u0A3F";
pu['\u0A4Du'] = "\u0A41";
pu['\u0A4De'] = "\u0A46";
pu['\u0A4Do'] = "\u0A4A";
pu['\u200Ci'] = "\u0A48";
pu['\u200Cu'] = "\u0A4C";
pu['\u200C-'] = "\u200D";
pu['\u200C:'] = ":";
pu['-'] = "\u200D";
//VowBig
pu['\u200Ca'] = "\u0A3E";
pu['\u0A3Fi'] = "\u0A40";
pu['\u0A41u'] = "\u0A42";
pu['\u0A46e'] = "\u0A47";
pu['\u0A4Ao'] = "\u0A4B";
pu['\u0A4DA'] = "\u0A3E";
pu['\u0A4DI'] = "\u0A40";
pu['\u0A4DU'] = "\u0A42";
pu['\u0A4DE'] = "\u0A47";
pu['\u0A4DO'] = "\u0A4B";
//Vows
pu['\u0A05i'] = "\u0A10";
pu['\u0A05u'] = "\u0A14";
pu['\u0A05a'] = "\u0A06";
pu['\u0A07i'] = "\u0A08";
pu['\u0A09u'] = "\u0A0A";
pu['\u0A0Fe'] = "\u0A0F";
pu['\u0A13o'] = "\u0A13";
pu['\u0A13m'] = "\u0A50";
pu[':h'] = "\u0A03";

pu['a'] = "\u0A05";
pu['A'] = "\u0A06";
pu['i'] = "\u0A07";
pu['I'] = "\u0A08";
pu['u'] = "\u0A09";
pu['U'] = "\u0A0A";
pu['E'] = "\u0A0F";
pu['O'] = "\u0A13";
pu['q'] = "\u0A15\u0A4D";
//Nums
pu['\u200D1'] = "\u0A67";
pu['\u200D2'] = "\u0A68";
pu['\u200D3'] = "\u0A69";
pu['\u200D4'] = "\u0A6A";
pu['\u200D5'] = "\u0A6B";
pu['\u200D6'] = "\u0A6C";
pu['\u200D7'] = "\u0A6D";
pu['\u200D8'] = "\u0A6E";
pu['\u200D9'] = "\u0A6F";
pu['\u200D0'] = "\u0A66";
pu['(.+)\u200C(.+)'] = "$1$2";
