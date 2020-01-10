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
var lang = "oriya";
var chnbin = "\u0B4D";
var ugar = "\u0B41";
var uugar = "\u0B42";
myimg.src = "images/"+lang+".png";

var or = new Array();
var ortw = new Array();
//Typewritter
ortw['\\!'] = "";
ortw['\\@'] = "";
ortw['\\#'] = "\u0B4D\u0B30";
ortw['\\$'] = "\u0B30\u0B4D";
ortw['\\%'] = "\u0B1C\u0B4D\u0B1E";
ortw['\\^'] = "\u0B24\u0B4D\u0B30";
ortw['\\&'] = "\u0B15\u0B4D\u0B37";
ortw['\\*'] = "\u0B36\u0B4D\u0B30";
ortw['_'] = "\u0B03";
ortw['\\+'] = "\u0B0B";
ortw['\\='] = "\u0B43";
ortw['q'] = "\u0B4C";
ortw['w'] = "\u0B48";
ortw['e'] = "\u0B3E";
ortw['r'] = "\u0B40";
ortw['t'] = "\u0B42";
ortw['y'] = "\u0B2C";
ortw['u'] = "\u0B39";
ortw['i'] = "\u0B17";
ortw['o'] = "\u0B26";
ortw['p'] = "\u0B1C";
ortw['\\['] = "\u0B21";
ortw['\\]'] = "\u0B3C";
ortw['Q'] = "\u0B14";
ortw['W'] = "\u0B10";
ortw['E'] = "\u0B06";
ortw['R'] = "\u0B08";
ortw['T'] = "\u0B0A";
ortw['Y'] = "\u0B2D";
ortw['U'] = "\u0B19";
ortw['I'] = "\u0B18";
ortw['O'] = "\u0B27";
ortw['P'] = "\u0B1D";
ortw['\\{'] = "\u0B22";
ortw['\\}'] = "\u0B1E";

ortw['a'] = "\u0B4B";
ortw['s'] = "\u0B47";
ortw['d'] = "\u0B4D";
ortw['f'] = "\u0B3F";
ortw['g'] = "\u0B41";
ortw['h'] = "\u0B2A";
ortw['j'] = "\u0B30";
ortw['k'] = "\u0B15";
ortw['l'] = "\u0B24";
ortw[';'] = "\u0B1A";
ortw['\\\''] = "\u0B1F";
ortw['\\\\'] = "\u0B49";
ortw['A'] = "\u0B13";
ortw['S'] = "\u0B0F";
ortw['D'] = "\u0B05";
ortw['F'] = "\u0B07";
ortw['G'] = "\u0B09";
ortw['H'] = "\u0B2B";
ortw['J'] = "\u0B5C";
ortw['K'] = "\u0B16";
ortw['L'] = "\u0B25";
ortw[':'] = "\u0B1B";
ortw['"'] = "\u0B20";
ortw['\\|'] = "\u0B11";

ortw['z'] = "";
ortw['x'] = "\u0B02";
ortw['c'] = "\u0B2E";
ortw['v'] = "\u0B28";
ortw['b'] = "\u0B35";
ortw['n'] = "\u0B32";
ortw['m'] = "\u0B38";
ortw['/'] = "\u0B2F";
ortw['Z'] = "";
ortw['X'] = "\u0B01";
ortw['C'] = "\u0B23";
ortw['V'] = "";
ortw['B'] = "";
ortw['N'] = "\u0B33";
ortw['M'] = "\u0B36";
ortw['<'] = "\u0B37";
ortw['>'] = "\u0B64";
ortw['\\?'] = "\u0B5F";
// Phonetic
or['B'] = "b";
or['e'] = "E";
or['o'] = "O";
or['C'] = "c";
or['F'] = "ph";
or['f'] = "ph";
or['G'] = "g";
or['J'] = "j";
or['K'] = "k";
or['M'] = "m";
or['P'] = "p";
or['Q'] = "q";
or['V'] = "b";
or['W'] = "b";
or['w'] = "b";
or['v'] = "b";
or['X'] = "x";
or['Y'] = "y";
or['Z'] = "j";
or['z'] = "j";
//Cons
or['k'] = "\u0B15\u0B4D";
or['c'] = "\u0B1A\u0B4D";
or['T'] = "\u0B1F\u0B4D";
or['D'] = "\u0B21\u0B4D";
or['N'] = "\u0B23\u0B4D";
or['t'] = "\u0B24\u0B4D";
or['d'] = "\u0B26\u0B4D";
or['p'] = "\u0B2A\u0B4D";
or['b'] = "\u0B2C\u0B4D";

