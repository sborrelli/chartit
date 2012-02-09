
document.write ('</div>');
document.write ('  <div id="localfooter"><font size="1"><a href="http://www.wsulibs.wsu.edu/usered/">WSU Library Instruction</a>, PO Box 645610, Washington State University, Pullman WA 99164-5610, 509-335-7735.<br>');

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
 
 document.write("Last updated on " + days[dateY2K.getDay()] + ' ' + months[dateY2K.getMonth()] + " " +
  dateY2K.getDate() + nths(dateY2K.getDate()) + ", " +
     (y2k(dateY2K.getYear())));


document.write ('  by Library Instruction <a href="http://www.google.com/recaptcha/mailhide/d?k=01_XESSiJhYlVTCOa_CdkWjw==&c=TuiUJBorG5XGbljQA_xHZw==" target="_blank">Contact Us</a>');
document.write ('. </font></div>');
document.write ('</div>');
	document.write ('</div>');
	document.write ('<!--Beginning of the WSU Global Footer Zone. Refer to www.wsu.edu/identity/ for more information. -->');
var strFooter;strFooter = getFooter();document.write(strFooter);
document.write ('<!--End of the WSU Global Footer Zone. -->');

document.write ('<script type="text/javascript" src="http://www.wsulibs.wsu.edu/urchin.js"></script>');
document.write ('<script type="text/javascript">urchinTracker\(\)\;</script>');