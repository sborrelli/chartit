function SetCookie (name, value) {
  var argv = SetCookie.arguments;
  var argc = SetCookie.arguments.length;
  var expires = (argc > 2) ? argv[2] : null;
  var path = (argc > 3) ? argv[3] : null;
  var domain = (argc > 4) ? argv[4] : null;

document.cookie = name + "=" + escape (value) +
((expires == null) ? "" : ("; expires=" + expires.toGMTString())) +
((path == null) ? "" : ("; path=" + path)) +
((domain == null) ? "" : ("; domain=" + domain));
}

SetCookie('gateway', "http://www.wsulibs.wsu.edu", null, "/", ".wsu.edu");

function getCookieVal (offset) {
  var endstr = document.cookie.indexOf (";", offset);
  if (endstr == -1)
    endstr = document.cookie.length;
  return unescape (document.cookie.substring(offset, endstr));
}

function GetCookie (name) {
  var arg = name + "=";
  var alen = arg.length;
  var clen = document.cookie.length;
  var i = 0;
    while (i < clen) {
         var j = i + alen;
   if (document.cookie.substring(i, j) == arg)
         return getCookieVal (j);
      i = document.cookie.indexOf(" ", i) + 1;
      if (i == 0) break;
   }
return null;
}

document.write("<map name='circles'><area shape='rect' coords='2,10,51,61' href='http://www.wsulibs.wsu.edu/usered/index.html#classes' target='_self' alt='Classes'><area shape='rect' coords='66,10,119,62' href='http://www.wsulibs.wsu.edu/electric/search/index.asp' target='_self' alt='Handouts'><area shape='rect' coords='134,8,183,63' href='http://www.wsulibs.wsu.edu/electric/search/index.asp' target='_self' alt='Tours and Tutorials'></map>");

document.write('<script language="Javascript" src="http://www.wsulibs.wsu.edu/header/header.js"></script></nobr>');




