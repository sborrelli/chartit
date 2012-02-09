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

document.write ('<TABLE WIDTH="100%" BORDER="0" CELLPADDING="0" CELLSPACING="0" height="41" background="http://www.wsu.edu/navigatewsu/WSU-banner_spacer.gif" name="WSU Banner"><TR><TD nowrap align="left" height="41" valign="top" WIDTH="100%"><nobr><a href="http://www.wsu.edu/" target="_top"><img src="http://www.wsu.edu/navigatewsu/WSU-banner_signature.gif" alt="Washington State University" title="Washington State University" border="0"></a><a href="http://www.wsu.edu/worldclass.html" target="_top"><img src="http://www.wsu.edu/navigatewsu/WSU-banner_tagline.gif" alt="World Class. Face to Face." title="World Class. Face to Face."border="0"></a><a href="http://www.wsu.edu/futurestudents/" target="_top"><img src="http://www.wsu.edu/navigatewsu/WSU-banner_futurestudents.gif" alt="Future Students" title="Future Students" border="0"></a><a href="http://www.wsu.edu/campuses/" target="_top"><img src="http://www.wsu.edu/navigatewsu/WSU-banner_statewide.gif" border="0" alt="Campuses" title="Campuses"></a><a href="http://www.wsu.edu/" target="_top"><img src="http://www.wsu.edu/navigatewsu/WSU-banner_wsuhome.gif" border="0" alt="WSU Home" title="WSU Home"></a><a href="http://www.wsu.edu/search.html" target="_top"><img src="http://www.wsu.edu/navigatewsu/WSU-banner_wsusearch.gif" border="0" alt="WSU Search" title="WSU Search"></a><a href="http://www.wsu.edu/redirect.html" target="_top"><img src="http://www.wsu.edu/navigatewsu/WSU-banner_redirect.gif" alt=" " title=" " border="0"></a></nobr></TD></TR></TABLE>');

document.write("<table width='100%' border='0' cellspacing='0' cellpadding='0' name='Site Identifier'>");






document.write(" <tr><td height='32' align='left' valign='bottom' bgcolor='#990033'><a href='http://www.wsulibs.wsu.edu/'><img src='http://www.wsulibs.wsu.edu/images/TheLibraries.gif' alt='The Libraries' border='0'> </a></td>");

document.write("<td height='32' bgcolor='#990033' align='left' valign='bottom'><img border='0' src='http://www.wsulibs.wsu.edu/images/BlankRed.gif' width='2' height='2' alt=' '><A HREF='http://griffin.wsu.edu/search~' onMouseOver=\"if (document.images) document.images['blank'].src ='http://www.wsulibs.wsu.edu/images/GriffinOver.gif'\" onMouseOut=\"if (document.images) document.images['blank'].src = 'http://www.wsulibs.wsu.edu/images/Lib-Title.gif'\"><img border='0' src='http://www.wsulibs.wsu.edu/images/GrifCat-Tab.jpg' width='90' height='22' alt='Griffin'></A><A HREF='http://www.wsulibs.wsu.edu/griffin/indexes.htm' onMouseOver=\"if (document.images) document.images['blank'].src = 'http://www.wsulibs.wsu.edu/images/AIFTOver.gif'\" onMouseOut=\"if (document.images) document.images['blank'].src = 'http://www.wsulibs.wsu.edu/images/Lib-Title.gif'\"><img border='0' src='http://www.wsulibs.wsu.edu/images/AIFT-Tab.jpg' width='151' height='22' alt='Electronic Resources'></A><A HREF='http://griffin.wsu.edu/screens/circrec.html' onMouseOver=\"if (document.images) document.images['blank'].src = 'http://www.wsulibs.wsu.edu/images/YRROver.gif'\" onMouseOut=\"if (document.images) document.images['blank'].src = 'http://www.wsulibs.wsu.edu/images/Lib-Title.gif'\"><img border='0' src='http://www.wsulibs.wsu.edu/images/YRR-Tab.jpg' width='148' height='22' alt='Your Record'></A></td>");

