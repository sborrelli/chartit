<?
//get rectangle parameters from request
$x = $_REQUEST['posx'];
$y = $_REQUEST['posy'];
$h = $_REQUEST['height'];
$w = $_REQUEST['width']; 
?>
<!DOCTYPE html 
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />	
	<link href="css/stylesheets/li_stylesheet.css" rel="stylesheet" type="text/css" />
	<link href="css/stylesheets/maps.css" rel="stylesheet" type="text/css" />
	<title>Holland 1st Floor</title>
	<script type="text/javascript" src="http://www.wsulibs.wsu.edu/Header/Header1.js"></script> 
	<script type="text/javascript" src="http://www.wsulibs.wsu.edu/Header/Header2.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
		<script type="text/javascript">
			function drawStuff(){
				var cnvs = $('#planCanvas')[0];
				if(cnvs.getContext){
					var ctxt = cnvs.getContext('2d');
					//load image in canvas				
					var img = new Image();					
					img.src = "images/holland_1st.jpg";
					img.usemap = "#Map";
					img.onload = function(){				
						ctxt.drawImage(img, 0, 0, 575, 451);
						//draw the rectangle						
						ctxt.globalAlpha = 0.5;					
						ctxt.fillStyle="#FF0000";										
						var x = <?=$x?>;
						var y = <?=$y?>;
						var h = <?=$h?>;
						var w = <?=$w?>;
						ctxt.fillRect(x,y,w,h);					
						ctxt.stroke();						
					}	
				}
			}
			$(document).ready(drawStuff);
		</script>
</head>
<body>
<!-- Header Script -->
<script type="text/javascript" src="javascript/header.js"></script>
<div id="pup" style="position: absolute; visibility: hidden; top: -1600px; left: 1px; width: 0pt;"></div>
<p align="right">
<a href="http://www.wsulibs.wsu.edu/usered/tutorials/hatmapsstacks/basement.html">Basement</a>
<a href="http://www.wsulibs.wsu.edu/usered/tutorials/hatmapsstacks/ground.html">Ground</a>
<a href="http://www.wsulibs.wsu.edu/usered/tutorials/hatmapsstacks/1st.html">1st</a>
<a href="http://www.wsulibs.wsu.edu/usered/tutorials/hatmapsstacks/2nd.html">2nd</a>
<a href="http://www.wsulibs.wsu.edu/usered/tutorials/hatmapsstacks/3rd.html">3rd</a>
<a href="http://www.wsulibs.wsu.edu/usered/tutorials/hatmapsstacks/Default.html">Map</a>
</p>
	
<canvas id="planCanvas" width="575" height="451">
<p>Your browser doesn't support canvas.</p>
</canvas>	
	
<map name="Map" id="">
<area alt="" onmouseover="popup('Holland Stacks','#FFCCB2')" onmouseout="kill()" title="" onfocus="this.blur()"  shape="rect" coords="141,26,369,78" href="1_holland.html" />

<area alt="" onmouseover="popup('Micro Area','#FFCCB2')" onmouseout="kill()" title="" onfocus="this.blur()"  shape="rect" coords="241,109,358,196" href="1_micro.html" />

<area alt="" onmouseover="popup('Reference Desk','#FFCCB2')" onmouseout="kill()" title="" onfocus="this.blur()"  shape="rect" coords="239,300,289,329" href="1_reference.html" />
<area alt="" onmouseover="popup('Reference Collection','#FFCCB2')" onmouseout="kill()" title="" onfocus="this.blur()" shape="poly" coords="243,334,341,328,298,399,248,398" href="1_refcollec.html" />
<area alt="" onmouseover="popup('Terrell Stacks','#FFCCB2')" onmouseout="kill()" title="" onfocus="this.blur()"  shape="poly" coords="556,161,522,161,519,197,321,204,320,226,255,226,247,274,429,273,542,222,566,190" href="1_terrell.html" />
<area alt="" onmouseover="popup('Circulation Desk','#FFCCB2')" onmouseout="kill()" title="" onfocus="this.blur()"  shape="poly" coords="127,239,135,253,100,290,86,288,104,255" href="1_circ.html" />
<area alt="" onmouseover="popup('Class 103','#FFCCB2')" onmouseout="kill()" title="" onfocus="this.blur()"  shape="rect" coords="104,390,147,416" href="1_class103.html" />
<area alt="" onmouseover="popup('Class 105','#FFCCB2')" onmouseout="kill()" title="" onfocus="this.blur()"  shape="rect" coords="160,391,207,417" href="1_class105.html" />
<area alt="" onmouseover="popup('Study Area','#FFCCB2')" onmouseout="kill()" title="" onfocus="this.blur()"  shape="rect" coords="34,327,82,377" href="1_qstudy.html" />
<area alt="" onmouseover="popup('Atrium','#FFCCB2')" onmouseout="kill()" title="" onfocus="this.blur()" shape="circle" coords="155,304,33" href="g_atrium.html" />
<area alt="" onmouseover="popup('Reference Work Area','#FFCCB2')" onmouseout="kill()" title="" onfocus="this.blur()" shape="poly" coords="390,130,541,130,541,152,513,152,513,178,456,178,456,188,389,188" href="1_rwa.html" />
<area alt="" onmouseover="popup('New Books Area','#FFCCB2')" onmouseout="kill()" title="" onfocus="this.blur()" shape="poly" coords="132,236,140,251,147,251,164,251,170,253,179,239,160,234,149,234" href="1_book.html" />
<area alt="" onmouseover="popup('Study Area','#FFCCB2')" onmouseout="kill()" title="" onfocus="this.blur()" shape="poly" coords="87,59,115,59,115,85,164,85,164,108,133,136,87,136" href="1_study.html" />
</map>
<div class="subclass">
	Subclass info goes here
</div>	
<!-- INCLUDE FOOTER FILE HERE        Do Not Edit                                   -->
<script language="JavaScript" src="javascripts/footers/li_footer.js" type="text/javascript"></script>
<!-- END FOOTER HEADER FILE   -->
</body>
</html>