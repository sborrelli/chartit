document.write("</div>")
document.write("<div id='localfooter'>")


// ** -- PUT YOUR UNIT EMAIL ADDRESS AND PHONE NUMBER HERE---------------------------------------------->
document.write(" ")

// ** -- PUT YOUR UNIT NAME, ADDRESS, and DEPT. ZIP HERE------------------------------------------------->
document.write("Library Instruction, WSU Libraries, Washington State University, Pullman, WA, 99164-5610 ,509-335-7735. <a href='mailto:libinstr@wsu.edu'> Contact Us</a> <br>&nbsp;<br>");


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

document.write("</div>")
document.write("</div>")
document.write("<noscript>	<div id='wsufooter'>Copyright &copy;  Board of Regents, <a href='http://www.wsu.edu'>Washington State University</a>  </div> </noscript>")
document.write("<script language='javascript' type='text/javascript'>var strFooter;strFooter = getFooter();document.write(strFooter);</script>")