document.write("<td align='left' valign='top' bgcolor='#990033' width='100%'><img border='0' src='http://www.wsulibs.wsu.edu/images/BlankRed.gif' width='2' height='2' alt=' '></td>");

document.write("<td align='left' valign='bottom' height='60' rowspan='3'><img src='http://www.wsulibs.wsu.edu/usered/headers/images/circles.gif' usemap='#circles' alt='circles' border='0'></td>");

document.write("<td width='100%' align='left' valign='top' bgcolor='#990033'><img border='0' src='http://www.wsulibs.wsu.edu/images/BlankRed.gif' width='2' height='2' alt=' '></nobr></td></tr>");




document.write("<tr><td height='2' align='left' valign='top' bgcolor='#FFCC00'><img src='http://www.wsulibs.wsu.edu/usered/headers/images/pixel-clear.gif' height='2' alt=' '></td>");

document.write("<td width='393' height='2' align='left' valign='top'><img src='http://www.wsulibs.wsu.edu/usered/headers/images/pixel-clear.gif' width='2' height='2' alt=' '>");

document.write("<td  height='2' align='left' valign='top' bgcolor='#FFCC00' width='100%'><img src='http://www.wsulibs.wsu.edu/usered/headers/images/pixel-clear.gif' height='2' alt=' '></td>");

document.write("<td  height='2' align='left' valign='top' bgcolor='#FFCC00'><img src='http://www.wsulibs.wsu.edu/usered/headers/images/pixel-clear.gif' height='2' alt=' '></td>");

document.write("</nobr></tr>");




document.write("<tr><td height='22' align='left' valign='top'><img src='http://www.wsulibs.wsu.edu/usered/headers/images/pixel-clear.gif' height='22' alt=' '></td>");

document.write("<td width='393' height='22' align='left' valign='top'><img src='http://www.wsulibs.wsu.edu/usered/headers/images/pixel-clear.gif' width='393' height='22' alt=' '></td>");

document.write("<td  height='22' align='left' valign='top'><img src='http://www.wsulibs.wsu.edu/usered/headers/images/pixel-clear.gif' height='22' alt=' '></td>");

document.write("<td  height='22' align='left' valign='top'><img src='http://www.wsulibs.wsu.edu/usered/headers/images/pixel-clear.gif' height='22' alt=' '></td>");

document.write("</nobr></tr></table>");




document.write("<table width='100%' border='0' cellspacing='0' cellpadding='0' name='Content Container'>");
document.write("<tr><td width='156' align='left' valign='top'>"); 

document.write("<table width='156' border='0' cellspacing='0' cellpadding='0' name='Navigation Content'>");

document.write("<tr><td align='left' valign='top'>");
    
document.write("<p align='left'><font face='Arial, Geneva, Helvetica, sans-serif' size='-2' color='#000000'>");

document.write(" <img src='http://www.wsulibs.wsu.edu/images/BevelArrow.gif' border='0' align='top' alt='Arrow' > <a Href='http://www.wsulibs.wsu.edu'  onMouseOver=\"if (document.images) document.images['blank'].src = 'http://www.wsulibs.wsu.edu/images/HomeOver.gif'\" onMouseOut=\"if (document.images) document.images['blank'].src = 'http://www.wsulibs.wsu.edu/images/Lib-Title.gif'\" onClick=\"SetCookie('Arrow', null, null, '/', '/','.wsu.edu')\"><font color='#000000'>Libraries HOME </a> <br>");

