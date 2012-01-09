<?
//get rectangle parameters from request
$image = $_REQUEST['floor'];
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
					img.src = "images/<?=$image?>";
					//img.usemap = "#Map";
					img.onload = function(){				
						ctxt.drawImage(img, 0, 0, img.width, img.height);
						//draw the rectangle						
						ctxt.globalAlpha = 0.5;					
						ctxt.fillStyle="#FF0000"; //semi-transparent red										
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
<a href="http://www.wsulibs.wsu.edu/Usered/tutorials/hatmapsstacks/basement.html">Basement</a>
<a href="http://www.wsulibs.wsu.edu/Usered/tutorials/hatmapsstacks/ground.html">Ground</a>
<a href="http://www.wsulibs.wsu.edu/Usered/tutorials/hatmapsstacks/1st.html">1st</a>
<a href="http://www.wsulibs.wsu.edu/Usered/tutorials/hatmapsstacks/2nd.html">2nd</a>
<a href="http://www.wsulibs.wsu.edu/Usered/tutorials/hatmapsstacks/3rd.html">3rd</a>
<a href="http://www.wsulibs.wsu.edu/Usered/tutorials/hatmapsstacks/Default.html">Map</a>
</p>
	
<canvas id="planCanvas" width="575" height="451">
<p>Your browser doesn't support canvas.</p>
</canvas>	

<div class="subclass">
	Subclass info goes here
</div>	
<!-- INCLUDE FOOTER FILE HERE        Do Not Edit                                   -->
<script language="JavaScript" src="javascripts/footers/li_footer.js" type="text/javascript"></script>
<!-- END FOOTER HEADER FILE   -->
</body>
</html>