or['y'] = "\u0B2F\u0B4D";
or['R'] = "\u0B5C\u0B4D";
or['L'] = "\u0B33\u0B4D";

or['s'] = "\u0B38\u0B4D";
or['S'] = "\u0B37\u0B4D";
or['H'] = "\u0B39\u0B4D";
or['x'] = "\u0B15\u0B4D\u0B36\u0B4D";

or['\u200Dn'] = "\u0B01";
or['\u200Dm'] = "\u0B02";
or[':h'] = "\u0B03";
or['m'] = "\u0B2E\u0B4D";
or['n'] = "\u0B28\u0B4D";

or['\u0B15\u0B4Dh'] = "\u0B16\u0B4D";
or['\u0B17\u0B4Dh'] = "\u0B18\u0B4D";
or['\u0B28\u0B4Dg'] = "\u0B19\u0B4D";
or['\u0B1A\u0B4Dh'] = "\u0B1B\u0B4D";
or['\u0B1C\u0B4Dh'] = "\u0B1D\u0B4D";
or['\u0B28\u0B4Dj'] = "\u0B1E\u0B4D";
or['\u0B1F\u0B4Dh'] = "\u0B20\u0B4D";
or['\u0B21\u0B4Dh'] = "\u0B22\u0B4D";
or['\u0B24\u0B4Dh'] = "\u0B25\u0B4D";
or['\u0B26\u0B4Dh'] = "\u0B27\u0B4D";
or['\u0B2A\u0B4Dh'] = "\u0B2B\u0B4D";
or['\u0B2C\u0B4Dh'] = "\u0B2D\u0B4D";
or['\u0B38\u0B4Dh'] = "\u0B36\u0B4D";
or['\u0B5C\u0B4Dr'] = "\u0B0B";
or['\u0B33\u0B4Dl'] = "\u0B0C";
or['\u0B4D\u0B0B'] = "\u0B43";
or['r'] = "\u0B30\u0B4D";
or['l'] = "\u0B32\u0B4D";

or['h'] = "\u0B39\u0B4D";
or['g'] = "\u0B17\u0B4D";
or['j'] = "\u0B1C\u0B4D";
//VowSml
or['\u0B4Da'] = "\u200C";
or['\u0B4Di'] = "\u0B3F";
or['\u0B4Du'] = "\u0B41";
or['\u0B4De'] = "\u0B46";
or['\u0B4Do'] = "\u0B4A";
or['\u200Ci'] = "\u0B48";
or['\u200Cu'] = "\u0B4C";
or['\u200C-'] = "\u200D";
or['\u200C:'] = ":";
or['-'] = "\u200D";
//VowBig
or['\u200Ca'] = "\u0B3E";
or['\u0B3Fi'] = "\u0B40";
or['\u0B41u'] = "\u0B42";
or['\u0B46e'] = "\u0B47";
or['\u0B4Ao'] = "\u0B4B";
or['\u0B4DA'] = "\u0B3E";
or['\u0B4DI'] = "\u0B40";
or['\u0B4DU'] = "\u0B42";
or['\u0B4DE'] = "\u0B47";
or['\u0B4DO'] = "\u0B4B";
//Vows
or['\u0B05i'] = "\u0B10";
or['\u0B05u'] = "\u0B14";
or['\u0B05a'] = "\u0B06";
or['\u0B07i'] = "\u0B08";
or['\u0B09u'] = "\u0B0A";
or['\u0B0Ee'] = "\u0B0F";
or['\u0B12o'] = "\u0B13";
or['\u0B13m'] = "\u0B50";

or['a'] = "\u0B05";
or['A'] = "\u0B06";
or['i'] = "\u0B07";
or['I'] = "\u0B08";
or['u'] = "\u0B09";
or['U'] = "\u0B0A";
or['e'] = "\u0B0E";
or['E'] = "\u0B0F";
or['o'] = "\u0B12";
or['O'] = "\u0B13";
or['q'] = "\u0B15\u0B4D";
//Nums
or['\u200D1'] = "\u0B67";
or['\u200D2'] = "\u0B68";
or['\u200D3'] = "\u0B69";
or['\u200D4'] = "\u0B6A";
or['\u200D5'] = "\u0B6B";
or['\u200D6'] = "\u0B6C";
or['\u200D7'] = "\u0B6D";
or['\u200D8'] = "\u0B6E";
or['\u200D9'] = "\u0B6F";
or['\u200D0'] = "\u0B66";
or['(.+)\u200C(.+)'] = "$1$2";
