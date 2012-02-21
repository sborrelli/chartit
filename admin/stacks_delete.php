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
<?
if(!($db=sqlite_open(DB_PATH)))
	{
		echo "<h2> Database Error </h2>";
		die();
	}

$id = $_REQUEST['stackId'];
$query = "BEGIN TRANSACTION;
		DELETE FROM Stacks WHERE id = $id;
		COMMIT;";
$res = sqlite_exec($db, $query);
//$res = rand(0,4);
if($res){
	//success
	$info_style = "success";
	$msg = "Stack deleted from database";
} else {
	//fail
	$info_style = "error";
	$msg = "Error deleting the stack from database: ".sqlite_error_string(sqlite_last_error($db));
}
?>
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
<title>Holland & Terrell Stack Chart Admin</title>
</head>
<body>
		<div class="<?=$info_style?>">
			<?=$msg?>
		</div>
		<br>
		<a href="index.php">Back to stacks list</a>
	</body>
</html>
<?
sqlite_close($db); 
?>