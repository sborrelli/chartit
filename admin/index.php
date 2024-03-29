<? 
/*
* Copyright (c) 2012 Dario Alvarez Miranda, Steve Borrelli
*
* Permission is hereby granted, free of charge, to any person obtaining a copy of this
* software and associated documentation files (the "Software"), to deal in the Software
* without restriction, including without limitation the rights to use, copy, modify, 
* merge, publish, distribute, sublicense, and/or sell copies of the Software, and to 
* permit persons to whom the Software is furnished to do so, subject to the following conditions:
* 
* 
* The above copyright notice and this permission notice shall be included in all copies or 
* substantial portions of the Software.
* 
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING 
* BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND 
* NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, 
* DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, 
* OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/

require_once ("_common.php"); ?>
<!DOCTYPE html 
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	
<head>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
<link rel="stylesheet" href="<?=$public_path?>/css/blueprint/screen.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="<?=$public_path?>/css/blueprint/print.css" type="text/css" media="print">
<!--[if lt IE 8]>
    <link rel="stylesheet" href="<?=$public_path?>/css/blueprint/ie.css" type="text/css" media="screen, projection">
  <![endif]-->
<link href="<?=$public_path?>/css/stylesheets/style.css" rel="stylesheet" type="text/css" />
<link href="<?=$public_path?>/css/stylesheets/li_stylesheet.css" rel="stylesheet" type="text/css" />
<script src="<?=$public_path?>/javascripts/jquery/jquery-1.5.min.js"></script>  
<title>Holland & Terrell Stack Chart Admin</title>
<script type="text/javascript">
	function loadStacks(elem){
		var floor = $('#'+elem.id).val();
		if(floor){
			var url = "stacks_list.php";
			var params = {'floor': floor };		
			$('#stacks').load(url, params);
		} else {
			$('#stacks').empty();
		}
	}
	
	function deleteStack(stackId){
		if(confirm("This will delete the stack record. Are you sure about it?")){
			$('#stackId').val(stackId);
			$('#delForm').submit();			
		}
	}
</script>

</head>
<?
$q_library = "SELECT l.id, l.name library, f.id floor_id, f.name floor
			FROM libraries l join floors f on l.id = f.library_id
			ORDER BY l.name, f.id";
$q_stacks = "";			
?>
<body>
	<?
	if(!($db=sqlite_open(DB_PATH)))
	{
		echo "<h2> Database Error </h2>";
		die();
	}
	?>
	<div id="mainDiv" class="container">
		<h2>Edit Holland and Terrel Libraries Stacks</h2>
			<div id="library">
				Library - Floor
				<select id="floor" onchange="loadStacks(this)">
					<option value="">--</option>
					<?
			$query = sqlite_query($db, $q_library);
			while ($row = sqlite_fetch_array($query)){
				$option_value = $row['floor_id'];
				$option_name = $row['library'].' - '.$row['floor'];
				print "<option value='$option_value'>$option_name</option>";
			}

					?>
				</select>
			</div>
			<div id="stacks" height="800px"></div>
		</div>

<div class="container">
<div style="height: 4em">			
	
<!-- INCLUDING FOOTER FILE HERE        Do Not Edit                                   -->
<script language="JavaScript" src="<?=$public_path?>/javascripts/footers/li_footer.js" type="text/javascript"></script> 
<!-- END FOOTER HEADER FILE    -->
</div>
</body>
</html>