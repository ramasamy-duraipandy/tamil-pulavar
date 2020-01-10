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
var lang = "telugu";
var chnbin = "\u0C4D";
var ugar = "\u0C41";
var uugar = "\u0C42";
myimg.src = "images/"+lang+".png";

var te = new Array();
var tetw = new Array();
// Typewriter
tetw['\\~'] = "\u0C12";
tetw['\\`'] = "\u0C4A";
tetw['\\#'] = "\u0C4D\u0C30";
tetw['\\%'] = "\u0C1C\u0C4D\u0C1E";
tetw['\\^'] = "\u0C24\u0C4D\u0C30";
tetw['\\&'] = "\u0C15\u0C4D\u0C37";
tetw['\\*'] = "\u0C36\u0C4D\u0C30";
tetw['_'] = "\u0C03";
tetw['\\+'] = "\u0C0B";
tetw['\\='] = "\u0C43";
tetw['q'] = "\u0C4C";
tetw['w'] = "\u0C48";
tetw['e'] = "\u0C3E";
tetw['r'] = "\u0C40";
tetw['t'] = "\u0C42";
tetw['y'] = "\u0C2C";
tetw['u'] = "\u0C39";
tetw['i'] = "\u0C17";
tetw['o'] = "\u0C26";
tetw['p'] = "\u0C1C";
tetw['\\['] = "\u0C21";

tetw['Q'] = "\u0C14";
tetw['W'] = "\u0C10";
tetw['E'] = "\u0C06";
tetw['R'] = "\u0C08";
tetw['T'] = "\u0C0A";
tetw['Y'] = "\u0C2D";
tetw['U'] = "\u0C19";
tetw['I'] = "\u0C18";
tetw['O'] = "\u0C27";
tetw['P'] = "\u0C1D";
tetw['\\{'] = "\u0C22";
tetw['\\}'] = "\u0C1E";

tetw['a'] = "\u0C4B";
tetw['s'] = "\u0C47";
tetw['d'] = "\u0C4D";
tetw['f'] = "\u0C3F";
tetw['g'] = "\u0C41";
tetw['h'] = "\u0C2A";
tetw['j'] = "\u0C30";
tetw['k'] = "\u0C15";
tetw['l'] = "\u0C24";
tetw['\\;'] = "\u0C1A";
tetw['\\\''] = "\u0C1F";

tetw['A'] = "\u0C13";
tetw['S'] = "\u0C0F";
tetw['D'] = "\u0C05";
tetw['F'] = "\u0C07";
tetw['G'] = "\u0C09";
tetw['H'] = "\u0C2B";
tetw['J'] = "\u0C31";
tetw['K'] = "\u0C16";
tetw['L'] = "\u0C25";
tetw['\\:'] = "\u0C1B";
tetw['"'] = "\u0C20";

tetw['z'] = "\u0C46";
tetw['x'] = "\u0C02";
tetw['c'] = "\u0C2E";
tetw['v'] = "\u0C28";
tetw['b'] = "\u0C35";
tetw['n'] = "\u0C32";
tetw['m'] = "\u0C38";
tetw['/'] = "\u0C2F";
tetw['Z'] = "\u0C0E";
tetw['X'] = "\u0C01";
tetw['C'] = "\u0C23";
tetw['V'] = "";
tetw['B'] = "";
tetw['N'] = "\u0C33";
tetw['M'] = "\u0C36";
tetw['<'] = "\u0C37";

//Phonetic
te['B'] = "b";
te['C'] = "c";
te['F'] = "ph";
te['f'] = "ph";
te['G'] = "g";
te['J'] = "j";
te['K'] = "k";
te['M'] = "m";
te['P'] = "p";
te['Q'] = "q";
te['V'] = "v";
te['W'] = "v";
te['w'] = "v";
te['X'] = "x";
te['Y'] = "y";
te['Z'] = "j";
//Cons
te['k'] = "\u0C15\u0C4D";
te['c'] = "\u0C1A\u0C4D";
te['T'] = "\u0C1F\u0C4D";
te['D'] = "\u0C21\u0C4D";
te['N'] = "\u0C23\u0C4D";
te['t'] = "\u0C24\u0C4D";
te['d'] = "\u0C26\u0C4D";
te['p'] = "\u0C2A\u0C4D";
te['b'] = "\u0C2C\u0C4D";

