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
var lang = "bengali";
var chnbin = "\u09CD";
var ugar = "\u09C1";
var uugar = "\u09C2";
myimg.src = "images/"+lang+".png";

var be = new Array();
var betw = new Array();
//Typewritter
betw['\\!'] = "\u098D";
betw['\\@'] = "\u09C5";
betw['\\#'] = "\u09CD\u09B0";
betw['\\$'] = "\u09B0\u09CD";
betw['\\%'] = "\u099C\u09CD\u099E";
betw['\\^'] = "\u09A4\u09CD\u09B0";
betw['\\&'] = "\u0995\u09CD\u09B7";
betw['\\*'] = "\u09B6\u09CD\u09B0";
betw['_'] = "\u0983";
betw['\\+'] = "\u098B";
betw['\\='] = "\u09C3";
betw['q'] = "\u09CC";
betw['w'] = "\u09C8";
betw['e'] = "\u09BE";
betw['r'] = "\u09C0";
betw['t'] = "\u09C2";
betw['y'] = "\u09AC";
betw['u'] = "\u09B9";
betw['i'] = "\u0997";
betw['o'] = "\u09A6";
betw['p'] = "\u099C";
betw['\\['] = "\u09A1";
betw['\\]'] = "\u09BC";
betw['Q'] = "\u0994";
betw['W'] = "\u0990";
betw['E'] = "\u0986";
betw['R'] = "\u0988";
betw['T'] = "\u098A";
betw['Y'] = "\u09AD";
betw['U'] = "\u0999";
betw['I'] = "\u0998";
betw['O'] = "\u09A7";
betw['P'] = "\u099D";
betw['\\{'] = "\u09A2";
betw['\\}'] = "\u099E";

betw['a'] = "\u09CB";
betw['s'] = "\u09C7";
betw['d'] = "\u09CD";
betw['f'] = "\u09BF";
betw['g'] = "\u09C1";
betw['h'] = "\u09AA";
betw['j'] = "\u09B0";
betw['k'] = "\u0995";
betw['l'] = "\u09A4";
betw[';'] = "\u099A";
betw['\\\''] = "\u099F";
betw['\\\\'] = "\u09C9";
betw['A'] = "\u0993";
betw['S'] = "\u098F";
betw['D'] = "\u0985";
betw['F'] = "\u0987";
betw['G'] = "\u0989";
betw['H'] = "\u09AB";
betw['J'] = "\u09DC";
betw['K'] = "\u0996";
betw['L'] = "\u09A5";
betw[':'] = "\u099B";
betw['"'] = "\u09A0";
betw['\\|'] = "\u0991";

betw['z'] = "";
betw['x'] = "\u0982";
betw['c'] = "\u09AE";
betw['v'] = "\u09A8";
betw['b'] = "\u09B5";
betw['n'] = "\u09B2";
betw['m'] = "\u09B8";
betw['/'] = "\u09AF";
betw['Z'] = "";
betw['X'] = "\u0981";
betw['C'] = "\u09A3";
betw['V'] = "";
betw['B'] = "";
betw['N'] = "\u09B3";
betw['M'] = "\u09B6";
betw['<'] = "\u09B7";
betw['>'] = "\u09E4";
betw['\\?'] = "\u09DF";
//Phonetic
betw['B'] = "b";
betw['e'] = "E";
betw['o'] = "O";
betw['C'] = "c";
betw['F'] = "ph";
betw['f'] = "ph";
betw['G'] = "g";
betw['J'] = "j";
betw['K'] = "k";
betw['M'] = "m";
betw['P'] = "p";
betw['Q'] = "q";
betw['V'] = "b";
betw['W'] = "b";
betw['W'] = "b";
betw['v'] = "b";
betw['X'] = "x";
betw['Y'] = "y";
betw['Z'] = "j";
betw['z'] = "j";
//Cons
be['k'] = "\u0995\u09CD";
be['c'] = "\u099A\u09CD";
be['T'] = "\u099F\u09CD";
be['D'] = "\u09A1\u09CD";
be['N'] = "\u09A3\u09CD";
be['t'] = "\u09A4\u09CD";
be['d'] = "\u09A6\u09CD";
be['p'] = "\u09AA\u09CD";
be['b'] = "\u09AC\u09CD";

