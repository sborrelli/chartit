<?
function is_mobile(){
	//$useragent=$_SERVER['HTTP_USER_AGENT'];
	print $useragent;
	if(preg_match('/android.+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|
		iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|opera m(ob|in)i|palm( os)?|phone|
		p(ixi|re)\/|plucker|pocket|psp|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|
		xda|xiino/i',$useragent) ||
		preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|
		al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|
		bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|
		co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|
		em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|
		go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|
		hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|
		jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|e\-|e\/|\-[a-w])|
		libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|
		mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|
		n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|
		p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|
		qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|
		sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|
		sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|
		tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|
		veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|
		webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(\-|2|g)|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
		return true;
	return false;
}

?>
<!-- FRONTIER -->

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
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<script type="text/javascript" src="javascripts/jquery.nestedAccordion.js"></script>
<link href="css/stylesheets/li_stylesheet.css" rel="stylesheet" type="text/css" />
<link href="css/stylesheets/style.css" rel="stylesheet" type="text/css" />

<title>Holland & Terrell Stack Chart</title>

<? //Only use headers if client is not mobile
if(!is_mobile()){
?>
<!-- This is the Common Header and should be placed in your document just after the </TITLE> tag. -->

<script type="text/javascript" src="http://www.wsulibs.wsu.edu/Header/Header1.js"></script>
<script type="text/javascript" src="http://www.wsulibs.wsu.edu/Header/Header2.js"></script>

<!-- END HEADER -->
<? } //end if 
 //maybe something for an else here. We'll see.

?> 
<script language="JavaScript"><!--
	function Return () {    
    	history.go(-2);
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
  $("html").removeClass("js");
});
  
  
        //--></script>
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
</head>
<body>



<h1 align="center">Holland & Terrell Stack Chart</h1>

<hr />

<!-- FRONTIER -->

<div class="container showgrid">

<?
//if(!($db=new SQLite3('db/stackchart.sqlite')))
if(!($db=sqlite_open("db/stackchart.sqlite2.db")))
	{
		echo "<h2> Database Error </h2>";
		die();
	}	
$page_size = 10;