if (GetCookie('Arrow') == 'Search')
document.write(" <img src='http://www.wsulibs.wsu.edu/images/YellowArrow.gif' border='0' align='top' alt='Arrow' >");
else
document.write(" <img src='http://www.wsulibs.wsu.edu/images/BevelArrow.gif' border='0' align='top' alt='Arrow' >");
document.write(" <a Href='http://www.wsulibs.wsu.edu/SiteMap.html'  onMouseOver=\"if (document.images) document.images['blank'].src = 'http://www.wsulibs.wsu.edu/images/SrchOver.gif'\" onMouseOut=\"if (document.images) document.images['blank'].src = 'http://www.wsulibs.wsu.edu/images/Lib-Title.gif'\" onClick=\"SetCookie('Arrow', 'Search', null, '/', '/','.wsu.edu')\"><font color='#000000'>Search/Site Map </a><br>");

if (GetCookie('Arrow') == 'Hours')
document.write(" <img src='http://www.wsulibs.wsu.edu/images/YellowArrow.gif' border='0' align='top' alt='Arrow' >");
else
document.write(" <img src='http://www.wsulibs.wsu.edu/images/BevelArrow.gif' border='0' align='top' alt='Arrow' >");
document.write(" <a Href='http://www.wsulibs.wsu.edu/general/hours.htm'  onMouseOver=\"if (document.images) document.images['blank'].src = 'http://www.wsulibs.wsu.edu/images/HrsOver.gif'\" onMouseOut=\"if (document.images) document.images['blank'].src = 'http://www.wsulibs.wsu.edu/images/Lib-Title.gif'\" onClick=\"SetCookie('Arrow', 'Hours', null, '/', '/','.wsu.edu')\"><font color='#000000'>Hours/Phone</a><br>");

if (GetCookie('Arrow') == 'Contact')
document.write(" <img src='http://www.wsulibs.wsu.edu/images/YellowArrow.gif' border='0' align='top' alt='Arrow' >");
else
document.write(" <img src='http://www.wsulibs.wsu.edu/images/BevelArrow.gif' border='0' align='top' alt='Arrow' >");
document.write(" <a Href='http://www.systems.wsu.edu/griffin/question/'  onMouseOver=\"if (document.images) document.images['blank'].src = 'http://www.wsulibs.wsu.edu/images/ContactOver.gif'\" onMouseOut=\"if (document.images) document.images['blank'].src = 'http://www.wsulibs.wsu.edu/images/Lib-Title.gif'\" onClick=\"SetCookie('Arrow', 'Contact', null, '/', '/','.wsu.edu')\"><font color='#000000'>Contact Us</a><br>");

if (GetCookie('Arrow') == 'Question')
document.write(" <img src='http://www.wsulibs.wsu.edu/images/YellowArrow.gif' border='0' align='top' alt='Arrow' >");
else
document.write(" <img src='http://www.wsulibs.wsu.edu/images/BevelArrow.gif' border='0' align='top' alt='Arrow' >");
document.write(" <a Href='http://www.wsulibs.wsu.edu/24-7/ask.html'  onMouseOver=\"if (document.images) document.images['blank'].src = 'http://www.wsulibs.wsu.edu/images/QuestOver.gif'\" onMouseOut=\"if (document.images) document.images['blank'].src = 'http://www.wsulibs.wsu.edu/images/Lib-Title.gif'\" onClick=\"SetCookie('Arrow', 'Question', null, '/', '/','.wsu.edu')\"><font color='#000000'>Ask a Question</a><br>");

if (GetCookie('Arrow') == 'ILL')
document.write(" <img src='http://www.wsulibs.wsu.edu/images/YellowArrow.gif' border='0' align='top' alt='Arrow' >");
else
document.write(" <img src='http://www.wsulibs.wsu.edu/images/BevelArrow.gif' border='0' align='top' alt='Arrow' >");
document.write(" <a Href='http://www.wsulibs.wsu.edu/general/illfront.htm'  onMouseOver=\"if (document.images) document.images['blank'].src = 'http://www.wsulibs.wsu.edu/images/IllOver.gif'\" onMouseOut=\"if (document.images) document.images['blank'].src = 'http://www.wsulibs.wsu.edu/images/Lib-Title.gif'\" onClick=\"SetCookie('Arrow', 'ILL', null, '/', '/','.wsu.edu')\"><font color='#000000'>Interlibrary Loans</a><br>");

