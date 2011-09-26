
document.write("</td></tr></table>");
document.write("<table width='610' border='0' cellspacing='0' cellpadding='0'>");
document.write("<tr><td width='22'>&nbsp;</td>");
document.write("<td><br><img src='http://www.wsulibs.wsu.edu/images/BlankBlack.gif' width='568' height='1' alt=' '><br><font face='Arial, Helvetica, sans-serif' size='-2' color='#000000'>Contact us: ");

// ** -- PUT YOUR UNIT EMAIL ADDRESS AND PHONE NUMBER HERE---------------------------------------------->
document.write("<a href='mailto:libinstr@wsu.edu'> libinstr@wsu.edu</a> 509-335-7735 ")



document.write("| <a href='http://www.scs.wsu.edu/atc/'>Accessibility</a> | <a href='http://www.wsu.edu/copyright.html'>Copyright</a> | <a href='http://www.wsu.edu/policies.html'>Policies</a><br>");


// ** -- PUT YOUR UNIT NAME, ADDRESS, and DEPT. ZIP HERE------------------------------------------------->
document.write("Library Instruction, WSU Libraries, <a href='http://www.wsu.edu'>Washington State University</a>, Pullman, WA, 99164-5610 USA<br>&nbsp;<br>");


var pageloc = document.location;

 function makeArray0() {
      for (i = 0; i<makeArray0.arguments.length; i++)
           this[i] = makeArray0.arguments[i];
 }

 var days = new makeArray0("Sunday","Monday","Tuesday","Wednesday",
     "Thursday","Friday","Saturday");

 var months = new makeArray0('January','February','March',
     'April','May','June','July','August','September',
     'October','November','December');

 function nths(day) {
      if (day == 1 || day == 21 || day == 31) return 'st';
      if (day == 2 || day == 22) return 'nd';
      if (day == 3 || day == 23) return 'rd';
      return 'th';
 }

 function getCorrectedYear(year) {
     year = year - 0;
     if (year < 70) return (2000 + year);
     if (year < 1900) return (1900 + year);
     return year;
 }

 function y2k(number) { return (number < 1000) ? number + 1900 : number; }

 var last = document.lastModified;
 var date = new Date(last);
 var dateY2K = new Date(getCorrectedYear(date.getYear()),date.getMonth(),date.getDate());

document.write("<font size='1'><i>Last updated on " + days[dateY2K.getDay()] + ' ' + months[dateY2K.getMonth()] + " " +
     dateY2K.getDate() + nths(dateY2K.getDate()) + ", " +
     (y2k(dateY2K.getYear())) + ".</i></font> <br>");

document.write (pageloc);
document.write("</font></td><td width='20'>&nbsp;</td></tr></table></td></tr></table>");

document.write ('<script type="text/javascript" src="http://www.wsulibs.wsu.edu/urchin.js"></script>');
document.write ('<script type="text/javascript">urchinTracker\(\)\;</script>');