<?php
	require('common.php');

	function openSectionHeader($request){
		if (isset($request['openId'])){
	  		switch($request['openId']){
				case 1: 
					return 'terrell_1st_hd';
				case 2: 
					return 'terrell_gnd_hd';
				case 3: 
					return 'terrell_bas_hd';
				case 4: 
					return 'terrell_bas_hd_dew';
				case 5: 
					return 'holland_1st_hd';
				case 6: 
					return 'holland_2nd_hd';
				case 7: 
					return 'holland_3rd_hd';
				case 8: 
					return 'holland_3rd_hd_jack';
				case 9: 
					return 'holland_3rd_hd_us';				
	  		}			
		}
		return '';
	}
?>
<!DOCTYPE html 
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">	
<head>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<link rel="stylesheet" href="css/blueprint/screen.css" type="text/css" media="screen, projection">
	<link rel="stylesheet" href="css/blueprint/print.css" type="text/css" media="print">
	<!--[if lt IE 8]>
	    <link rel="stylesheet" href="css/blueprint/ie.css" type="text/css" media="screen, projection">
	  <![endif]-->
	<link href="javascripts/jqueryui/jquery-ui.css" rel="stylesheet" type="text/css"/>
	<script src="javascripts/jquery/jquery-1.5.min.js"></script>
	<script src="javascripts/jqueryui/jquery-ui.min.js"></script>
	<script type="text/javascript" src="javascripts/jquery.nestedAccordion.js"></script>
	<link href="css/stylesheets/li_stylesheet.css" rel="stylesheet" type="text/css" />
	<link href="css/stylesheets/style.css" rel="stylesheet" type="text/css" />
	<title>Holland & Terrell Stack Chart</title>


	<script language="JavaScript">
		function openHeader(elementId){
			var h = $('#'+elementId);
			h.trigger('click');
		}  
	  // Activate the accordion controls
	  $("html").addClass("js");
		$.fn.n_accordion.defaults.container = false; 
	  $(function() {
	  	$("#nextperiment").n_accordion({obj: "div", wrapper: "div", el: ".h", 
	      head: "h4, h5", next: "div", showMethod: "slideFadeDown", hideMethod: "slideFadeUp",
	      initShow : "div.shown"
	    });
	  $("#terrelDiv").n_accordion({obj: "div", wrapper: "div", el: ".h", 
	      head: "h2, span", next: "div", showMethod: "slideFadeDown", hideMethod: "slideFadeUp",
	      initShow : "div.shown", showSpeed: 200, hideSpeed: 400
	    });  
	   $("#hollandDiv").n_accordion({obj: "div", wrapper: "div", el: ".h", 
	      head: "h2, span", next: "div", showMethod: "slideFadeDown", hideMethod: "slideFadeUp",
	      initShow : "div.shown", showSpeed: 200, hideSpeed: 400
	    }); 
	   /*$("#mapDiv").n_accordion({obj: "div", wrapper: "div", el: ".h", 
	      head: "h2, span", next: "div", showMethod: "slideFadeDown", hideMethod: "slideFadeUp",
	      initShow : "div.shown", showSpeed: 200, hideSpeed: 400
	    }); */
	    $("#otherDiv").n_accordion({obj: "div", wrapper: "div", el: ".h", 
	      head: "h2, h3", next: "div", showMethod: "slideFadeDown", hideMethod: "slideFadeUp",
	      initShow : "div.shown", showSpeed: 200, hideSpeed: 400
	    });
	    
	    $("#locClassDiv").n_accordion({obj: "div", wrapper: "div", el: ".h", 
	      head: "h2, h3", next: "div", showMethod: "slideFadeDown", hideMethod: "slideFadeUp",
	      initShow : "div.shown", showSpeed: 200, hideSpeed: 400
	    });
	    
	  $("html").removeClass("js");
	  <?
	  	//check whether we need to open a section after load
	  	$h_id = openSectionHeader($_REQUEST);
		if ($h_id){
	  		print "openHeader('$h_id');";
		}  
	  ?>
	});
	  
	</script>
	<style type="text/css">		
		/* --- Accordion --- */
		.js #main .accordion {visibility:hidden}
			
		.js #side .accordion {display:none}
			
		.accordion {margin:0; padding:0 10px}
			
		.accordion li {list-style-type:none}
			
		.accordion li.last-child {margin-left:19px; list-style-type:disc}
			
		#side ul.accordion ul {margin:0; padding:0 0 0 20px;}
			
		.accordion .outer {border:1px solid #dadada; border-width:0 1px 1px; background: #fff}
			
		.accordion .inner {margin-bottom:0; padding:.5em 20px 1em; position:relative; overflow:hidden}
			
		.accordion .inner .inner {padding-bottom:0}
			
		.accordion .h {padding-top:.3em} /* vertical padding instead of vertical margin (ie8) */
			
		.accordion p {margin:.5em 1px 1em}		
	</style>

<? if(!is_mobile()){ //Only use headers if client is not mobile ?>
	<!-- This is the Common Header -->
	<!-- header script includes </head> and <body> tags -->
	<script type="text/javascript" src="http://www.wsulibs.wsu.edu/Header/Header1.js"></script>
	<script type="text/javascript" src="http://www.wsulibs.wsu.edu/Header/Header2.js"></script>
	<!-- END HEADER -->
<? } else {	//include some mobile specific styling ?>
	<link href="css/stylesheets/mobile.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
<? } //Notice that the non-mobile version included </head> and <body> for us?>        	

<h1 align="center">Holland & Terrell Stack Chart</h1>
<hr />

<div class="container <? if (is_mobile()) print "mobile_con"; else print "showgrid"; ?>">	

	<?
	if (!($db = sqlite_open("db/stackchart.sqlite2.db"))) {
		echo "<h2> Database Error </h2>";
		die();
	}
	$page_size = 10;
	?>
	<div id="mainDiv">			
		<div class="<? if (is_mobile()) print "mobile_half"; else print "span-9"; ?>">
			<h1 align="center" >Terrell Library </h1>
			<br>
			<div id="terrelDiv">				
				<h2><a href="#" id="terrell_1st_hd" class="acc_head" >1st Floor<br>Call Numbers: A - DC</a></h2>
				<div class="floor">	
					<? displayStacks($db, $page_size, 1, "terrell_1st");?>
				</div>
				<h2><a href="#" id="terrell_gnd_hd" class="acc_head" >Ground Floor<br>Call Numbers: DD - HB 149 Z9</a></h2>	
				<div class="floor">
					<? displayStacks($db, $page_size, 2, "terrell_gnd");?>					
				</div>			
				<h2><a href="#" id="terrell_bas_hd" class="acc_head" >Basement<br>Call Numbers: HB 150 - HV 5999</a></h2>
				<div class="floor">
					<? displayStacks($db, $page_size, 3, "terrell_bas");?>				
				</div>
				<h2><a href="#" id="terrell_bas_hd_dew" class="acc_head" >Basement<br>Dewey Call Numbers: 001 - 999</a></h2>
				<div class="floor">
					<? displayStacks($db, $page_size, 4, "terrell_bas");?>			
				</div>						
			</div>		
		</div>
		
		<div class="<? if (is_mobile()) print "mobile_half"; else print "span-9"; ?>">
			<h1 align="center">Holland Library </h1>
			<br>
			<div id="hollandDiv">
				<h2><a href="#" id="holland_1st_hd" class="acc_head">1st Floor<br>Call Numbers: HV 6000 - KZ</a></h2>
				<div class="floor">
					<? displayStacks($db, $page_size, 5, "holland_1st");?>				
				</div>
				<h2><a href="#" id="holland_2nd_hd" class="acc_head">2nd Floor<br>Call Numbers: L - PS 3299 </a></h2>
				<div class="floor">
					<? displayStacks($db, $page_size, 6, "holland_2nd");?>				
				</div>
				<h2><a href="#" id="holland_3rd_hd" class="acc_head">3rd Floor<br>Call Numbers: PS 3302 - Z </a></h2>
				<div class="floor">
					<? displayStacks($db, $page_size, 7, "holland_3rd");?>				
				</div>
				<h2><a href="#" id="holland_3rd_hd_jack" class="acc_head">3rd Floor - Jackson (State/Int’l) Docs<br>HOLDOC MA 1 - HOLDOC UNY 72 SKJ</a></h2>
				<div class="floor">
					<? displayStacks($db, $page_size, 8, "holland_3rd");?>					
				</div>
				<h2><a href="#" id="holland_3rd_hd_us" class="acc_head">3rd Floor - US Gov Docs<br>HOLDOC A 1.1/3 - HOLDOC Z999</a></h2>
				<div class="floor">
					<? displayStacks($db, $page_size, 9, "holland_3rd");?>				
				</div>
			</div>
		</div>	
	</div>
	<div class="separator"></div>

	<div class="<? if (is_mobile()) print "mobile_full"; else print "span-18 last"; ?>">
		<div id="otherDiv">
			<h2><a href="#" id="other_loc" class="acc_head" >Other Holland and Terrell Locations</a></h2>
				<div>				
					<div>				  
					  <table border="1" cellpadding=2 cellspacing="0">
				        <tr>
				          <td colspan="2"><div align="center"><strong>Terrell Library</strong></div>
				          <td colspan="2"><div align="center"><strong>Holland Library</strong></div></td>
				          </td>
				        </tr>
				        <tr>
				          <td width="317">Reference</td>
				          <td width="122">1st Floor</td>
				          <td width="317"> Cougar Copies</td>
						  <td width="122">1st Floor</td>
				        </tr>
				        <tr>
				          <td>Current Journals/Newspapers</td>
				          <td>Ground Floor</td>
				          <td width="317"> Microforms</td>
						  <td width="122">1st Floor</td>
				        </tr>
				        <tr>
				          <td>MASC <font size="-3">(Manuscripts, Archives, and Special Collections)</font></td>
				          <td>Ground Floor</td>
				          <td width="317">Map Room</td>
						  <td width="122">1st Floor</td>
				        </tr>
				        <tr>
				          <td>Media Materials/Reserves</td>
				          <td>Ground Floor</td>
				          <td width="317"> Oversize</td>
						  <td width="122">3rd Floor</td>
				        </tr>
			      		</table>
			      	</div>
				</div>
		</div>
	</div>
	
	<div class="separator"></div>

	<div class="<? if (is_mobile()) print "mobile_full"; else print "span-18 last"; ?>">
		<div id="locClassDiv">
			<h2><a href="#" id="locClassification" class="acc_head" >Browse by Library of Congress Classification</a></h2>
				<div>				
					<p>Welcome to the Holland and Terrell Libraries. This resource has been developed to assist you in 
						locating materials throughout the buildings by providing the locations of resources 
						by the library of congress classification system. For example if you're researching information about the sculpture "Hermes" by 
						Praxiteles you can locate the general area that these resources may be in by 
						clicking "N" for Visual arts and then "Subclass NB Sculpture" and you will see 
						the location of the stacks on a map of the buildings which contain these resources.</p>
						<p>
						
						Click on a letter to see which building and floor a class/subclass is on. </p>
					<br />
		            <table width="100%" border="0">
		              <tr>
		                <td width="44%"><a href="http://www.wsulibs.wsu.edu/Usered/tutorials/hatmapsstacks/A.html">A - General Works</a></td>
		                <td width="32%"><a href="http://www.wsulibs.wsu.edu/Usered/tutorials/hatmapsstacks/J.html">J - Political Science</a></td>
		                <td width="24%"><a href="http://www.wsulibs.wsu.edu/Usered/tutorials/hatmapsstacks/R.html">R - Medicine</a></td>
		              </tr>
		              <tr>
		                <td><a href="http://www.wsulibs.wsu.edu/Usered/tutorials/hatmapsstacks/B.html">B - Philosophy, Psychology, Religion</a></td>
		                <td><a href="http://www.wsulibs.wsu.edu/Usered/tutorials/hatmapsstacks/K.html">K - Law</a></td>
		                <td><a href="http://www.wsulibs.wsu.edu/Usered/tutorials/hatmapsstacks/S.html">S - Agriculture</a></td>
		              </tr>
		              <tr>
		                <td><a href="http://www.wsulibs.wsu.edu/Usered/tutorials/hatmapsstacks/C.html">C - Auxiliary Sciences of History</a> </td>
		                <td><a href="http://www.wsulibs.wsu.edu/Usered/tutorials/hatmapsstacks/L.html">L - Education</a></td>
		                <td><a href="http://www.wsulibs.wsu.edu/Usered/tutorials/hatmapsstacks/T.html">T- Technology</a> </td>
		              </tr>
		              <tr>
		                <td><a href="http://www.wsulibs.wsu.edu/Usered/tutorials/hatmapsstacks/D.html">D - World History</a> </td>
		                <td><a href="http://www.wsulibs.wsu.edu/Usered/tutorials/hatmapsstacks/M.Html">M - Music and Books on Music</a></td>
		                <td><a href="http://www.wsulibs.wsu.edu/Usered/tutorials/hatmapsstacks/U.html">U - Military Science</a></td>
		              </tr>
		              <tr>
		                <td><a href="http://www.wsulibs.wsu.edu/Usered/tutorials/hatmapsstacks/EF.html">E - History of the Americas</a></td>
		                <td><a href="http://www.wsulibs.wsu.edu/Usered/tutorials/hatmapsstacks/N.html">N - Fine Arts</a></td>
		                <td><a href="http://www.wsulibs.wsu.edu/Usered/tutorials/hatmapsstacks/W.html">W - WSU</a></td>
		              </tr>
		              <tr>
		                <td><a href="http://www.wsulibs.wsu.edu/Usered/tutorials/hatmapsstacks/G.html">G - Geography, Anthropology, Recreation</a></td>
		                <td><a href="http://www.wsulibs.wsu.edu/Usered/tutorials/hatmapsstacks/P.html">P - Language and Literature</a></td>
		                <td><a href="http://www.wsulibs.wsu.edu/Usered/tutorials/hatmapsstacks/Z.html">Z - Bibliography</a></td>
		              </tr>
		              <tr>
		                <td><a href="http://www.wsulibs.wsu.edu/Usered/tutorials/hatmapsstacks/H.html">H - Social Sciences</a> </td>
		                <td><a href="http://www.wsulibs.wsu.edu/Usered/tutorials/hatmapsstacks/Q.html">Q - Science</a> </td>
		                <td>&nbsp;</td>
		              </tr>
		            </table>
				</div>
		</div>
	</div>
	
	<div class="separator"></div>

	<!-- Start of StatCounter Code for Default Guide -->
	<script type="text/javascript">
		var sc_project=7577748;
		var sc_invisible=1;
		var sc_security="0e357b41";
	</script>
	<script type="text/javascript" src="http://www.statcounter.com/counter/counter.js"></script>
	<noscript>
		<div class="statcounter">
			<a title="tumblr hit counter" href="http://statcounter.com/tumblr/"
				target="_blank"><img class="statcounter" src="http://c.statcounter.com/7577748/0/0e357b41/1/"
							alt="tumblr hit counter"></a>
		</div>
	</noscript>
	<!-- End of StatCounter Code for Default Guide -->

</div><!-- End container div -->
<!-- INCLUDING FOOTER FILE HERE        Do Not Edit                                   -->
<script language="JavaScript" src="javascripts/footers/li_footer.js" type="text/javascript"></script> 
<!-- END FOOTER HEADER FILE                                               -->
</body>
</html>
<?
	if($db){		
		sqlite_close($db);
	}
?>