be['y'] = "\u09AF\u09CD";
be['R'] = "\u09DC\u09CD";
be['L'] = "\u09E1\u09CD";
be['v'] = "\u09B5\u09CD";
be['s'] = "\u09B8\u09CD";
be['S'] = "\u09B7\u09CD";
be['H'] = "\u09B9\u09CD";
be['x'] = "\u0995\u09CD\u09B6\u09CD";

be['\u200Dn'] = "\u0981";
be['\u200Dm'] = "\u0982";
be[':h'] = "\u0983";
be['m'] = "\u09AE\u09CD";
be['n'] = "\u09A8\u09CD";

be['\u0995\u09CDh'] = "\u0996\u09CD";
be['\u0997\u09CDh'] = "\u0998\u09CD";
be['\u09A8\u09CDg'] = "\u0999\u09CD";
be['\u099A\u09CDh'] = "\u099B\u09CD";
be['\u099C\u09CDh'] = "\u099D\u09CD";
be['\u09A8\u09CDj'] = "\u099E\u09CD";
be['\u099F\u09CDh'] = "\u09A0\u09CD";
be['\u09A1\u09CDh'] = "\u09A2\u09CD";
be['\u09A4\u09CDh'] = "\u09A5\u09CD";
be['\u09A6\u09CDh'] = "\u09A7\u09CD";
be['\u09AA\u09CDh'] = "\u09AB\u09CD";
be['\u09AC\u09CDh'] = "\u09AD\u09CD";
be['\u09B8\u09CDh'] = "\u09B6\u09CD";
be['\u09DC\u09CDr'] = "\u098B";
be['\u09E1\u09CDl'] = "\u098C";
be['\u09CD\u098B'] = "\u09C3";
be['r'] = "\u09B0\u09CD";
be['l'] = "\u09B2\u09CD";

be['h'] = "\u09B9\u09CD";
be['g'] = "\u0997\u09CD";
be['j'] = "\u099C\u09CD";
//VowSml
be['\u09CDa'] = "\u200C";
be['\u09CDi'] = "\u09BF";
be['\u09CDu'] = "\u09C1";
be['\u09CDe'] = "\u09C6";
be['\u09CDo'] = "\u09CA";
be['\u200Ci'] = "\u09C8";
be['\u200Cu'] = "\u09CC";
be['\u200C-'] = "\u200D";
be['\u200C:'] = ":";
be['-'] = "\u200D";
//VowBig
be['\u200Ca'] = "\u09BE";
be['\u09BFi'] = "\u09C0";
be['\u09C1u'] = "\u09C2";
be['\u09C6e'] = "\u09C7";
be['\u09CAo'] = "\u09CB";
be['\u09CDA'] = "\u09BE";
be['\u09CDI'] = "\u09C0";
be['\u09CDU'] = "\u09C2";
be['\u09CDE'] = "\u09C7";
be['\u09CDO'] = "\u09CB";
//Vows
be['\u0985i'] = "\u0990";
be['\u0985u'] = "\u0994";
be['\u0985a'] = "\u0986";
be['\u0987i'] = "\u0988";
be['\u0989u'] = "\u098A";
be['\u098Ee'] = "\u098F";
be['\u0992o'] = "\u0993";
be['\u0993m'] = "\u09D0";

be['a'] = "\u0985";
be['A'] = "\u0986";
be['i'] = "\u0987";
be['I'] = "\u0988";
be['u'] = "\u0989";
be['U'] = "\u098A";
be['e'] = "\u098E";
be['E'] = "\u098F";
be['o'] = "\u0992";
be['O'] = "\u0993";
be['q'] = "\u0995\u09CD";
//Nums
be['\u200D1'] = "\u09E7";
be['\u200D2'] = "\u09E8";
be['\u200D3'] = "\u09E9";
be['\u200D4'] = "\u09EA";
be['\u200D5'] = "\u09EB";
be['\u200D6'] = "\u09EC";
be['\u200D7'] = "\u09ED";
be['\u200D8'] = "\u09EE";
be['\u200D9'] = "\u09EF";
be['\u200D0'] = "\u09E6";
be['(.+)\u200C(.+)'] = "$1$2";