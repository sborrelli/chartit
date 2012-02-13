<?
require 'common.php';
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
	<title>Holland &amp; Terrell Stack Chart</title>
	<!-- -->
	<link rel="shortcut icon" href="http://wsu.edu/favicon.ICO" />	
	<link href="http://www.wsu.edu/navigatewsu/gen2/print.css" rel="stylesheet" type="text/css" media="print"/>
	<link href="http://www.wsulibs.wsu.edu/css/local.New4.inner-09.css" rel="stylesheet" type="text/css" />
	<!-- -->	
	<script src="javascripts/jquery/jquery-1.5.min.js"></script>
	<script src="javascripts/jqueryui/jquery-ui.min.js"></script>
	<?
	if (is_IE()){ //canvas alternative for IE7
	?>	
	<script type="text/javascript" src="javascripts/excanvas/excanvas.compiled.js"></script>  
	<?
	}
	?>
		<script type="text/javascript">
			function drawStuff(){
				var cnvs = $('#planCanvas')[0];
				if(cnvs.getContext){					
					var ctxt = cnvs.getContext('2d');
					//load image in canvas				
					var img_src = "images/<?=$image?>";
					var img = new Image();										
					img.src = img_src;
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
					//cnvs.loadImages(img_src);						
				}
				
			}
			$(document).ready(drawStuff);
		</script>
</head>
<body>
<div id="main">
<div id="pup" style="position: absolute; visibility: hidden; top: -1600px; left: 1px; width: 0pt;"></div>
	
<canvas id="planCanvas" width="575" height="451">
<script type="text/javascript">
	document.write("<p>Your browser doesn't support canvas.</p>");
</script>
</canvas>	

<div class="subclass">
	Subclass info goes here
</div>	
</div>
</body>
</html>