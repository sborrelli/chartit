document.write("<link rel='shortcut icon' href='http://wsu.edu/favicon.ICO' />")
document.write("<link href='http://designer.wsu.edu/template/css.aspx?key=11f14af0a0i0s0' type='text/css' rel='stylesheet' />")
document.write("<link href='http://www.wsu.edu/navigatewsu/gen2/print.css' rel='stylesheet' type='text/css' media='print'/>")
document.write("<noscript><div id='logo'><a href='http://www.wsu.edu'><img src='http://www.wsu.edu/navigatewsu/gen2/logo2.gif' alt='WSU Logo'/></a></div><div id='globalnav'><ul><li><a href='http://www.wsu.edu'>Washington State University</a></li></ul></div></noscript>")

// This JavaScript Document 
// Created By Will Morrison
// 7-18-06
// Updated
// 8-3-06
var strHeader;
var strFooter;
var httpsecure;
var thedate = new Date();
var thisyear = thedate.getFullYear();

function getHttpSecure()
{	
	var myURL = location.href;
	
	if (myURL.indexOf("https") >= 0)
	{
		httpsecure = "https";	
	}
	else
	{
		httpsecure = "http";	
	}
}
function getHeader()
{	
	getHttpSecure();
	strHeader = "<div id='logo'><a href='http://www.wsu.edu'><img src='" + httpsecure + "://www.wsu.edu/navigatewsu/gen2/logo2.gif' alt='Washington State University - World Class Face to Face' height='98' width='149'/></a></div><div></div>"
		+		"<div id='globalnav'>"
		+			"<ul>"
		+				"<li><a href='http://www.wsu.edu/NIS/AlphabeticalIndex.html'>A-Z Index</a></li>"
		+				"<li><a href='http://www.wsu.edu/WSUStatewide.html'>Campuses</a></li>"
		+				"<li><a href='https://my.wsu.edu/'>myWSU</a></li>"
		+ 				"<li><a href='http://www.wsu.edu/search.html'>WSU Search</a></li>"
		+ 				"<li><a href='http://www.wsu.edu/'>WSU Home</a></li>"
		+			"</ul>"
		+		"</div>";    
	return strHeader;
}


function getFooter()
{
	getHttpSecure();
	strFooter = "<div id='wsufooter'>"
		+			"Copyright &copy; " + thedate.getFullYear() + " Board of Regents, "
		+			"<a href='http://www.wsu.edu'>Washington State University</a>"
		+			" | <a href='http://www.wsu.edu/accessibility/'>Accessibility</a> | <a href='http://www.wsu.edu/Policies.html'>Policies</a> | <a href='http://www.wsu.edu/Copyright.html'>Copyright</a>"
		+		"</div>";
	return strFooter;
}


document.write("<script language='javascript' type='text/javascript'> var strHeader; strHeader = getHeader();	document.write(strHeader); </script>")
document.write("<div id = 'idwrapper'> ")
document.write("<div id='siteID'> ")
document.write("<h1><strong>WSU Libraries</strong></h1>")
document.write("<h2>Library Instruction Department</h2>")
document.write("</div>")
document.write("<div id='toolbar'>")
document.write("<ul>")
document.write("<li><a href='http://www.wsulibs.wsu.edu/24-7/ask.html'>Request Info</a> </li>")
document.write("<li><a href='http://www.wsulibs.wsu.edu/electric/search/index.asp'>Tours & Tutorials </a></li>")
document.write("<li><a href='http://www.wsulibs.wsu.edu/friends/friends.htm'>Give</a></li>")
document.write("</ul>")
document.write("</div>")
document.write("</div>")
document.write("<div id='content'>")
document.write("<div id='nav'>")
document.write("<div id='featured'>")
document.write("<ul>")
document.write("<li><a href='http://griffin.wsu.edu/search~'>Griffin Catalog </a></li>")
document.write("<li><a href='http://www.wsulibs.wsu.edu/griffin/indexes.htm'>Articles Indexes/E-Journals </a></li>")
document.write("<li><a href='http://griffin.wsu.edu/screens/circrec.html'>Your Record/Renewals </a></li>")
document.write("</ul>")
document.write("</div>")
document.write("<ul>")
document.write("<li><a href='http://www.wsulibs.wsu.edu/' class='parentpath'>Libraries Home</a></li>")
document.write("<li><a href='http://www.wsulibs.wsu.edu/SiteMap.html'>Search/Site Map  </a></li>")
document.write("<li><a href='http://www.wsulibs.wsu.edu/general/hours.htm'>Hours/Phone </a></li>")
document.write("<li><a href='http://www.systems.wsu.edu/griffin/question/'>Contact Us </a></li>")
document.write("<li><a href='http://www.wsulibs.wsu.edu/24-7/ask.html'>Ask a Question </a></li>")
document.write("<li><a href='http://www.wsulibs.wsu.edu/general/illfront.htm'>Interlibrary Loans </a></li>")
document.write("<li><a href='http://www.wsulibs.wsu.edu/general/subjects.html'>Subject Resources </a></li>")
document.write("<li><a href='http://www.wsulibs.wsu.edu/RefShelf'>Reference Shelf </a></li>")
document.write("<li><a href='http://www.wsulibs.wsu.edu/usered/'>Classes & Handouts </a></li>")
document.write("<li><a href='#http://www.wsulibs.wsu.edu/govdoc/disabilities.htm'>Assistive Technology </a></li>")
document.write("<li><a href='http://www.wsulibs.wsu.edu/index2.htm'>About WSU Libraries </a>")
document.write("<ul>")
document.write("<li><a href='http://www.wsulibs.wsu.edu/general/Services.html'>Services </a></li>")
document.write("<li><a href='http://www.wsulibs.wsu.edu/general/Policies.html'>Policies </a></li>")
document.write("<li><a href='http://www.wsulibs.wsu.edu/general/dept.htm'>Departments </a></li>")
document.write("</ul>")
document.write("</li>")
document.write("<li><a href='http://griffin.wsu.edu/ftlist'>New Books </a></li>")
document.write("<li><a href='http://www.wsulibs.wsu.edu/general/faq.html'>Libraries FAQ </a></li>")
document.write("<li><a href='http://www.wsulibs.wsu.edu/general/News-Events.htm'>News/Exhibits/Events </a></li>")
document.write("<li><a href='http://www.systems.wsu.edu/griffin/libraries.htm'>Other Library Catalogs </a></li>")
document.write("<li><a href='http://www.wsulibs.wsu.edu/friends/friends.htm'>Giving to the Libraries </a></li>")
document.write("<li><a href='http://www.wsulibs.wsu.edu/General/Employees/For_Lib_Employ.html'>For Library Employees </a></li>")    
document.write("</ul>")
document.write("</div>")
document.write("<div id='main'>")