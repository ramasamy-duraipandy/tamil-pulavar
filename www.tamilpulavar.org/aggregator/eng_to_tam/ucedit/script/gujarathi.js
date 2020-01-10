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
var lang = "gujarathi";
var chnbin = "\u0ACD";
var ugar = "\u0AC1";
var uugar = "\u0AC2";
myimg.src = "images/"+lang+".png";

var gutw = new Array();
var gu = new Array();
//Typewritter
gutw['\\!'] = "\u0A8D";
gutw['\\@'] = "\u0AC5";
gutw['\\#'] = "\u0ACD\u0AB0";
gutw['\\$'] = "\u0AB0\u0ACD";
gutw['\\%'] = "\u0A9C\u0ACD\u0A9E";
gutw['\\^'] = "\u0AA4\u0ACD\u0AB0";
gutw['\\&'] = "\u0A95\u0ACD\u0AB7";
gutw['\\*'] = "\u0AB6\u0ACD\u0AB0";
gutw['_'] = "\u0A83";
gutw['\\+'] = "\u0A8B";
gutw['\\='] = "\u0AC3";
gutw['q'] = "\u0ACC";
gutw['w'] = "\u0AC8";
gutw['e'] = "\u0ABE";
gutw['r'] = "\u0AC0";
gutw['t'] = "\u0AC2";
gutw['y'] = "\u0AAC";
gutw['u'] = "\u0AB9";
gutw['i'] = "\u0A97";
gutw['o'] = "\u0AA6";
gutw['p'] = "\u0A9C";
gutw['\\['] = "\u0AA1";
gutw['\\]'] = "\u0ABC";
gutw['Q'] = "\u0A94";
gutw['W'] = "\u0A90";
gutw['E'] = "\u0A86";
gutw['R'] = "\u0A88";
gutw['T'] = "\u0A8A";
gutw['Y'] = "\u0AAD";
gutw['U'] = "\u0A99";
gutw['I'] = "\u0A98";
gutw['O'] = "\u0AA7";
gutw['P'] = "\u0A9D";
gutw['\\{'] = "\u0AA2";
gutw['\\}'] = "\u0A9E";

gutw['a'] = "\u0ACB";
gutw['s'] = "\u0AC7";
gutw['d'] = "\u0ACD";
gutw['f'] = "\u0ABF";
gutw['g'] = "\u0AC1";
gutw['h'] = "\u0AAA";
gutw['j'] = "\u0AB0";
gutw['k'] = "\u0A95";
gutw['l'] = "\u0AA4";
gutw[';'] = "\u0A9A";
gutw['\\\''] = "\u0A9F";
gutw['\\\\'] = "\u0AC9";
gutw['A'] = "\u0A93";
gutw['S'] = "\u0A8F";
gutw['D'] = "\u0A85";
gutw['F'] = "\u0A87";
gutw['G'] = "\u0A89";
gutw['H'] = "\u0AAB";
//gutw['J'] = "\u0AB1";
gutw['K'] = "\u0A96";
gutw['L'] = "\u0AA5";
gutw[':'] = "\u0A9B";
gutw['"'] = "\u0AA0";
gutw['\\|'] = "\u0A91";

gutw['z'] = "";
gutw['x'] = "\u0A82";
gutw['c'] = "\u0AAE";
gutw['v'] = "\u0AA8";
gutw['b'] = "\u0AB5";
gutw['n'] = "\u0AB2";
gutw['m'] = "\u0AB8";
gutw['/'] = "\u0AAF";
gutw['Z'] = "";
gutw['X'] = "\u0A81";
gutw['C'] = "\u0AA3";
gutw['V'] = "";
gutw['B'] = "";
gutw['N'] = "\u0AB3";
gutw['M'] = "\u0AB6";
gutw['<'] = "\u0AB7";
gutw['>'] = "\u0AE4";
gutw['\\?'] = "\u0ADF";

//Phonetic
gu['B'] = "b";
gu['C'] = "c";
gu['F'] = "ph";
gu['f'] = "ph";
gu['G'] = "g";
gu['J'] = "j";
gu['K'] = "k";
gu['M'] = "m";
gu['P'] = "p";
gu['Q'] = "q";
gu['V'] = "v";
gu['W'] = "v";
gu['w'] = "v";
gu['X'] = "x";
gu['Y'] = "y";
gu['Z'] = "j";
gu['z'] = "j";
//Cons
gu['k'] = "\u0A95\u0ACD";
gu['c'] = "\u0A9A\u0ACD";
gu['T'] = "\u0A9F\u0ACD";
gu['D'] = "\u0AA1\u0ACD";
gu['N'] = "\u0AA3\u0ACD";
gu['t'] = "\u0AA4\u0ACD";
gu['d'] = "\u0AA6\u0ACD";