if (GetCookie('Arrow') == 'Subjects')
document.write(" <img src='http://www.wsulibs.wsu.edu/images/YellowArrow.gif' border='0' align='top' alt='Arrow' >");
else
document.write(" <img src='http://www.wsulibs.wsu.edu/images/BevelArrow.gif' border='0' align='top' alt='Arrow' >");
document.write(" <a Href='http://www.wsulibs.wsu.edu/general/subjects.html'  onMouseOver=\"if (document.images) document.images['blank'].src = 'http://www.wsulibs.wsu.edu/images/SubjectOver.gif'\" onMouseOut=\"if (document.images) document.images['blank'].src = 'http://www.wsulibs.wsu.edu/images/Lib-Title.gif'\" onClick=\"SetCookie('Arrow', 'Subjects', null, '/', '/','.wsu.edu')\"><font color='#000000'>Subject Resources</a><br>");

if (GetCookie('Arrow') == 'Classes')
document.write(" <img src='http://www.wsulibs.wsu.edu/images/YellowArrow.gif' border='0' align='top' alt='Arrow' >");
else
document.write(" <img src='http://www.wsulibs.wsu.edu/images/BevelArrow.gif' border='0' align='top' alt='Arrow' >");
document.write(" <a Href='http://www.wsulibs.wsu.edu/usered/home.htm'  onMouseOver=\"if (document.images) document.images['blank'].src = 'http://www.wsulibs.wsu.edu/images/ClassesOver.gif'\" onMouseOut=\"if (document.images) document.images['blank'].src = 'http://www.wsulibs.wsu.edu/images/Lib-Title.gif'\" onClick=\"SetCookie('Arrow', 'Classes', null, '/', '/','.wsu.edu')\"><font color='#000000'>Classes & Handouts</a><br>");

if (GetCookie('Arrow') == 'Links')
document.write(" <img src='http://www.wsulibs.wsu.edu/images/YellowArrow.gif' border='0' align='top' alt='Arrow' >");
else
document.write(" <img src='http://www.wsulibs.wsu.edu/images/BevelArrow.gif' border='0' align='top' alt='Arrow' >");
document.write(" <a Href='http://www.wsulibs.wsu.edu/govdoc/disabilities.htm'  onMouseOver=\"if (document.images) document.images['blank'].src = 'http://www.wsulibs.wsu.edu/images/LinksOver.gif'\" onMouseOut=\"if (document.images) document.images['blank'].src = 'http://www.wsulibs.wsu.edu/images/Lib-Title.gif'\" onClick=\"SetCookie('Arrow', 'Links', null, '/', '/','.wsu.edu')\"><font color='#000000'>Assistive Technology</a><br>");

if (GetCookie('Arrow') == 'Libraries')
document.write(" <img src='http://www.wsulibs.wsu.edu/images/YellowArrow.gif' border='0' align='top' alt='Arrow' >");
else
document.write(" <img src='http://www.wsulibs.wsu.edu/images/BevelArrow.gif' border='0' align='top' alt='Arrow' >");
document.write(" <a Href='http://www.wsulibs.wsu.edu/index2.htm'  onMouseOver=\"if (document.images) document.images['blank'].src = 'http://www.wsulibs.wsu.edu/images/LibsOver.gif'\" onMouseOut=\"if (document.images) document.images['blank'].src = 'http://www.wsulibs.wsu.edu/images/Lib-Title.gif'\" onClick=\"SetCookie('Arrow', 'Libraries', null, '/', '/','.wsu.edu')\"><font color='#000000'>About WSU Libraries</a><br>");

