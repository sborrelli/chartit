<? require_once ("_common.php"); ?>
<?
if(!($db=sqlite_open(DB_PATH)))
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
	$map_url = sqlite_escape_string($_REQUEST['map_url']);
	$map_coords = sqlite_escape_string($_REQUEST['map_coords']);
	
	if($id > 0){
		//updating
		$query = "BEGIN TRANSACTION;
			UPDATE Stacks 
			SET number = $number, begins_with = '$begins_with', 
			ends_with = '$ends_with', number_url = '$url', floor_id = $floor_id,
			map_url = '$map_url', map_coords = '$map_coords'
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
			INSERT INTO Stacks (number, begins_with, ends_with, number_url, floor_id, map_url, map_coords)
			VALUES ($number, '$begins_with', '$ends_with', '$url', $floor_id, '$map_url','$map_coords');
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
			l.name library, f.library_id library_id, s.map_url map_url, s.map_coords map_coords
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
	$stack['map_url'] = '';
	$stack['map_coords'] = '';
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
<script src="<?=$public_path?>/javascripts/jquery/jquery-1.5.min.js"></script>  
<title>Holland & Terrell Stack Chart Admin</title>
<script type="text/javascript" src="<?=$public_path?>/javascripts/position.js"></script>
<script type="text/javascript">

	var imgH, imgW;
	var cnvs, ctxt;
	var dragok = false;
	var fromX, fromY, toX, toY; //click event locations

	function imgSelected(imageId){
		var img = $('img#'+imageId); 
		//alert(img.attr('src'));
		var imagePath = img.attr('src'); 
		loadImage(imagePath);
		updateFloorMap(imagePath);
		if($('#map_coords').val()){
			updateRect($('#map_coords').val());
		}
	}
	
	function loadImage(imgPath){
		cnvs = $('#mapCanvas')[0];
		if(cnvs.getContext){
			ctxt = cnvs.getContext('2d');
			//load image in canvas				
			var img = new Image();					
			img.src = imgPath;
			img.onload = function(){
						//resize canvas container
						/*var divStyle = 'width: '+img.width+'; height: '+img.height;
						$('#drawArea').attr('style', divStyle);*/
						//resize canvas to fit image
						cnvs.width = img.width;				
						cnvs.height = img.height;						
						ctxt.drawImage(img, 0, 0, img.width, img.height);
						//ctxt.stroke();
						//update "global" state
						imgW = img.width;
						imgH = img.height;
						initRectCanvas(imgW, imgH);
					}
		}				
	}
	
	function initRectCanvas(w, h){
		cnvs = $('#rectCanvas')[0];
		cnvs.width = w;				
		cnvs.height = h;
		cnvs.onmousedown = btDown;
		cnvs.onmouseup = btUp;
		ctxt = cnvs.getContext('2d');
	}
	
	function updateFloorMap(imgPath){
		var filename = imgPath.split('/').pop();
		$('#map_url').val(filename);
	}
	
	function drawSquare(){
		clear();
		//fill with semi-transparent red
		ctxt.globalAlpha = 0.5;					
		ctxt.fillStyle="#FF0000";
		var w = Math.abs(toX - fromX);
		var h = Math.abs(toY - fromY);
		ctxt.fillRect(fromX,fromY,w,h); //only draws to right and down, I know.

	}

	function clear() {
		//var msg = "Image w: " + imgW + "h: " + imgH;
		//alert(msg);
		ctxt.clearRect(0, 0, imgW, imgH);
	}

	function btUp(e) {
		dragok = false;
		cnvs.onmousemove = null;		
	}

	function btDown(e) {
		var pos = getElementAbsolutePos(cnvs);
		if(e.pageX > pos.x && e.pageX < pos.x + cnvs.width 
			&& e.pageY > pos.y && e.pageY < pos.y + cnvs.height) {
			fromX = e.pageX - Math.round(pos.x);
			fromY = e.pageY - Math.round(pos.y);
			dragok = true;
			cnvs.onmousemove = mouseMove;
			/*var msg = "in! x: " + fromX + " y: " + fromY; 
			alert(msg)*/				
		}
	}

	function mouseMove(e) {
		if(dragok) {
			var pos = getElementAbsolutePos(cnvs);
			toX = e.pageX - Math.round(pos.x);
			toY = e.pageY - Math.round(pos.y);
			drawSquare();
			logMapCoords();
		}
	}
			
	function logMapCoords(){
		var w = toX - fromX;
		var h = toY - fromY;
		var coords = fromX+'#'+fromY+'#'+w+'#'+h;
		$('#map_coords').val(coords);
	}	
	
	function updateRect(val){
		var vals = val.split('#');
		fromX = parseInt(vals[0]);
		fromY = parseInt(vals[1]);
		toX = fromX + parseInt(vals[2]);
		toY = fromY + parseInt(vals[3]);
		drawSquare();
	}		
			
</script>
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
		<div >
		<a href="index.php">Back to stacks list</a>	
		<fieldset>
			<div style="float: left" class="span-14">
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
			<p>
				<label>Floor Map</label><input value="<?= $stack['map_url'] ?>" id="map_url" 
				name="map_url" size="60" class="text" readonly="readonly" >
			</p>
			<p>
				<div>
					<div style="float:left; vertical-align: bottom">
					<img id="terrel_basement" title="Basement" class="selectable"
						src="<?=$public_path?>/images/terrel_basement.jpg" width="100" onclick="imgSelected(this.id)"/>
					<br>Basement	
					</div>	
					<div style="float:left">					
					<img id="img_ground" title="Ground Floor"  class="selectable"
						src="<?=$public_path?>/images/terrel_ground.jpg" width="100" onclick="imgSelected(this.id)"/>
					<br>Ground	
					</div>
					<div style="float:left">						
					<img id="img_holland_1st" title="1st Floor"  class="selectable"
						src="<?=$public_path?>/images/holland_1st.jpg" width="100" onclick="imgSelected(this.id)"/>
					<br>First	
					</div>
					<div style="float:left">	
					<img id="img_holland_2nd" title="2nd Floor" class="selectable"
						src="<?=$public_path?>/images/holland_2nd.jpg" width="100" onclick="imgSelected(this.id)"/>
					<br>Second	
					</div>
					<div >	
					<img id="img_holland_3rd" title="3rd Floor" class="selectable"
						src="<?=$public_path?>/images/holland_3rd.jpg" width="100" onclick="imgSelected(this.id)"/>
					<br>Third	
					</div>									
				</div>				
			</p>
			<p>
				<label>Map Coords</label><input value="<?= $stack['map_coords'] ?>" id="map_coords"
				name="map_coords" size="60" class="text" onchange="updateRect(this.value)">
			</p>
			
			<div style="clear: both"></div>
			<div>
				<input type="submit" name="btSave" value="Save">
				<input type="reset" value="Reset">
			</div>
		</div>
		<div class="info span-8 " style="float: left">
			<fieldset>
				<legend>Fields:</legend>
				<ul>
					<li><strong>Number</strong>: stack number</li>			
					<li><strong>Begins with</strong>: first call number. If empty, type "Empty".</li>
					<li><strong>Begins with</strong>: last call number. If empty, type "Empty".</li>
					<li><strong>URL</strong>: link to html map page. Only relevant if Map Coords is empty.</li>
					<li><strong>Floor Map</strong>: Name of the selected image. It is filled when one 
						of the floor images is selected. Non-editable by hand.</li>
					<li><strong>Map Coords</strong>: Coordinates (x, y, width, height) for the highlighted rectangle 
						on the image select above. It is calculated automatically
						when drawing, and can also be edited directly.</li>
				</ul>
			</fieldset>
			<fieldset>
				<legend>Buttons</legend>
				<ul>
					<li><strong>Save</strong>: Saves the stack into the database.</li>
					<li><strong>Reset</strong>: Restores the previous values when changes are made (without saving).</li>
				</ul>
			</fieldset>			
		</div>
		</fieldset>
		</div>
		<div>
			<div  id="drawArea" style="position: relative">
				<canvas id="mapCanvas" style="position: absolute; left: 0; top: 0; z-index: 0">
					Your browser does not support canvas
				</canvas>
				<canvas id="rectCanvas" style="position: absolute; left: 0; top: 0; z-index: 1">
					Your browser does not support canvas
				</canvas>
			</div>
			</div>
		</form>
		<br>		
	</div>
<div class="container">
<div style="height: 4em">			
	
<!-- INCLUDING FOOTER FILE HERE        Do Not Edit                                   -->
<script language="JavaScript" src="<?=$public_path?>/javascripts/footers/li_footer.js" type="text/javascript"></script> 
<!-- END FOOTER HEADER FILE    -->
</div>		
</body>
</html>
<?
sqlite_close($db); 
?>