te['y'] = "\u0C2F\u0C4D";
te['R'] = "\u0C31\u0C4D";
te['L'] = "\u0C33\u0C4D";
te['v'] = "\u0C35\u0C4D";
te['s'] = "\u0C38\u0C4D";
te['S'] = "\u0C36\u0C4D";
te['H'] = "\u0C39\u0C4D";
te['x'] = "\u0C15\u0C4D\u0C36\u0C4D";

te['\u200Dn'] = "\u0C01";
te['\u200Dm'] = "\u0C02";
te['m'] = "\u0C2E\u0C4D";
te['n'] = "\u0C28\u0C4D";
te[':h'] = "\u0C03";

te['\u0C15\u0C4Dh'] = "\u0C16\u0C4D";
te['\u0C28\u0C4Dg'] = "\u0C19\u0C4D";
te['\u0C1A\u0C4Dh'] = "\u0C1B\u0C4D";
te['\u0C28\u0C4Dj'] = "\u0C1E\u0C4D";
te['\u0C1F\u0C4Dh'] = "\u0C20\u0C4D";
te['\u0C21\u0C4Dh'] = "\u0C22\u0C4D";
te['\u0C24\u0C4Dh'] = "\u0C25\u0C4D";
te['\u0C26\u0C4Dh'] = "\u0C27\u0C4D";
te['\u0C2A\u0C4Dh'] = "\u0C2B\u0C4D";
te['\u0C2C\u0C4Dh'] = "\u0C2D\u0C4D";
te['\u0C38\u0C4Dh'] = "\u0C37\u0C4D";
te['\u0C31\u0C4Dr'] = "\u0C0B";
te['\u0C33\u0C4Dl'] = "\u0C0C";
te['\u0C4D\u0C0B'] = "\u0C43";

te['j'] = "\u0C1C\u0C4D";
te['\u0C1C\u0C4Dh'] = "\u0C1D\u0C4D";
te['g'] = "\u0C17\u0C4D";
te['\u0C17\u0C4Dh'] = "\u0C18\u0C4D";
te['r'] = "\u0C30\u0C4D";
te['l'] = "\u0C32\u0C4D";
te['h'] = "\u0C39\u0C4D";
//VowSmall
te['\u0C4Da'] = "\u200C";
te['\u0C4Di'] = "\u0C3F";
te['\u0C4Du'] = "\u0C41";
te['\u0C0Bu'] = "\u0C43";
te['\u0C4De'] = "\u0C46";
te['\u0C4Do'] = "\u0C4A";
te['\u200Ci'] = "\u0C48";
te['\u200Cu'] = "\u0C4C";
te['\u200C-'] = "\u200D";
te['\u200C:'] = ":";
te['-'] = "\u200D";
//VowBig
te['\u200Ca'] = "\u0C3E";
te['\u0C3Fi'] = "\u0C40";
te['\u0C41u'] = "\u0C42";
te['\u0C43u'] = "\u0C44";
te['\u0C46e'] = "\u0C47";
te['\u0C4Ao'] = "\u0C4B";
te['\u0C4DA'] = "\u0C3E";
te['\u0C4DI'] = "\u0C40";
te['\u0C4DU'] = "\u0C42";
te['\u0C0BU'] = "\u0C44";
te['\u0C4DE'] = "\u0C47";
te['\u0C4DO'] = "\u0C4B";
//Vows
te['\u0C05i'] = "\u0C10";
te['\u0C05u'] = "\u0C14";
te['ai'] = "\u0C10";
te['au'] = "\u0C14";
te['\u0C05a'] = "\u0C06";
te['\u0C07i'] = "\u0C08";
te['\u0C09u'] = "\u0C0A";
te['\u0C0Ee'] = "\u0C0F";
te['\u0C12o'] = "\u0C13";

te['a'] = "\u0C05";
te['A'] = "\u0C06";
te['i'] = "\u0C07";
te['I'] = "\u0C08";
te['u'] = "\u0C09";
te['U'] = "\u0C0A";
te['e'] = "\u0C0E";
te['E'] = "\u0C0F";
te['o'] = "\u0C12";
te['O'] = "\u0C13";
te['q'] = "\u0C15\u0C4D";
//Nums
te['\u200D1'] = "\u0C67";
te['\u200D2'] = "\u0C68";
te['\u200D3'] = "\u0C69";
te['\u200D4'] = "\u0C6A";
te['\u200D5'] = "\u0C6B";
te['\u200D6'] = "\u0C6C";
te['\u200D7'] = "\u0C6D";
te['\u200D8'] = "\u0C6E";
te['\u200D9'] = "\u0C6F";
te['\u200D0'] = "\u0C66";
te['(.+)\u200C(.+)'] = "$1$2";