if (GetCookie('Arrow') == 'Services')
document.write("    <img src='http://www.wsulibs.wsu.edu/images/YellowArrowSM.gif' border='0' align='top' alt='Arrow' width=13 height=13>");
else
document.write("    <img src='http://www.wsulibs.wsu.edu/images/BevelArrowSM.gif' border='0' align='top' alt='Arrow' width=13 height=13>");
document.write(" <a Href='http://www.wsulibs.wsu.edu/general/Services.html'  onMouseOver=\"if (document.images) document.images['blank'].src = 'http://www.wsulibs.wsu.edu/images/ServicesOver.gif'\" onMouseOut=\"if (document.images) document.images['blank'].src = 'http://www.wsulibs.wsu.edu/images/Lib-Title.gif'\" onClick=\"SetCookie('Arrow', 'Services', null, '/', '/','.wsu.edu')\"><font color='#000000'>Services</a><br>");

if (GetCookie('Arrow') == 'Policies')
document.write("    <img src='http://www.wsulibs.wsu.edu/images/YellowArrowSM.gif' border='0' align='top' alt='Arrow' width=13 height=13>");
else
document.write("    <img src='http://www.wsulibs.wsu.edu/images/BevelArrowSM.gif' border='0' align='top' alt='Arrow' width=13 height=13>");
document.write(" <a Href='http://www.wsulibs.wsu.edu/general/Policies.html'  onMouseOver=\"if (document.images) document.images['blank'].src = 'http://www.wsulibs.wsu.edu/images/PoliciesOver.gif'\" onMouseOut=\"if (document.images) document.images['blank'].src = 'http://www.wsulibs.wsu.edu/images/Lib-Title.gif'\" onClick=\"SetCookie('Arrow', 'Policies', null, '/', '/','.wsu.edu')\"><font color='#000000'>Policies</a><br>");

if (GetCookie('Arrow') == 'Depts')
document.write("    <img src='http://www.wsulibs.wsu.edu/images/YellowArrowSM.gif' border='0' align='top' alt='Arrow' width=13 height=13>");
else
document.write("    <img src='http://www.wsulibs.wsu.edu/images/BevelArrowSM.gif' border='0' align='top' alt='Arrow' width=13 height=13>");
document.write(" <a Href='http://www.wsulibs.wsu.edu/general/dept.htm'  onMouseOver=\"if (document.images) document.images['blank'].src = 'http://www.wsulibs.wsu.edu/images/DeptsOver.gif'\" onMouseOut=\"if (document.images) document.images['blank'].src = 'http://www.wsulibs.wsu.edu/images/Lib-Title.gif'\" onClick=\"SetCookie('Arrow', 'Depts', null, '/', '/','.wsu.edu')\"><font color='#000000'>Departments</a><br>");

if (GetCookie('Arrow') == 'New')
document.write(" <img src='http://www.wsulibs.wsu.edu/images/YellowArrow.gif' border='0' align='top' alt='Arrow' >");
else
document.write(" <img src='http://www.wsulibs.wsu.edu/images/BevelArrow.gif' border='0' align='top' alt='Arrow' >");
document.write(" <a Href='http://griffin.wsu.edu/ftlist'  onMouseOver=\"if (document.images) document.images['blank'].src = 'http://www.wsulibs.wsu.edu/images/NewsOver.gif'\" onMouseOut=\"if (document.images) document.images['blank'].src = 'http://www.wsulibs.wsu.edu/images/Lib-Title.gif'\" onClick=\"SetCookie('ArrowTemp', 'New', null, '/', '/','.wsu.edu')\"><font color='#000000'>New Books</a><br>");

if (GetCookie('Arrow') == 'FAQ')
document.write(" <img src='http://www.wsulibs.wsu.edu/images/YellowArrow.gif' border='0' align='top' alt='Arrow' >");
else
document.write(" <img src='http://www.wsulibs.wsu.edu/images/BevelArrow.gif' border='0' align='top' alt='Arrow' >");
document.write(" <a Href='http://www.wsulibs.wsu.edu/general/faq.html'  onMouseOver=\"if (document.images) document.images['blank'].src = 'http://www.wsulibs.wsu.edu/images/FAQOver.gif'\" onMouseOut=\"if (document.images) document.images['blank'].src = 'http://www.wsulibs.wsu.edu/images/Lib-Title.gif'\" onClick=\"SetCookie('Arrow', 'FAQ', null, '/', '/','.wsu.edu')\"><font color='#000000'>Libraries FAQ</a><br>"); 