function displayStacks($db, $page_size, $floor_id, $element_id){
	$i = 0;

			//$res = $db -> query("SELECT count(*) filas FROM Stacks where floor_id = $floor_id") -> fetchArray();
			//using sqlite2 here
			$query = sqlite_query($db, "SELECT count(*) filas FROM Stacks where floor_id = $floor_id"); 
			$res = sqlite_fetch_array($query);
			$nstacks = $res['filas'];
			//print all rows in several accordioned tables
			while ($i * $page_size < $nstacks) {
				//every $page_size records, there's a new section
				$first_row_index = $i * $page_size;
				$empty_offset = 0;
				do {
					$offset = $first_row_index + $empty_offset;
					$query = sqlite_query($db, "SELECT begins_with 
						  				FROM Stacks 
						  				WHERE floor_id = $floor_id					  				
						  				LIMIT 1 OFFSET $offset"); 
					$res = sqlite_fetch_array($query);					
					$begins = $res[0];
					$empty_offset++; //just in case the stack number is "empty"					
				} while (strcasecmp($begins, "empty")==0 and $empty_offset < $page_size);
				if (($i + 1) * $page_size <= $nstacks) {
					$last_row_index = ($i + 1) * $page_size - 1;
				} else {
					$last_row_index = $nstacks - 1;
				}
				$empty_offset = 0;
				do {
					$offset = $last_row_index - $empty_offset;
					$query = sqlite_query($db, "SELECT ends_with 
										FROM Stacks 
										WHERE floor_id = $floor_id 
										LIMIT 1 OFFSET $offset"); 
					$res = sqlite_fetch_array($query);					
					$ends = $res[0];
					$empty_offset++;
				} while (strcasecmp($ends, "empty")==0 and $offset > $first_row_index);

				/*$row_title = "<span style=\"display:inline-block; width: 10em\">$begins</span>
							to <span style=\"display: inline-block; position: relative; left: 2em\"> $ends</span>";*/
				$sub_header_id = $element_id . "_sh";
				print " <span >						
							<a href='#'>							
							<table id='$sub_header_id' class = 'sub_header'>
								<tr>
									<td width='120px' class='td_sub_head'>$begins</td>
									<td width='1em' class='td_sub_head'>to</td>
									<td class='td_sub_head'>$ends</td>
								</tr>
							</table>
							</a>
						</span>
						<div>
							<table cellspacing='0' cellpadding='2'>
							<tbody id='$element_id'>
								<tr>
				                  <td width='68'><b>Stack #</b></td>
				                  <td width='152'><b>Begins with:</b></td>
				                  <td width='20'>&nbsp;</td>
				                  <td width='149'><b>Ends with:</b> </td>
						        </tr>	";
				//}
				//actual rows
				
				$query = sqlite_query($db, "SELECT * 
											FROM Stacks s
											WHERE floor_id = $floor_id 
											ORDER BY s.number
											LIMIT $page_size
											OFFSET $first_row_index"); 
				
				if($last_error_code = sqlite_last_error($db)) {
				//Do not run a foreach as its not multi-dimensional array
					$Error = sqlite_error_string($last_error_code);
					throw new Exception($Error); //Driver Specific Error
				}
				while ($row = sqlite_fetch_array($query)) {	
					print "<tr><td><div align=\"center\">";
					$url = $row['map_url'];
					if (strlen($url) > 0) {
						$map_coords = $row['map_coords'];
						$params = explode("#", $map_coords);
						if(count($params) == 4){
							$url = "map.php?floor=".$url."&posx=".$params[0]."&posy=".$params[1]."&width=".$params[2]."&height=".$params[3];
						} else {
							$url = $row['number_url'];
						}
					} else {
						$url = $row['number_url'];						
					}
					if (strlen($url) > 0) {
							print "<a href='$url' style='text-decoration: underline'>";
					}
					print $row['number'];
					if (strlen($url) > 0) {
						print "</a>";
					}
					print "</div></td>";
					print "<td>" . $row['begins_with'] . "</td>";
					print "<td width=\"20\">to</td>";
					print "<td>" . $row['ends_with'] . "</td></tr>";
				}
				//ending a section
				print "</tbody></table>";
				print "</div>";
				print "<div class='stacks_separator'>&nbsp;</div>";
				$i++;
			}
}

?>
<div id="mainDiv" >
	
	
	<div class="span-9" >
		<h1 align="center" >Terrell Library </h1>
		<br>
		<div id="terrelDiv">
			
			<h2><a href="#" id="terrell_1st_hd" class="acc_head" >1st Floor<br>Call Numbers: A - DC</a></h2>
			<div class="floor">	
			<?
			displayStacks($db, $page_size, 1, "terrell_1st");
			?>				        
		                
			</div>
			<h2><a href="#" id="terrell_gnd_hd" class="acc_head" >Ground Floor<br>Call Numbers: DD - HB 149 Z9</a></h2>	
			<div class="floor">
				<?
				displayStacks($db, $page_size, 2, "terrell_gnd");				
				?>					
			</div>			
			<h2><a href="#" id="terrell_bas_hd" class="acc_head" >Basement<br>Call Numbers: HB 150 - HV 5999</a></h2>
			<div class="floor">
				<?
				displayStacks($db, $page_size, 3, "terrell_bas");				
				?>				
			</div>
			<h2><a href="#" id="terrell_bas_hd" class="acc_head" >Basement<br>Dewey Call Numbers: 001 - 999</a></h2>
			<div class="floor">
				<?
				displayStacks($db, $page_size, 4, "terrell_bas");				
				?>			
			</div>						
		</div>		
	</div>
	
	<div class="span-9 last">
		<h1 align="center">Holland Library </h1>
		<br>
		<div id="hollandDiv">
			<h2><a href="#" id="holland_1st_hd" class="acc_head">1st Floor<br>Call Numbers: HV 6000 - KZ</a></h2>
			<div class="floor">
				<?
				displayStacks($db, $page_size, 5, "holland_1st");				
				?>				
			</div>
			<h2><a href="#" id="holland_2nd_hd" class="acc_head">2nd Floor<br>Call Numbers: L - PS 3299 </a></h2>
			<div class="floor">
				<?
				displayStacks($db, $page_size, 6, "holland_2nd");				
				?>				
			</div>
			<h2><a href="#" id="holland_3rd_hd" class="acc_head">3rd Floor<br>Call Numbers: PS 3302 - Z </a></h2>
			<div class="floor">
				<?
				displayStacks($db, $page_size, 7, "holland_3rd");				
				?>				
			</div>
			<h2><a href="#" id="holland_3rd_hd" class="acc_head">3rd Floor - Jackson Docs<br>HOLDOC MA 1 - HOLDOC UNY 72 SKJ</a></h2>
			<div class="floor">
				<?
				displayStacks($db, $page_size, 8, "holland_3rd");			
				?>					
			</div>
			<h2><a href="#" id="holland_3rd_hd" class="acc_head">3rd Floor - US Gov Docs<br>HOLDOC A 1.1/3 - HOLDOC Z999</a></h2>
			<div class="floor">
				<?
				displayStacks($db, $page_size, 9, "holland_3rd");			
				?>				
			</div>		
			
		</div>
	</div>	
</div>
<div style="height:10px; clear: both"></div>
<!--
<div id="grayDiv" class="span-9">
	<div id="mapDiv" class="shown">
		<h2><a href="#" id="call_map" class="acc_head" >Holland &amp; Terrell Call Number Map</a></h2>
		<div>
			<div align="center">
				<table border="1" cellpadding=2 cellspacing="0">
					<tbody class="call_map">
						<tr>
							<td width="267">A - DC </td>
							<td width="145">Terrel 1st</td>
						</tr>
						<tr>
							<td>DD - HB 149 Z9 </td>
							<td>Terrel Ground</td>
						</tr>
						<tr>
							<td>HB 150- HV 5999 </td>
							<td>Terrel Basement</td>
						</tr>								
						<tr>
							<td width="280">HV 6000 - KZZ</td>
							<td width="143">Holland First</td>
						</tr>
						<tr>
							<td>L - PS 3299 </td>
							<td>Holland Second</td>
						</tr>
						<tr>
							<td>PS 3300 - Z</td>
							<td>Holland Third</td>
						</tr>
						<tr>
							<td>Jackson Docs </td>
							<td>Holland Third</td>
						</tr>
						<tr>
							<td>US Docs A - Y </td>
							<td>Holland Third</td>
						</tr>								
					</tbody>
				</table>
			</div>
		</div>
	</div>	
</div>
-->
<div class="span-18 last">
	<div id="otherDiv">
		<h2><a href="#" id="other_loc" class="acc_head" > Other Locations in The Library</a></h2>
			<div>
				<!--
				<div class="span-9">
					<table border="1" cellpadding=2 cellspacing="0">
						<tr>
							<td colspan="2"><div align="center"><strong>Holland Library</strong></div></td>
						</tr>
						<tr>
							<td width="317"> Cougar Copies</td>
							<td width="122">1st Floor</td>
						</tr>
						<tr>
							<td width="317"> Microforms</td>
							<td width="122">1st Floor</td>
						</tr>
						<tr>
							<td width="317"> Maproom</td>
							<td width="122">1st Floor</td>
						</tr>
						<tr>
							<td width="317"> Oversize</td>
							<td width="122">3rd Floor</td>
						</tr>
			  		</table>
				</div>
				-->
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
			          <td>CJ/Newspaper</td>
			          <td>Ground Floor</td>
			          <td width="317"> Microforms</td>
					  <td width="122">1st Floor</td>
			        </tr>
			        <tr>
			          <td>MASC <font size="-3">(Manuscripts, Archives, and Special Collections)</font></td>
			          <td>Ground Floor</td>
			          <td width="317"> Maproom</td>
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

<?
	if($db){		
		sqlite_close($db);
	}
?>
<div style="clear: both"></div>
<!-- 
<h3 align="center">WSU Libraries &nbsp;<input type=BUTTON NAME=BtnName VALUE='RETURN' onClick='Return()'></h4>
<div id=lifoot>
<center>
<script type="text/javascript" src="http://www.wsulibs.wsu.edu/electric/library_lingo/javascripts/footers/Footer.js"></script>
</center>
</div>
-->
<!-- Start of StatCounter Code for Default Guide -->
<script type="text/javascript">
var sc_project=7177095; 
var sc_invisible=1; 
var sc_security="d916318d"; 
</script>
<script type="text/javascript"
src="http://www.statcounter.com/counter/counter.js"></script>
<noscript><div class="statcounter"><a title="godaddy
statistics"
href="http://statcounter.com/godaddy_website_tonight/"
target="_blank"><img class="statcounter"
src="http://c.statcounter.com/7177095/0/d916318d/1/"
alt="godaddy statistics"></a></div></noscript>
<!-- End of StatCounter Code for Default Guide -->
</div>
<!-- INCLUDE FOOTER FILE HERE        Do Not Edit                                   -->
<script language="JavaScript" src="javascripts/footers/li_footer.js" type="text/javascript"></script> 
<!-- END FOOTER HEADER FILE                                               -->
</body>
</html>