gu['p'] = "\u0AAA\u0ACD";
gu['b'] = "\u0AAC\u0ACD";
gu['y'] = "\u0AAF\u0ACD";
gu['R'] = "\u0A8B";
gu['L'] = "\u0AB3\u0ACD";
gu['v'] = "\u0AB5\u0ACD";
gu['s'] = "\u0AB8\u0ACD";
gu['S'] = "\u0AB7\u0ACD";
gu['H'] = "\u0AB9\u0ACD";
gu['x'] = "\u0A95\u0ACD\u0AB6\u0ACD";

gu['\u200Dn'] = "\u0A81";
gu['\u200Dm'] = "\u0A82";
gu[':h'] = "\u0A83";
gu['m'] = "\u0AAE\u0ACD";
gu['n'] = "\u0AA8\u0ACD";

gu['\u0A95\u0ACDh'] = "\u0A96\u0ACD";
gu['\u0A97\u0ACDh'] = "\u0A98\u0ACD";
gu['\u0AA8\u0ACDg'] = "\u0A99\u0ACD";
gu['\u0A9A\u0ACDh'] = "\u0A9B\u0ACD";
gu['\u0A9C\u0ACDh'] = "\u0A9D\u0ACD";
gu['\u0AA8\u0ACDj'] = "\u0A9E\u0ACD";
gu['\u0A9F\u0ACDh'] = "\u0AA0\u0ACD";
gu['\u0AA1\u0ACDh'] = "\u0AA2\u0ACD";
gu['\u0AA4\u0ACDh'] = "\u0AA5\u0ACD";
gu['\u0AA6\u0ACDh'] = "\u0AA7\u0ACD";
gu['\u0AAA\u0ACDh'] = "\u0AAB\u0ACD";
gu['\u0AAC\u0ACDh'] = "\u0AAD\u0ACD";
gu['\u0AB8\u0ACDh'] = "\u0AB6\u0ACD";
gu['\u0ACD\u0A8B'] = "\u0AC3";
gu['\u0A93\u0AAE\u0ACD'] = "\u0AD0";

gu['\u0AB3\u0ACDl'] = "\u0A8C";
gu['r'] = "\u0AB0\u0ACD";
gu['l'] = "\u0AB2\u0ACD";

gu['h'] = "\u0AB9\u0ACD";
gu['g'] = "\u0A97\u0ACD";
gu['j'] = "\u0A9C\u0ACD";
//VowSml
gu['\u0ACDa'] = "\u200C";
gu['\u0ACDi'] = "\u0ABF";
gu['\u0ACDu'] = "\u0AC1";
gu['\u0ACDe'] = "\u0AC5";
gu['\u0ACDo'] = "\u0AC9";
gu['\u200Ci'] = "\u0AC8";
gu['\u200Cu'] = "\u0ACC";
gu['\u200C-'] = "\u200D";
gu['\u200C:'] = ":";
gu['-'] = "\u200D";
//VowBig
gu['\u200Ca'] = "\u0ABE";
gu['\u0ABFi'] = "\u0AC0";
gu['\u0AC1u'] = "\u0AC2";
gu['\u0AC5e'] = "\u0AC7";
gu['\u0AC9o'] = "\u0ACB";
gu['\u0ACDA'] = "\u0ABE";
gu['\u0ACDI'] = "\u0AC0";
gu['\u0ACDU'] = "\u0AC2";
gu['\u0ACDE'] = "\u0AC7";
gu['\u0ACDO'] = "\u0ACB";
//Vows
gu['\u0A85i'] = "\u0A90";
gu['\u0A85u'] = "\u0A94";
gu['\u0A85a'] = "\u0A86";
gu['\u0A87i'] = "\u0A88";
gu['\u0A89u'] = "\u0A8A";
gu['\u0A8De'] = "\u0A8F";
gu['\u0A91o'] = "\u0A93";
gu['\u0A93m'] = "\u0AD0";

gu['a'] = "\u0A85";
gu['A'] = "\u0A86";
gu['i'] = "\u0A87";
gu['I'] = "\u0A88";
gu['u'] = "\u0A89";
gu['U'] = "\u0A8A";
gu['e'] = "\u0A8D";
gu['E'] = "\u0A8F";
gu['o'] = "\u0A91";
gu['O'] = "\u0A93";
gu['q'] = "\u0A95\u0ACD";

//Nums
gu['\u200D1'] = "\u0AE7";
gu['\u200D2'] = "\u0AE8";
gu['\u200D3'] = "\u0AE9";
gu['\u200D4'] = "\u0AEA";
gu['\u200D5'] = "\u0AEB";
gu['\u200D6'] = "\u0AEC";
gu['\u200D7'] = "\u0AED";
gu['\u200D8'] = "\u0AEE";
gu['\u200D9'] = "\u0AEF";
gu['\u200D0'] = "\u0AE6";
gu['(.+)\u200C(.+)'] = "$1$2";
