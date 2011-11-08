<?
if(!($db=sqlite_open("../db/stackchart.sqlite2.db")))
	{
		echo "<h2> Database Error </h2>";
		die();
	}
$info_style = "notice";
// check if saving
if(isset($_REQUEST['btSave'])){
	$id = $_REQUEST['id'];
	$floor_id = $_REQUEST['floor_id'];
	$number = $_REQUEST['number'];
	$begins_with = sqlite_escape_string($_REQUEST['begins_with']);
	$ends_with = sqlite_escape_string($_REQUEST['ends_with']);
	$url = sqlite_escape_string($_REQUEST['url']);
	
	if($id > 0){
		//updating
		$query = "BEGIN TRANSACTION;
			UPDATE Stacks 
			SET number = $number, begins_with = '$begins_with', 
			ends_with = '$ends_with', number_url = '$url', floor_id = $floor_id
			WHERE id = $id;
			COMMIT;";
		//$equery = sqlite_escape_string($query);	
		if(!sqlite_exec($db, $query)){
			$info_style = "error";
			$msg = "Error updating the stack: ".sqlite_error_string(sqlite_last_error($db));
		} else {
			$info_style = "success";
			$msg = "Stack updated succesfully";
		}
	} else {
		//new stack
		$query = "BEGIN TRANSACTION;
			INSERT INTO Stacks (number, begins_with, ends_with, number_url, floor_id)
			VALUES ($number, '$begins_with', '$ends_with', '$url', $floor_id);
			COMMIT";
			;
		//$equery = sqlite_escape_string($query);	
		if(!sqlite_exec($db, $query)){
			$info_style = "error";
			$msg = "Error saving the stack: ".sqlite_error_string(sqlite_last_error($db));
		} else {
			$info_style = "success";
			$msg = "Stack saved succesfully";
			$stackId = sqlite_last_insert_rowid($db); 
		}
		
	}
	//$msg = var_dump($_REQUEST);
	//$msg = $query."<br><br>".$equery;
}
// Retrieve record from database
if(!isset($stackId)){
	$stackId = $_REQUEST['id'];
}
if($stackId){ //not zero
	$query = "SELECT s.id id, s.number number, s.number_url url,
			s.begins_with begins, s.ends_with ends, f.name floor, s.floor_id floor_id,
			l.name library, f.library_id library_id
			FROM Stacks s join Floors f on s.floor_id = f.id
				join Libraries l on l.id = f.library_id
			WHERE s.id = $stackId";
	$res = sqlite_query($db,$query);
	$stack = sqlite_fetch_array($res);
	$header = "Edit stack - ".$stack['library']." ".$stack['floor'];	
	if(!$stack){
		$msg = "Wrong stack id number";
		//die();
	}	
} else {
	$query = "SELECT l.name library, f.name floor, f.id floor_id
			FROM Floors f join Libraries l on l.id = f.library_id
			WHERE f.id = ".$_REQUEST['floor_id'];
	$res = sqlite_query($db,$query);
	$floor = sqlite_fetch_array($res);
	$header = "New stack - ".$floor['library']." ".$floor['floor'];
	$stack = new ArrayObject();
	$stack['library'] = '';
	$stack['floor'] = '';
	$stack['id'] = 0;
	$stack['floor_id'] = $floor['floor_id'];
	$stack['number'] = '';
	$stack['begins'] = '';
	$stack['ends'] = '';
	$stack['url'] = '';	
}

?>
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
</head>
<body>			
	<div id="formDiv" class="container" height="800px">
	<? if (isset($msg) && $msg){
		print "<br><div class=\"$info_style\">".$msg."</div>";
	}?>	
	<h2><?=$header?></h2>
	
		<form action="<?=basename($_SERVER['PHP_SELF']) ?>" method="POST">
		<input type="hidden" name="id" value="<?=$stack['id']?>" />
		<input type="hidden" name="floor_id" value="<?=$stack['floor_id']?>" />
		<fieldset>
			<p>
				<label>Number</label><input value="<?= $stack['number'] ?>" name="number" class="text" />
			</p>									
			<p>
				<label>Begins with</label><input value="<?= $stack['begins'] ?>" name="begins_with" class="text" />
			</p>									
			<p>
				<label>Ends with</label><input value="<?= $stack['ends'] ?>" name="ends_with" class="text" />
			</p>									
			<p>
				<label>URL</label><input value="<?= $stack['url'] ?>" name="url" size="60" class="text">
			</p>			
		<input type="submit" name="btSave" value="Save">
		<input type="reset" value="Reset">
		</fieldset>
		</form>
		<br>
		<a href="index.php">Back to stacks list</a>
	</div>	
</body>
</html>
<?
sqlite_close($db); 
?>