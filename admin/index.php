<!DOCTYPE html 
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	
<head>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
<link rel="stylesheet" href="../css/blueprint/screen.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="../css/blueprint/print.css" type="text/css" media="print">
<!--[if lt IE 8]>
    <link rel="stylesheet" href="../css/blueprint/ie.css" type="text/css" media="screen, projection">
  <![endif]-->
<link href="../css/stylesheets/style.css" rel="stylesheet" type="text/css" />
<link href="../css/stylesheets/li_stylesheet.css" rel="stylesheet" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>  
<title>Holland & Terrell Stack Chart Admin</title>
<script type="text/javascript">
	function loadStacks(elem){
		//alert($('#'+elem.id).val());
		var floor = $('#'+elem.id).val();
		var url = "stacks_list.php";
		var params = {'floor': floor };		
		$('#stacks').load(url, params);
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
//$q_floor = "SELECT id, name FROM Floors WHERE 1";
?>
<body>
	<?
	if(!($db=sqlite_open("../db/stackchart.sqlite2.db")))
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
</body>
</html>