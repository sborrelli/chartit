// JavaScript Document


    var agt=navigator.userAgent.toLowerCase(); 
    var is_major = parseInt(navigator.appVersion); 
    var is_minor = parseFloat(navigator.appVersion); 
    var is_nav  = ((agt.indexOf('mozilla')!=-1) && (agt.indexOf('spoofer')==-1) && (agt.indexOf('compatible') == -1) && (agt.indexOf('opera')==-1) && (agt.indexOf('webtv')==-1)); 
    var is_nav2 = (is_nav && (is_major == 2)); 
    var is_nav3 = (is_nav && (is_major == 3)); 
    var is_nav4 = (is_nav && (is_major == 4)); 
    var is_nav4up = (is_nav && (is_major >= 4)); 
    var is_navonly      = (is_nav && ((agt.indexOf(";nav") != -1) || 
                          (agt.indexOf("; nav") != -1)) ); 
    var is_nav5 = (is_nav && (is_major == 5)); 
    var is_nav5up = (is_nav && (is_major >= 5)); 
    var is_ie   = (agt.indexOf("msie") != -1); 
    var is_ie3  = (is_ie && (is_major < 4)); 
    var is_ie4  = (is_ie && (is_major == 4) && (agt.indexOf("msie 5.0")==-1) ); 
    var is_ie4up  = (is_ie  && (is_major >= 4)); 
    var is_ie5  = (is_ie && (is_major == 4) && (agt.indexOf("msie 5.0")!=-1) ); 
    var is_ie5up  = (is_ie  && !is_ie3 && !is_ie4); 
    var is_aol   = (agt.indexOf("aol") != -1); 
    var is_aol3  = (is_aol && is_ie3); 
    var is_aol4  = (is_aol && is_ie4); 



	function MM_reloadPage(init) {
		if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);



function goto_URL(object) {
  window.location.href =
    object.options[object.selectedIndex].value;
  return false;
}