if (GetCookie('Arrow') == 'Exhibits')
document.write(" <img src='http://www.wsulibs.wsu.edu/images/YellowArrow.gif' border='0' align='top' alt='Arrow' >");
else
document.write(" <img src='http://www.wsulibs.wsu.edu/images/BevelArrow.gif' border='0' align='top' alt='Arrow' >");
document.write(" <a Href='http://www.wsulibs.wsu.edu/general/News-Events.htm'  onMouseOver=\"if (document.images) document.images['blank'].src = 'http://www.wsulibs.wsu.edu/images/ExhibitsOver.gif'\" onMouseOut=\"if (document.images) document.images['blank'].src = 'http://www.wsulibs.wsu.edu/images/Lib-Title.gif'\" onClick=\"SetCookie('Arrow', 'Exhibits', null, '/', '/','.wsu.edu')\"><font color='#000000'>News/Exhibits/Events</a><br>");

if (GetCookie('Arrow') == 'OLC')
document.write(" <img src='http://www.wsulibs.wsu.edu/images/YellowArrow.gif' border='0' align='top' alt='Arrow' >");
else
document.write(" <img src='http://www.wsulibs.wsu.edu/images/BevelArrow.gif' border='0' align='top' alt='Arrow' >");
document.write(" <a Href='http://www.systems.wsu.edu/griffin/libraries.htm'  onMouseOver=\"if (document.images) document.images['blank'].src = 'http://www.wsulibs.wsu.edu/images/olcOver.gif'\" onMouseOut=\"if (document.images) document.images['blank'].src = 'http://www.wsulibs.wsu.edu/images/Lib-Title.gif'\" onClick=\"SetCookie('Arrow', 'OLC', null, '/', '/','.wsu.edu')\"><font color='#000000'>Other Library Catalogs</a><br>"); 

if (GetCookie('Arrow') == 'Friends')
document.write(" <img src='http://www.wsulibs.wsu.edu/images/YellowArrow.gif' border='0' align='top' alt='Arrow' >");
else
document.write(" <img src='http://www.wsulibs.wsu.edu/images/BevelArrow.gif' border='0' align='top' alt='Arrow' >");
document.write(" <a Href='http://www.wsulibs.wsu.edu/friends/friends.htm'  onMouseOver=\"if (document.images) document.images['blank'].src = 'http://www.wsulibs.wsu.edu/images/FriendsOver.gif'\" onMouseOut=\"if (document.images) document.images['blank'].src = 'http://www.wsulibs.wsu.edu/images/Lib-Title.gif'\" onClick=\"SetCookie('Arrow', 'Friends', null, '/', '/','.wsu.edu')\"><font color='#000000'>Giving to the Libraries</a><br>"); 
 
document.write("<Center><hr></font><p align='center'>&nbsp;</p></font> </td>  </tr>");

document.write("</table>");

document.write("</td>");
document.write("<td width='100%' align='left' valign='top' height='100%'>");
document.write("<table width='100%' border='0' cellspacing='0' cellpadding='0' name='Body Content'>");
document.write("<tr><td width='22'>&nbsp;</td>");
document.write("<td colspan='7' align='left' valign='top'>"); 
document.write("<img border='0' src='http://www.wsulibs.wsu.edu/images/Lib-Title.gif' NAME='blank' alt='Your Information Gateway'><br>");

		     //reloads the window if Nav4 resized
		     function MM_reloadPage(init)
			 {  
             if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
             document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
             else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
             }
             MM_reloadPage(true);
